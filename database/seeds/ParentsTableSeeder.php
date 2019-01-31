<?php

use Illuminate\Database\Seeder;

class ParentsTableSeeder extends Seeder
{

    public function run()
    {
        factory(App\Models\Parents::class, 20)->create();
    }
}
