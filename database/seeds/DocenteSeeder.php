<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Docente;

class DocenteSeeder extends Seeder
{
    public function run()
    {
        factory(Docente::class, 50)->create();
    }
}
