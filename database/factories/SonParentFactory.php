<?php

use Faker\Generator as Faker;
use App\Models\Parents;

$factory->define(App\Models\SonParent::class, function (Faker $faker) {

    $parents = Parents::all()->pluck('id')->toArray();

    return [
        'codigo' => ($faker->randomElement($parents) + $faker->randomElement($parents)),
        'name' => $faker->unique()->name,
        'age' => ($faker->randomElement($parents) + $faker->randomElement($parents))
    ];
});
