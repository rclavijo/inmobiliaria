<?php

use Faker\Generator as Faker;

use App\Cellar;

function type() {
    $types = [
        Cellar::TRUCK,
        Cellar::TRUCKING_RIG,
        Cellar::NONE
    ];
    
    return $types[random_int(0, count($types) - 1)];
}

$factory->define(Cellar::class, function (Faker $faker) {
    
    return [
        'office_meters' => random_int(24, 2147483647),
        'bathroom_meters' => random_int(80, 2147483647),
        'cellar_meters' => random_int(400, 2147483647),
        'reinforced_floor' => random_int(0, 1),
        'entry_type' => type(),
        'height' => random_int(2, 20)
    ];
});
