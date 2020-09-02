<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RolPermissions;
use Faker\Generator as Faker;

$factory->define(RolPermissions::class, function (Faker $faker) {
    $idRol = App\Rol::pluck('id')->toArray();
    $idPerm = App\Permissions::pluck('id')->toArray();
    return [
        'rol_id' => $faker->randomElement($idRol),
        'perm_id' => $faker->randomElement($idPerm),
    ];
});
