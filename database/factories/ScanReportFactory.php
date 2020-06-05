<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ScanReport;
use Faker\Generator as Faker;

$factory->define(ScanReport::class, function (Faker $faker) {
    return [

        'number_of_foetus'  => $faker->randomDigitNotNull,
        'viability'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'cardiac_activity'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'placenta_echotexture'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'placenta_location'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'amniotic_fluid_volume'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'visceral_anomaly'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'fetal_presentation'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'fetal_gender'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'cervical_os'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'femur_length'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'abdominal_circumference'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'cephalic_index'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'gestational_sac_diameter'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'crown_rump_length'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'bi_parietal_diameter'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'gestational_age'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'estimated_fetal_weight'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'uterine_anomaly'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'expected_date_of_delivery'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'adnexa/ovarian_anomaly'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'cul_de_sac'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'conclusion_report'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'next_apointment_date'  => $faker->date($format = 'Y-m-d'),
        'scan_frequency'  => 2,
        'patient_id'  => $faker->randomDigitNotNull
    ];
});
