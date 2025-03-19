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
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['450 000 NOK', '500 000 NOK', '550 000 NOK', '600 000 NOK', '650 000 NOK', '700 000 NOK']),
            'location' => fake()->randomElement([fake()->city(), 'remote']),
            'schedule' => fake()->randomElement(['full-time', 'part-time', 'contract']),
            'url' => fake()->url(),
            'featured' => 'false',
        ];
    }
}
