<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('documento');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->integer('telefono');
            $table->string('direccion');
            $table->string('ciudad');
            $table->integer('semestre');
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
        Schema::dropIfExists('estudiantes');
    }
}
