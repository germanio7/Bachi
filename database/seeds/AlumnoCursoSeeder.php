<?php

use Illuminate\Database\Seeder;

class AlumnoCursoSeeder extends Seeder
{
    public function run()
    {
    	$anio = now()->format('Y');

      $ini = 1;

      $fin = 10;

      for ($i=1; $i <= 10 ; $i++) {
          for ($j=$ini; $j <= $fin ; $j++) { 
              DB::table('alumno_curso')->insert([
                  'alumno_id' => $j,
                  'curso_id' => $i,
                  'anio' => $anio,
              ]);
           }
           
           $ini = $ini + 10;
           $fin = $fin + 10;
      }
    }
}
