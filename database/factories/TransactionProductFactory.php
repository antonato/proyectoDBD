<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\transactionProduct;
use Faker\Generator as Faker;

$factory->define(transactionProduct::class, function (Faker $faker) {
    $idTransaction = App\Transaction::pluck('id')->toArray();
    $idAnnouncement = App\Announcement::pluck('id')->toArray();
    return [
        'id_transaction' => $faker->randomElement($idTransaction),
        'id_announcement' => $faker->randomElement($idAnnouncement),
    ];
});
