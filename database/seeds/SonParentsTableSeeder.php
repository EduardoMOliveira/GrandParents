<?php

use Illuminate\Database\Seeder;

class SonParentsTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Models\SonParent::class, 10)->create();
    }
}
