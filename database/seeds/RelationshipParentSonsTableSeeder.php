<?php

use Illuminate\Database\Seeder;
use App\Models\SonParent;

class RelationshipParentSonsTableSeeder extends Seeder
{

    public function run()
    {
        factory(App\Models\Parents::class, 20)->create();
        $parents = factory(App\Models\SonParent::class, 10)->create();

        App\Models\Parents::all()->each(function ($parent) use ($parents) {
            $parent->sonParents()->saveMany($parents);
        });
    }
}
