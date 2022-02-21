<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
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
            'edad' => $this->faker->randomElement(['17', '20', '19', '18', '30']),
            'semestre' => $this->faker->randomElement(['Primer', 'Segundo', 'Tercero', 'Cuarto']),
            'telefono' => $this->faker->phoneNumber()
        ];
    }
}
