<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Issue::class, function (Faker $faker) {
    return [
        'description'=> $faker->text,
        'priority'=>rand(1,5),
        'severity'=>rand(1,5),
        'date_raised'=>$faker->dateTimeInInterval($startDate= '-1 years', $interval= '+ 1 years', $timezone = null),
        'date_assigned'=>$faker->dateTimeInInterval($startDate= '-1 years', $interval= '+ 1 years', $timezone = null),
        'expected_completion_date'=>$faker->dateTimeInInterval($startDate= '-1 years', $interval= '+ 1 years', $timezone = null),
        'actual_completion_date'=>$faker->dateTimeInInterval($startDate= '-1 years', $interval= '+ 1 years', $timezone = null),
    ];
});
