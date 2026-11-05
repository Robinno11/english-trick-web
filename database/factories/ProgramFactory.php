<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Program>
 */
class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->words(3, true);

        return [
            'name' => ucwords($name),
            'slug' => str()->slug($name),
            'category' => fake()->randomElement(['kids', 'teens', 'adults', 'toefl', 'private']),
            'tagline' => fake()->sentence(),
            'age_group' => '7 - 12 Tahun',
            'description' => fake()->paragraph(),
            'features' => ['Modul Interaktif', 'Tutor Berpengalaman', 'Sertifikat Resmi'],
            'price_starting' => 'Rp 299.000 / bln',
            'badge' => 'Populer',
            'icon' => 'sparkles',
            'is_popular' => true,
            'order' => 1,
        ];
    }
}
