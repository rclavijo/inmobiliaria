<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

function generatePhoneNumber() {
    $phone = '3';
    $phone .= random_int(10, 22);

    for ($i = 0; $i < 7; $i++) {
        $phone .= random_int(0, 9);
    }

    return $phone;
}

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('user-1234'),
        'phone' => generatePhoneNumber(),
        'active' => 1,
        'remember_token' => str_random(10),
    ];
});
