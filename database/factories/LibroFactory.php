<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'editorial' => $this->faker->randomElement(['Coquito', 'Ran-Ma', 'La Hoguera', 'Verbo Divino', 'Presencia']),
            'ejemplares' => $this->faker->randomElement(['5', '8', '12', '20']),
            'bibliotecario_id' => Bibliotecario::all()->random()->id
        ];
    }
}
