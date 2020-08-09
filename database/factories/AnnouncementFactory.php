<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Announcement;
use Faker\Generator as Faker;

$factory->define(Announcement::class, function (Faker $faker) {
    return [
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
        'QualificationAverage' => $faker->numberBetween($min = 1, $max = 5),
        'Disponibility' => $faker->boolean,
        'ImageFormat' => $faker->name,
        'Description' => $faker->text,
        'PublishedTime' => $faker->dateTime($max = 'now', $timezone = null),
        // Revisar
        'Category' => $faker->randomElement($array = array ('Inmobiliaria', 'Muebles', 'Articulos', 'Herramientas', 'Espacios', 'Vehiculos')),

        'NameProduct' => $faker->name,
    ];
});
