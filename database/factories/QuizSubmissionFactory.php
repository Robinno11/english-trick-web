<?php

namespace Database\Factories;

use App\Models\QuizSubmission;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<QuizSubmission>
 */
class QuizSubmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'whatsapp' => '0812'.fake()->numerify('########'),
            'has_bimbel' => fake()->randomElement(['Sudah', 'Belum']),
            'bimbel_duration' => '6 - 12 Bulan',
            'branch' => fake()->randomElement(['Damarsi', 'Karangbong', 'Taman Pondok Jati']),
            'email' => fake()->safeEmail(),
            'category' => fake()->randomElement(['kids', 'teens', 'adults']),
            'total_questions' => 5,
            'correct_answers' => 4,
            'score' => 80,
            'cefr_level' => 'A2 Flyers',
            'recommended_program' => 'English for Kids - Fun Speaking',
            'answers' => [0, 1, 2, 0, 1],
            'skill_breakdown' => [
                'vocabulary' => 85,
                'grammar' => 80,
                'speaking' => 75,
            ],
            'notes' => 'Tingkat pemahaman dasar sangat baik.',
        ];
    }
}
