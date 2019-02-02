<?php

use Faker\Generator as Faker;
<<<<<<< HEAD
use App\Models\GrandParent;
use App\Models\Parents;

$factory->define(App\Models\SonParent::class, function (Faker $faker) {

    $grand_parents = GrandParent::all()->pluck('id')->toArray();

    $parents = Parents::all()->pluck('id')->toArray();

    return [
        'id' => ($faker->randomElement($parents) + $faker->randomElement($parents)),
=======
use App\Models\Parents;

$factory->define(App\Models\SonParent::class, function (Faker $faker) {
   
    $parents = Parents::all()->pluck('id')->toArray();
    
    return [
        'codigo' => ($faker->randomElement($parents) + $faker->randomElement($parents)),
>>>>>>> 5e7e13b0a502127d54b73de403486d590a3aabc1
        'name' => $faker->unique()->name,
        'age' => ($faker->randomElement($parents) + $faker->randomElement($parents))
    ];
});
