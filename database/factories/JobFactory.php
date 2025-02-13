<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => '$' . fake()->numberBetween(1000, 10000) . ' USD',
            'location' => fake()->city(),
            'schedule' => fake()->randomElement(['full-time', 'part-time', 'remote']),
            'url' => fake()->url(),
            'featured' => false,
        ];
    }
}
