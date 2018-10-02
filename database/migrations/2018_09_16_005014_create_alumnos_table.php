<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->BigInteger('cuil')->unique();
            $table->string('apellido');
            $table->string('nombre');
            $table->date('fecha_nacimiento')->format('d-m-Y');
            $table->string('lugar_nacimiento');
            $table->string('nacionalidad');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->tinyInteger('asignacion_universal');
            $table->tinyInteger('salario_familiar');
            $table->tinyInteger('pueblo_originario');
            $table->tinyInteger('programa_cai');
            $table->tinyInteger('discapacidad');
            $table->tinyInteger('diabetes');
            $table->tinyInteger('hernias');
            $table->tinyInteger('convulsiones');
            $table->tinyInteger('problemas_respiratorios');
            $table->tinyInteger('problemas_cardiacos');
            $table->tinyInteger('alergias');
            $table->tinyInteger('esguinces');
            $table->tinyInteger('enfermedades_infectocontagiosas');
            $table->tinyInteger('incapacidad');
            $table->string('otros');
            $table->tinyInteger('certificado_salud');
            $table->tinyInteger('certificado_dental');
            $table->tinyInteger('carnet_vacuna');
            $table->tinyInteger('grupo_sanguineo');
            $table->tinyInteger('certificado_nivel_inicial');
            $table->tinyInteger('fotocopia_dni');
            $table->tinyInteger('contribucion_cooperadora');
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
        Schema::dropIfExists('alumnos');
    }
}
