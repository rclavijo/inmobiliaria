<?php

use Faker\Generator as Faker;

use App\DomesticProperty;

$factory->define(DomesticProperty::class, function (Faker $faker) {
    return [
        'bathrooms_number' => random_int(1, 4),
        'bedrooms_number' => random_int(2, 6),
        'garages_number' => random_int(1, 4)
    ];
});
