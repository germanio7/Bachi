<?php

use Faker\Generator as Faker;

use App\Alumno;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'cuil' => $faker->numberBetween($min = 2000000000, $max = 2099999999),
    	'apellido' => $faker->lastName,
    	'nombre' => $faker->firstName,
    	'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $min =1999, $max = 2002),
    	'lugar_nacimiento' => $faker->city,
    	'nacionalidad' => $faker->country,
    	'direccion' => $faker->streetAddress,
    	'repitente' => false,
    	'asignacion_universal' => $faker->boolean,
    	'salario_familiar' => $faker->boolean,
    	'pueblo_originario' => $faker->boolean,
    	'programa_cai' => $faker->boolean,
    	'discapacidad' => $faker->boolean,
    	'diabetes' => $faker->boolean,
    	'hernias' => $faker->boolean,
    	'convulsiones' => $faker->boolean,
    	'problemas_respiratorios' => $faker->boolean,
    	'problemas_cardiacos' => $faker->boolean,
    	'alergias' => $faker->boolean,
    	'esguinces' => $faker->boolean,
    	'enfermedades_infectocontagiosas' => $faker->boolean,
    	'incapacidad' => $faker->boolean,
    	'certificado_salud' => $faker->boolean,
    	'certificado_dental' => $faker->boolean,
    	'carnet_vacuna' => $faker->boolean,
    	'grupo_sanguineo' => $faker->boolean,
    	'certificado_nivel_inicial' => $faker->boolean,
    	'fotocopia_dni' => $faker->boolean,
    	'contribucion_cooperadora' => $faker->boolean,
    ];
});
