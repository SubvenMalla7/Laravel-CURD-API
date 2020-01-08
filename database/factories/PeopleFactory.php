<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\People;
use Faker\Generator as Faker;

$factory->define(People::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'email' => $faker->safeEmail,
        'phone' => $faker->lastname,
        'address' => $faker->address,
        'age' => rand(1,70),
        'gender' =>$faker->randomElement(['male', 'female']),//the gender does not match the name as it is


    ];
});
