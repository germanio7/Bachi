<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(DocenteSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(PadreSeeder::class);
    }
}
