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
            $table->BigInteger('cuil')->unique()->nullable();
            $table->string('apellido')->nullable();
            $table->string('nombre')->nullable();
            $table->string('fecha_nacimiento')->nullable();
            $table->string('lugar_nacimiento')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->string('direccion')->nullable();
            $table->string('barrio')->nullable();
            $table->string('departamento')->nullable();
            $table->string('grado')->nullable();
            $table->string('seccion')->nullable();
            $table->string('turno')->nullable();
            $table->string('otro_establecimiento')->nullable();
            $table->tinyInteger('pase')->nullable();
            $table->date('anio_anterior')->nullable();
            $table->tinyInteger('repitente')->nullable();
            $table->tinyInteger('asignacion_universal')->nullable();
            $table->tinyInteger('salario_familiar')->nullable();
            $table->tinyInteger('pueblo_originario')->nullable();
            $table->tinyInteger('programa_cai')->nullable();
            $table->tinyInteger('discapacidad')->nullable();
            $table->tinyInteger('diabetes')->nullable();
            $table->tinyInteger('hernias')->nullable();
            $table->tinyInteger('convulsiones')->nullable();
            $table->tinyInteger('problemas_respiratorios')->nullable();
            $table->tinyInteger('problemas_cardiacos')->nullable();
            $table->tinyInteger('alergias')->nullable();
            $table->tinyInteger('esguinces')->nullable();
            $table->tinyInteger('enfermedades_infectocontagiosas')->nullable();
            $table->tinyInteger('incapacidad')->nullable();
            $table->string('otros')->nullable();
            $table->tinyInteger('certificado_salud')->nullable();
            $table->tinyInteger('certificado_dental')->nullable();
            $table->tinyInteger('carnet_vacuna')->nullable();
            $table->tinyInteger('grupo_sanguineo')->nullable();
            $table->tinyInteger('certificado_nivel_inicial')->nullable();
            $table->tinyInteger('fotocopia_dni')->nullable();
            $table->tinyInteger('contribucion_cooperadora')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
