<?php

use Faker\Generator as Faker;
use App\Models\GrandParent;

$factory->define(App\Models\Son::class, function (Faker $faker) {

    $grand_parents = GrandParent::all()->pluck('id')->toArray();

    return [
        'name' => $faker->unique()->name,
        'grand_parent_id' => $faker->randomElement($grand_parents)
    ];

});
