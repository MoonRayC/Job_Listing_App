<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobOffer>
 */
class JobOfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => employer::factory(),
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'requirements' => $this->faker->paragraph,
            'location' => $this->faker->address,
            'salary' => 50000.00,
            'posted_at' => now(),
            'expires_at' => now()->addDays(30)
        ];
    }
}
