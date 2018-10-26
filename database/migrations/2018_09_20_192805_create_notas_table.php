<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('alumno_id');
            $table->unsignedInteger('materia_id');
            $table->float('primer_trimestre')->nullable();
            $table->float('segundo_trimestre')->nullable();
            $table->float('tercer_trimestre')->nullable();
            $table->float('integral')->nullable();
            $table->float('diciembre')->nullable();
            $table->float('marzo')->nullable();
            $table->float('final')->nullable();
            $table->timestamps();

            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('materia_id')->references('id')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
