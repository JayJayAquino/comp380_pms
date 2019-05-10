<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Deliverable::class, function (Faker $faker) {
    return [
        'name'=> 'Deliverable-'.str_random(2),
        'description'=> $faker->text,
        'due_date'=>$faker->dateTimeBetween($startDate = 'now', $endDate = '+6 months'),

    ];
});
