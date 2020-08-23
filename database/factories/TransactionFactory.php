<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    $idUser = App\User::pluck('id')->toArray();
    $idPaymentMethod = App\PaymentMethod::pluck('id')->toArray();
    return [
        'since' => $faker -> date($format = 'Y-m-d', $max = 'now'),
        'to' => $faker -> date($format = 'Y-m-d', $max = 'now', $min = 'since'),
        'DateTransaction' => $faker -> date($format = 'Y-m-d', $max = 'now'),
        'iduser' => $faker->randomElement($idUser),
        'idpaymentmethod' => $faker->randomElement($idPaymentMethod),


    ];
});
