<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PaymentMethod;
use Faker\Generator as Faker;

$factory->define(PaymentMethod::class, function (Faker $faker) {
    return [
        //
        'cardType' => $faker -> creditCardType,
        'cardNumber' => $faker -> creditCardNumber,
        'createdAt' => $faker -> creditCardExpirationDate,
    ];
});