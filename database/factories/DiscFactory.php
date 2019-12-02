<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Disc;
use App\Brand;
use App\Plastic;
use Faker\Generator as Faker;

$factory->define(Disc::class, function (Faker $faker) {
    
    $brand = Brand::all()->pluck('id')->random();
    $plastic = Plastic::all()->pluck('id')->random();
    
    return [
            'brand_id' => $brand,
            'plastic_id' => $plastic,
            'name' => $faker->firstNameMale,
            'speed' => $faker->numberBetween($min = 1, $max = 14),
            'glide' => $faker->numberBetween($min = 0, $max = 5),
            'fade' => $faker->numberBetween($min = 0, $max = 5),
            'turn' => $faker->numberBetween($min = -5, $max = 5),

    ];
});
