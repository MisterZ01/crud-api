<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Panneau>
 */
class PanneauFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom_panneau' => fake()->name(),
            'longitude' => fake()->phoneNumber(),
            'latidude' => fake()->phoneNumber(),
            'contrat_id' => fake()->numberBetween($min = 1, $max = 100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
