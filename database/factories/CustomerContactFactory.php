<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CustomerContact;
use Faker\Generator as Faker;

$factory->define(CustomerContact::class, function (Faker $faker) {
    $phone = preg_replace("/\D/","",$faker->phoneNumber);
    $phone = substr($phone, 0, 10);

    $cell = preg_replace("/\D/","",$faker->phoneNumber);
    $cell = substr($cell, 0, 10);
    return [
        'postcode' => substr($faker->postcode(),0,7),
        'address' => $faker->address,
        'number' => $faker->buildingNumber,
        'district' => $faker->streetSuffix,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'phone' => $phone,
        'cell' => $cell,
    ];
});
