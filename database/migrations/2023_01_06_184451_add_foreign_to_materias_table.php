<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materias', function (Blueprint $table) {
            $table->unsignedBigInteger('estudiantes_id'); 
            $table->foreign('estudiantes_id')->references('id')->on('estudiantes');
            $table->unsignedBigInteger('profesores_id'); 
            $table->foreign('profesores_id')->references('id')->on('profesores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materias', function (Blueprint $table) {
            //
        });
    }
}
