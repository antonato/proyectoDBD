<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserProduct;
use Faker\Generator as Faker;

$factory->define(UserProduct::class, function (Faker $faker) {
    $idUser = App\User::pluck('id')->toArray();
    $idAnnouncement = App\Announcement::pluck('id')->toArray();
    return [
        'id_user' => $faker->randomElement($idUser),
        'id_announcement' => $faker->randomElement($idAnnouncement),
    ];
});
