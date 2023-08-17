<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(1,10),
            'title' => fake()->title(),
            'text' => fake()->paragraph(1),
            'status' => fake()->randomElement(['High', 'Normal', 'Low']),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
