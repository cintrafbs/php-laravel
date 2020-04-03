<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Customer::class, function (Faker $faker) {
    $cpf_cnpj = rand(0,2) > 1? $faker->cpf(false) : $faker->cnpj(false);
    return [
        'user_id' =>User::inRandomOrder()->first()->id,
        'name' => $faker->name,
        'company' => $faker->company,
        'cpf_cnpj' => $cpf_cnpj,
        'email' => $faker->unique()->safeEmail(),
        'password' => Hash::make('123456'),
    ];
});
