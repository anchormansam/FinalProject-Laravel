<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Disc;
use Faker\Generator as Faker;

$factory->define(Disc::class, function (Faker $faker) {
    
    $brand = Brand::all()->pluck('id')->toArray();
    $plastic = Plastic::all()->pluck('id')->toArray();
    
    return [
            'brand_id' => $faker->randomElement($brand),
            'plastic_id' => $faker->randomElement($plastic),
            'name' => $faker->firstNameMale,
            'speed' => $faker->numberBetween($min = 1, $max = 14),
            'glide' => $faker->numberBetween($min = 0, $max = 5),
            'fade' => $faker->numberBetween($min = 0, $max = 5),
            'turn' => $faker->numberBetween($min = -5, $max = 5),

    ];
});
