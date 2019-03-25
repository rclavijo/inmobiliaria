<?php

use Faker\Generator as Faker;

use App\Apartment;

$factory->define(Apartment::class, function (Faker $faker) {
    return [
        'poll' => random_int(0, 1),
        'elevator' => random_int(0, 1),
        'parking_lot' => random_int(0, 1),
        'fourth_useful' => random_int(0, 1),
        'administration_price' => random_int(180000, 1500000)
    ];
});
