<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Minor18>
 */
class Minor18Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'DNI' => fake()->unique()->numerify('########'),
            'firstName' => fake()->name(),
            'lastName' => fake()->lastName(),
            'birthDate' => fake()->date(),
            'phone' => fake()->numerify('### #######'),
            'address' => fake()->address(),
            'email' => fake()->unique()->email(),
            'client_id' => 1
        ];
    }
}
