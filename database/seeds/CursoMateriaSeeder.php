<?php

use Illuminate\Database\Seeder;

class CursoMateriaSeeder extends Seeder
{
    public function run()
    {
        for ($i=1; $i <= 10 ; $i++) {

            for ($j=1; $j <= 12 ; $j++) { 
                DB::table('curso_materia')->insert([
                'curso_id' => $i,
                'materia_id' => $j,
            ]);
            }
        }
    }
}
