<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\User;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->first()->id,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'cpf_cnpj' => $faker->cnpj(false),
        'rg_ie' => '277432285'
    ];
});
