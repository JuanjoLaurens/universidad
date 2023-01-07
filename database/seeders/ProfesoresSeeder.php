<?php

namespace Database\Seeders;

use App\Models\Profesores;
use Illuminate\Database\Seeder;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profesores::factory()
        ->count(25)
        ->hasPost(1)
        ->create();
    }
}
