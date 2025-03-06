<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CardFactory extends Factory
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
            'type' => fake()->name(),
            'color' => fake()->name(),
            'rarity' => fake()->name(),
            'mana_cost' => fake()->numberBetween(1, 10),
            'description' => fake()->name(),
            'expansion' => fake()->name(),
        ];
    }
}
