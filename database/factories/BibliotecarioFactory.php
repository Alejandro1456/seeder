<?php

namespace Database\Factories;
use App\Models\Bibliotecario;
use Illuminate\Database\Eloquent\Factories\Factory;

class BibliotecarioFactory extends Factory
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
            'cargo' => $this->faker->randomElement(['Limpieza', 'Administrador', 'Atencion Cliente', 'Supervisor']),
            'turno' => $this->faker->randomElement(['Fin de semana', 'Tarde', 'Mañana', 'Noche']),
            'telefono' => $this->faker->phoneNumber()
        ];
    }
}
