<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserAddress;
use Faker\Generator as Faker;

$factory->define(UserAddress::class, function (Faker $faker) {
    $idUser = App\User::pluck('id')->toArray();
    return [
        'postalCode' => $faker->postcode,
        'country' => $faker->country,
        'region' => $faker->state,
        'street' => $faker->address,
        'idUser' => $faker->randomElement($idUser),
    ];
});
