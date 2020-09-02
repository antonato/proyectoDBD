<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserAddress;
use Faker\Generator as Faker;

$factory->define(UserAddress::class, function (Faker $faker) {
    $idUser = App\User::pluck('id')->toArray();
    return [
        'postalCode' => $faker->numberBetween($min = 1000000, $max = 9000000),
        'country' => $faker->country,
        'region' => $faker->state,
        'street' => $faker->address,
        'user_id' => $faker->randomElement($idUser),
    ];
});
