<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'curso' => '1º',
            'division' => '1º',
            'orientacion' => 'Ciclo Básico',
            'turno' => 'Mañana',
        ]);

        DB::table('cursos')->insert([
            'curso' => '1º',
            'division' => '7º',
            'orientacion' => 'Ciclo Básico',
            'turno' => 'Mañana',
        ]);

        DB::table('cursos')->insert([
            'curso' => '2º',
            'division' => '1º',
            'orientacion' => 'Ciclo Básico',
            'turno' => 'Mañana',
        ]);

        DB::table('cursos')->insert([
            'curso' => '2º',
            'division' => '6º',
            'orientacion' => 'Ciclo Básico',
            'turno' => 'Mañana',
        ]);

        DB::table('cursos')->insert([
            'curso' => '3º',
            'division' => '1º',
            'orientacion' => 'Ciencias Sociales',
            'turno' => 'Tarde',
        ]);

        DB::table('cursos')->insert([
            'curso' => '3º',
            'division' => '5º',
            'orientacion' => 'Educación Física',
            'turno' => 'Tarde',
        ]);

        DB::table('cursos')->insert([
            'curso' => '4º',
            'division' => '2º',
            'orientacion' => 'Ciencias Sociales',
            'turno' => 'Tarde',
        ]);

        DB::table('cursos')->insert([
            'curso' => '4º',
            'division' => '4º',
            'orientacion' => 'Educación Física',
            'turno' => 'Tarde',
        ]);

        DB::table('cursos')->insert([
            'curso' => '5º',
            'division' => '3º',
            'orientacion' => 'Ciencias Sociales',
            'turno' => 'Tarde',
        ]);

        DB::table('cursos')->insert([
            'curso' => '5º',
            'division' => '5',
            'orientacion' => 'Educación Física',
            'turno' => 'Tarde',
        ]);
    }
}
