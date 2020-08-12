<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'cardType' => $faker -> creditCardType,
        'cardNumber' => $faker -> creditCardNumber,
        'createdAt' => $faker -> creditCardExpirationDate,
    ];
});