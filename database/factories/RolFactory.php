<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rol;
use Faker\Generator as Faker;

$factory->define(Rol::class, function (Faker $faker) {
    return [
        'name' => $faker->name($maxNbChars = 30),
        'description' => $faker->text($maxNbChars = 30),
    ];
});
