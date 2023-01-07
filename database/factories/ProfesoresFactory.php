<?php

namespace Database\Factories;

use App\Models\Profesores;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Profesores::class;
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

        ];
    }
}
