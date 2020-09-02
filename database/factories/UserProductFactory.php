<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserProduct;
use Faker\Generator as Faker;

$factory->define(UserProduct::class, function (Faker $faker) {
    $idUser = App\User::pluck('id')->toArray();
    $idAnnouncement = App\Announcement::pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($idUser),
        'announcement_id' => $faker->randomElement($idAnnouncement),
    ];
});
