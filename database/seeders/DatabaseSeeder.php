<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Profesores::factory(40)->create();
         \App\Models\Estudiantes::factory(40)->create();
         \App\Models\Materias::factory(40)->create();


    }
}
