<?php

namespace Database\Factories;

use App\Models\Materias;
use Illuminate\Database\Eloquent\Factories\Factory;

class MateriasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Materias::class;

    public function definition()
    {
        return [
            'descripcion' => $this->faker->realText(),
            'nombre' => $this->faker->name(),
            'creditos' => '10',
            'area_conocimiento' => 'Desarrollo',
            'opciones' => $this->faker->randomElement($array = ['1', '2',]),
            'profesores_id' => $this->faker->randomElement($array = ['1', '2', '3','5', '10', '20','30', '7', '8']),
            'estudiantes_id' => $this->faker->randomElement($array = ['1', '2', '3','5', '10', '20','30', '7', '8']),


        ];
    }
} 
