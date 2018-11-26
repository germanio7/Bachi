<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('materias')->insert([
        	'nombre' => 'Lengua y Literatura I',
        ]);

        DB::table('materias')->insert([
        	'nombre' => 'Matemática I',
        ]);

        DB::table('materias')->insert([
        	'nombre' => 'Lenguas Extranjeras I',
        ]);

        DB::table('materias')->insert([
        	'nombre' => 'Plástica I',
        ]);

        DB::table('materias')->insert([
        	'nombre' => 'Música I',
        ]);

        DB::table('materias')->insert([
        	'nombre' => 'Educación Física I',
        ]);

        DB::table('materias')->insert([
        	'nombre' => 'Geografía I',
        ]);

        DB::table('materias')->insert([
        	'nombre' => 'Historia I',
        ]);

        DB::table('materias')->insert([
        	'nombre' => 'Biología I',
        ]);

        DB::table('materias')->insert([
        	'nombre' => 'Física-Química I',
        ]);

        DB::table('materias')->insert([
        	'nombre' => 'Construcción Ciudadana I',
        ]);

        DB::table('materias')->insert([
        	'nombre' => 'Educación Tecnológica I',
        ]);
    }
}
