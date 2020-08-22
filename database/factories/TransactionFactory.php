<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    $idUser = App\User::pluck('id')->toArray();
    $idPaymentMethod = App\PaymentMethod::pluck('id')->toArray();
    return [
        'since' => $faker -> dateTime($max = 'now', $timezone = null),
        'to' => $faker -> dateTime($max = 'now', $timezone = null),
        'DateTransaction' => $faker -> dateTime($max = 'now', $timezone = null),
        'iduser' => $faker->randomElement($idUser),
        'idpaymentmethod' => $faker->randomElement($idPaymentMethod),


    ];
});
