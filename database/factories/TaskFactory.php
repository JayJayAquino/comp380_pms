<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Task::class, function (Faker $faker) {
    return [
        'name'=> 'Task-'.str_random(2),
        'description'=>$faker->text,
        'resource_assigned'=>rand(1,5)
    ];
});
