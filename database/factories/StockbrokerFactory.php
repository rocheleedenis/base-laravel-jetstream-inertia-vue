<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stockbroker>
 */
class StockbrokerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fullName = $this->faker->company;

        return [
            'name' => current(explode(' ', $fullName)),
            'full_name' => $fullName,
            'cnpj' => $this->faker->randomNumber(9, true),
        ];
    }
}
