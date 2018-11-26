<?php

use Illuminate\Database\Seeder;

use App\Padre;

class PadreSeeder extends Seeder
{
    public function run()
    {
        factory(Padre::class, 40)->create();
    }
}
