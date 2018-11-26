<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(DocenteSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(PadreSeeder::class);
        $this->call(CursoSeeder::class);
    }
}
