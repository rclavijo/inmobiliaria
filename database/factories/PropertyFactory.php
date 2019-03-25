<?php

use Faker\Generator as Faker;

use App\Property;

function getState() {
    $states = [
        Property::ENABLE,
        Property::DISABLED
    ];
    
    return $states[random_int(0, count($states) - 1)];
}

$factory->define(Property::class, function (Faker $faker) {
    return [
        'state' => getState(),
        'area' => random_int(400, 2147483647),
        'price' => $faker->randomNumber(8),
        'user_id' => random_int(
            UtilSeeder::AMOUNT_ADMINS + 1,
            UtilSeeder::AMOUNT_SELLER_PERSONS + UtilSeeder::AMOUNT_SELLER_COMPANIES
        )
    ];
});
