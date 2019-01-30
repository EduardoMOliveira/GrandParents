<?php

use Illuminate\Database\Seeder;

class SonsTableSeeder extends Seeder
{

    public function run()
    {
        factory(App\Models\Son::class, 20)->create();
    }
}
