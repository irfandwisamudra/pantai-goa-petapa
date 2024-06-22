<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TransaksiTiket>
 */
class TransaksiTiketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jumlah' => fake()->randomNumber(2),
            'status' => fake()->randomElement(['active', 'expired', 'canceled', 'used'])
        ];
    }
}
