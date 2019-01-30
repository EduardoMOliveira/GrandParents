<?php

use Faker\Generator as Faker;
use App\Models\GrandParents;

$factory->define(App\Models\Son::class, function (Faker $faker) {

    $grand_parents = GrandParents::all()->pluck('id')->toArray();

    return [
        'name' => $faker->unique()->name,
        'grand_parents_id' => $faker->randomElement($grand_parents)
    ];

});
