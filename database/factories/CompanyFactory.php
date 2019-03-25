<?php

use Faker\Generator as Faker;

function generateNit()
{
    $nit = '';
    
    for ($i = 1; $i <= 3; $i += 1):
        $nit .= random_int(100, 999);
        if ($i < 3):
            $nit .= '.';
        else: $nit .= '-';
        endif;
    endfor;
    
    return $nit . random_int(0, 9);
}

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'business_name' => $faker->company,
        'nit' => generateNit()
    ];
});
