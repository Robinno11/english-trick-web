<?php

namespace Database\Factories;

use App\Models\QuizQuestion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<QuizQuestion>
 */
class QuizQuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category' => fake()->randomElement(['kids', 'teens', 'adults']),
            'question' => 'Complete the sentence: "I ___ English with English Trick."',
            'sub_text' => 'Pilih jawaban yang paling tepat:',
            'emoji' => '🎯',
            'options' => ['speak', 'speaks', 'speaking', 'spoke'],
            'correct_index' => 0,
            'speech_text' => 'I speak English with English Trick',
            'trick_tip' => 'Subjek "I" berpasangan langsung dengan kata kerja dasar V1 tanpa tambahan -s/-es!',
            'skill_focus' => 'speaking',
            'order' => 1,
        ];
    }
}
