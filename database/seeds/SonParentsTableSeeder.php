<?php

use Illuminate\Database\Seeder;

class SonParentsTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(App\Models\SonParents::class, 10)->create();
        
    }
}
