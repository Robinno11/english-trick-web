<?php

namespace Tests\Feature;

use App\Models\QuizQuestion;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class QuizTest extends TestCase
{
    use RefreshDatabase;

    public function test_quiz_page_can_be_rendered(): void
    {
        $response = $this->get('/quiz');

        $response->assertStatus(200);
        $response->assertSee('Interactive Placement Test');
        $response->assertSee('Placement Test Identitas');
        $response->assertSee('Kids');
        $response->assertSee('Junior');
        $response->assertSee('Teens');
        $response->assertSee('Adults');
    }

    public function test_quiz_questions_api_returns_questions_by_category(): void
    {
        $this->seed();

        $response = $this->getJson('/quiz/api/questions?category=kids');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'status',
            'category',
            'total',
            'questions' => [
                '*' => ['id', 'category', 'question', 'options', 'speech_text'],
            ],
        ]);

        $this->assertEquals('kids', $response->json('category'));
        $this->assertGreaterThan(0, $response->json('total'));
    }

    public function test_quiz_submission_evaluates_score_and_saves_to_database(): void
    {
        $this->seed();

        $questions = QuizQuestion::where('category', 'kids')->get();
        $answers = [];
        foreach ($questions as $q) {
            $answers[$q->id] = $q->correct_index; // all correct
        }

        $payload = [
            'name' => 'Kenzo Pratama',
            'whatsapp' => '081234567890',
            'email' => 'kenzo@example.com',
            'category' => 'kids',
            'answers' => $answers,
        ];

        $response = $this->postJson('/quiz/submit', $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'status' => 'success',
            'name' => 'Kenzo Pratama',
            'score' => 100,
        ]);
        $this->assertStringContainsString('6285385120633', $response->json('whatsapp_url'));

        $this->assertDatabaseHas('quiz_submissions', [
            'name' => 'Kenzo Pratama',
            'whatsapp' => '081234567890',
            'category' => 'kids',
            'score' => 100,
        ]);
    }

    public function test_quiz_submission_saves_placement_test_identity_fields(): void
    {
        $this->seed();

        $questions = QuizQuestion::where('category', 'teens')->get();
        $answers = [];
        foreach ($questions as $q) {
            $answers[$q->id] = $q->correct_index;
        }

        $payload = [
            'name' => 'Sarah Amelia',
            'whatsapp' => '089876543210',
            'has_bimbel' => 'Sudah',
            'bimbel_duration' => '6 - 12 bulan',
            'branch' => 'Damarsi (Buduran)',
            'category' => 'teens',
            'answers' => $answers,
        ];

        $response = $this->postJson('/quiz/submit', $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'status' => 'success',
            'name' => 'Sarah Amelia',
            'has_bimbel' => 'Sudah',
            'bimbel_duration' => '6 - 12 bulan',
            'branch' => 'Damarsi (Buduran)',
        ]);

        $this->assertDatabaseHas('quiz_submissions', [
            'name' => 'Sarah Amelia',
            'whatsapp' => '089876543210',
            'has_bimbel' => 'Sudah',
            'bimbel_duration' => '6 - 12 bulan',
            'branch' => 'Damarsi (Buduran)',
            'category' => 'teens',
        ]);

        $whatsappUrl = urldecode($response->json('whatsapp_url'));
        $this->assertStringContainsString('Placement test identitas', $whatsappUrl);
        $this->assertStringContainsString('*Nama:* Sarah Amelia', $whatsappUrl);
        $this->assertStringContainsString('*Bimbel?:* Sudah', $whatsappUrl);
        $this->assertStringContainsString('*If sudah berapa lama?:* 6 - 12 bulan', $whatsappUrl);
        $this->assertStringContainsString('*Pilih cabang terdekat:* Damarsi (Buduran)', $whatsappUrl);
        $this->assertStringContainsString('*Nilai (setelah selesai tes):*', $whatsappUrl);
    }
}
