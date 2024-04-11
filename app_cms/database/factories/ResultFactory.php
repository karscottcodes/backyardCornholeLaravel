<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "date" => fake()->date(),
            "note" => fake()->sentence(),
            // "team1_id" => fake()->numberBetween(1,10),
            "team1_score" => fake()->numberBetween(1,21),
            // "team2_id" => fake()->numberBetween(1,10),
            "team2_score" => fake()->numberBetween(1,21)
        ];
    }
}
