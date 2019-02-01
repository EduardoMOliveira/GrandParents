<?php

use Illuminate\Database\Seeder;

class GrandParentsTableSeeder extends Seeder
{

    public function run()
    {
        factory(App\Models\GrandParent::class, 5)->create();
    }
}
