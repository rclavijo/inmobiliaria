<?php

use Faker\Generator as Faker;

use App\Sector;

$factory->define(Sector::class, function (Faker $faker) {
    return [
        'address' => $faker->streetAddress,
        'district' => $faker->streetName,
        'city_id' => random_int(1, 125)
    ];
});
