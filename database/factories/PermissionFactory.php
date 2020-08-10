<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Permissions;
use Faker\Generator as Faker;

$factory->define(Permissions::class, function (Faker $faker) {
    return [
        'create' => $faker->numberBetween($min = 0, $max = 1),
        'read' => $faker->numberBetween($min = 0, $max = 1),
        'update' => $faker->numberBetween($min = 0, $max = 1),
        'delete' => $faker->numberBetween($min = 0, $max = 1),
    ];
});
