<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(GrandParentsTableSeeder::class);
        // $this->call(SonsTableSeeder::class);
        $this->call(ParentsTableSeeder::class);
    }
}
