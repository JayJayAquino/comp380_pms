<?php

use Faker\Generator as Faker;

$factory->define(App\Resource::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'title'=>'Developer-'.str_random(2),
        'list_of_skills'=> 'Skill one, skill 2, skill 3',
        'availability_calendar'=> 'business hours',
        'pay_rate'=> rand(50000,100000)
    ];
});
