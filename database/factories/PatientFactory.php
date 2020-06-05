<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    return [
        'first_name' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'last_name' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'date_of_birth' => date($format = 'Y-m-d'),
        'city' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'state' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'local_government' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'gender' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'religion' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'phone' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'blood_pressure' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'weight' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'pulse' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'respiration' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'temperature' =>  $faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
