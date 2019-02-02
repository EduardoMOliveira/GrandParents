<?php

use Faker\Generator as Faker;
use App\Models\GrandParent;
use App\Models\Parents;

$factory->define(App\Models\SonParent::class, function (Faker $faker) {

    $grand_parents = GrandParent::all()->pluck('id')->toArray();

    $parents = Parents::all()->pluck('id')->toArray();

    return [
        'id' => ($faker->randomElement($parents) + $faker->randomElement($parents)),
        'name' => $faker->unique()->name,
        'age' => ($faker->randomElement($parents) + $faker->randomElement($parents))
    ];
});
