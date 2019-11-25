<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    
        $users = User::all()->pluck('id')->toArray();
       
        
        return [
            'user_id' => $faker->randomElement($users),
            'address' => $faker->streetAddress,
            'city' => $faker->city,
            'state' => $faker->stateAbbr,
            'zipcode' => $faker->randomNumber($nbDigits = 5),
            'admin' => $faker->boolean,        
    ];
});
