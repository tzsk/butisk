<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(\App\User::class)->create()->id;
        },
        'nickname' => $faker->jobTitle,
        'address_line_1' => $faker->streetAddress,
        'address_line_2' => $faker->secondaryAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip_code' => $faker->postcode,
        'country_code' => $faker->countryCode,
    ];
});

$factory->state(Address::class, 'primary', ['primary' => true]);
