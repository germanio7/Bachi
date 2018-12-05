<?php

use Illuminate\Database\Seeder;

class DocenteMateriaSeeder extends Seeder
{
    public function run()
    {
        for ($i=1; $i <= 12 ; $i++) { 
            DB::table('docente_materia')->insert([
            'docente_id' => App\Docente::all()->random()->id,
            'materia_id' => $i,
        ]);
        }
    }
}
