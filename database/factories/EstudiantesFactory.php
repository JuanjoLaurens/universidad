<?php

namespace Database\Factories;

use App\Models\Estudiantes;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudiantesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Estudiantes::class;
    public function definition()
    {
        return [
            'documento' => $this->faker->buildingNumber(),
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->buildingNumber(),
            'direccion' => $this->faker->address(),
            'ciudad' => $this->faker->city(),
            'semestre' => $this->faker->randomElement($array = ['1', '2', '3','5', '10']),
            'profesores_id' => $this->faker->randomElement($array = ['1', '2', '3','5', '10', '20','30', '7', '8']),


        ];
    }
}
