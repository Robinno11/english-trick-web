<?php

namespace Tests\Feature;

use App\Models\Program;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_can_be_stored_and_returns_json_with_whatsapp_url(): void
    {
        $this->seed();

        $program = Program::first();

        $payload = [
            'name' => 'Budi Santoso',
            'whatsapp' => '081298765432',
            'email' => 'budi@example.com',
            'program_id' => $program->id,
            'learning_mode' => 'offline',
            'preferred_schedule' => 'Sore (16.00 WIB)',
            'message' => 'Mau tanya jadwal kelas terdekat di cabang Damarsi.',
        ];

        $response = $this->postJson('/daftar', $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'status' => 'success',
        ]);
        $response->assertJsonStructure([
            'status',
            'message',
            'registration_id',
            'whatsapp_url',
        ]);
        $this->assertStringContainsString('6285385120633', $response->json('whatsapp_url'));

        $this->assertDatabaseHas('registrations', [
            'name' => 'Budi Santoso',
            'whatsapp' => '081298765432',
            'program_id' => $program->id,
            'learning_mode' => 'offline',
        ]);
    }
}
