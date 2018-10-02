<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padres', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('alumno_id');
            $table->tinyInteger('madre_padre');
            $table->BigInteger('cuil')->unique();
            $table->string('apellido');
            $table->string('nombre');
            $table->date('fecha_nacimiento');
            $table->string('lugar_nacimiento');
            $table->string('nacionalidad');
            $table->string('direccion');
            $table->tinyInteger('a_cargo');
            $table->tinyInteger('es_tutor');
            $table->tinyInteger('patria_potestad');
            $table->tinyInteger('vive_con_alumno');
            $table->string('ocupacion');
            $table->timestamps();

            $table->foreign('alumno_id')->references('id')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('padres');
    }
}
