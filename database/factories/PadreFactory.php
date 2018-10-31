<?php

use Faker\Generator as Faker;

use App\Padre;

$factory->define(Padre::class, function (Faker $faker) {
    return [
    	'alumno_id' => App\Alumno::all()->random()->id,
    	'madre_padre' => $faker->boolean,
        'cuil' => $faker->numberBetween($min = 2000000000, $max = 2099999999),
    	'apellido' => $faker->lastName,
    	'nombre' => $faker->firstName,
    	'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $min =1999, $max = 2002),
    	'lugar_nacimiento' => $faker->city,
    	'nacionalidad' => $faker->country,
    	'direccion' => $faker->streetAddress,
    	'a_cargo' => $faker->boolean,
    	'es_tutor' => $faker->boolean,
    	'patria_potestad' => $faker->boolean,
    	'vive_con_alumno' => $faker->boolean,
    	'ocupacion' => 'comerciante',
    ];
});
