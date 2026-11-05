<?php

namespace Database\Factories;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Registration>
 */
class RegistrationFactory extends Factory
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
            'whatsapp' => '0813'.fake()->numerify('########'),
            'email' => fake()->safeEmail(),
            'program_id' => null,
            'program_name' => 'General English & Speaking Booster',
            'learning_mode' => fake()->randomElement(['offline', 'online', 'privat']),
            'preferred_schedule' => 'Weekend (Sabtu-Minggu)',
            'message' => 'Mau tanya jadwal kelas terdekat di cabang Damarsi Sidoarjo.',
            'status' => 'pending',
        ];
    }
}
