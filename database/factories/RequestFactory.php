<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Request>
 */
class RequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(['Reintegro','Prestacion']),
            'date' => date("Y-m-d"),
            'CBU' => $this->faker->numerify('######################'),
            'recipient_DNI' => $this->faker->numerify('########'),
            'recipient_name' => $this->faker->name(),
            'recipient_last_name' => $this->faker->lastName(),
            'request_image_path' => 'img_solicitudes/solicitud_1697336283_11111111.jpg',
            'state' => 'Pendiente',
            'amount' => $this->faker->randomFloat(2,10,1000000),
            'description' => $this->faker->sentence(),
            'client_id' => 1,
        ];
    }
}
