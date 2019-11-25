<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Plastic;
use Faker\Generator as Faker;


 
$factory->define(Plastic::class, function (Faker $faker) {
    return [
        'plastic' => $faker->unique()->word,
    ];
}); 