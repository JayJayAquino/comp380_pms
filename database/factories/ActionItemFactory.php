<?php

use Faker\Generator as Faker;

$factory->define(App\ActionItem::class, function (Faker $faker) {
    $date = $faker->dateTimeThisYear($max = 'now', $timezone = null);
    $expectedCompletion = $faker->dateTimeBetween($startDate = 'now', $endDate = '+3 monthss', $timezone = null);
    return [
        
        'name'=> 'ActionItem-'.str_random(2),
        'description'=> $faker->text,
        'date_created'=> $date,
        'date_assigned'=> $date,
        'resource_assigned'=>rand(1,5),
        'expected_completion_date'=> $expectedCompletion,
        'actual_completion_date'=>$expectedCompletion,
        'status'=> 'good',
        'status_description'=> $faker->text
        

    ];
});
