<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\productComment;
use Faker\Generator as Faker;

$factory->define(productComment::class, function (Faker $faker) {
    $idUser = App\User::pluck('id')->toArray();
    $idAnnouncement = App\Announcement::pluck('id')->toArray();

    return [
        'content' => $faker->text($maxNbChars = 256),
        'qualification' => $faker->numberBetween($min = 1, $max = 5),
        'publisedTime' => $faker->dateTime($max = 'now', $timezone = null),
        'idUser' => $faker->randomElement($idUser),
        'idAnnouncement' => $faker->randomElement($idAnnouncement),
    ];
});
