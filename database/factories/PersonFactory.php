<?php

use Faker\Generator as Faker;

use App\Person;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lastname' => $faker->lastname,
        'identification' => mt_rand(1000000, mt_getrandmax())
    ];
});
