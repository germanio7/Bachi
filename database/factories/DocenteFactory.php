<?php

use Faker\Generator as Faker;

use App\Docente;

$factory->define(Docente::class, function (Faker $faker) {
    return [
    	'cuil' => $faker->numberBetween($min = 2000000000, $max = 2099999999),
    	'apellido' => $faker->lastName,
    	'nombre' => $faker->firstName,
    	'matricula' => $faker->numberBetween($min = 00000, $max = 99999),
    	'titulo' => $faker->company,
    	'direccion' => $faker->streetAddress,
    	'telefono' => $faker->e164PhoneNumber,
    	'email' => $faker->freeEmail,
    ];
});
