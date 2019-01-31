<?php

use Faker\Generator as Faker;
use App\Models\Parents;

$factory->define(App\Models\SonParents::class, function (Faker $faker) {

    $parents = Parents::all()->pluck('id')->toArray();

    return [
        'id' => ($faker->randomElement($parents) + $faker->randomElement($parents)),
        'name' => $faker->unique()->name,
        'age' => ($faker->randomElement($parents) + $faker->randomElement($parents))
    ];
});
