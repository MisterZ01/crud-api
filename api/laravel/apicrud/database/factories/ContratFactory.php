<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contrat>
 */
class ContratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom_contrat' => fake()->name(),
            'client_id' => fake()->unique()->numberBetween($min = 1, $max = 100),
            'dateDebut' => fake()->date(),
            'dateFin' => fake()->date(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
