<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AnnouncementAddress;
use Faker\Generator as Faker;

$factory->define(AnnouncementAddress::class, function (Faker $faker) {
    $idAnnouncement = App\Announcement::pluck('id')->toArray();
    return [
        'country' => $faker->country,
        'region' => $faker->state,
        'street' => $faker->address,
        'id_announcement' => $faker->randomElement($idAnnouncement),
    ];
});
