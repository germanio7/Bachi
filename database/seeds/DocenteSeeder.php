<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Docente;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Docente::class, 50)->create();
    }
}
