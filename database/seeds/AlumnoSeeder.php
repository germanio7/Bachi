<?php

use Illuminate\Database\Seeder;

use App\Alumno;

class AlumnoSeeder extends Seeder
{
    public function run()
    {
        factory(Alumno::class, 1000)->create();
    }
}
