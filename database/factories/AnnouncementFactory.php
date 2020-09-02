<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Announcement;
use Faker\Generator as Faker;

$factory->define(Announcement::class, function (Faker $faker) {
    $Category = $faker->randomElement($array = array ('Inmobiliaria', 'Muebles', 'Articulos', 'Herramientas', 'Espacios', 'Vehiculos'));
    
    $NameProduct = (
            ($Category == 'Inmobiliaria') ? $faker->randomElement($array = array ('Departamento', 'Casa', 'Piso')) : 
            (($Category == 'Muebles') ? $faker->randomElement($array = array ('Mesa', 'Sofa', 'Silla')) : 
            (($Category == 'Articulos') ? $faker->randomElement($array = array ('Lavadora', 'Secadora', 'Vasos')) : 
            (($Category == 'Herramientas') ? $faker->randomElement($array = array ('Martillo', 'Destornillador', 'Llave inglesa')) : 
            (($Category == 'Espacios') ? $faker->randomElement($array = array ('Centro de eventos', 'Piscina', 'Zona de camping')) : 
            (($Category == 'Vehiculos') ? $faker->randomElement($array = array ('V16', 'Corsa', 'Onix')) : 
            $faker->name)))))
    );
 
    return [
        'NameProduct' => $NameProduct,
        'Category' => $Category,
        'Price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 100),
        'PriceXTime' =>$faker->dateTime($max = 'now', $timezone = null),
        'Description' => $faker->text,
        'Disponibility' => $faker->boolean,
        'QualificationAverage' => $faker->numberBetween($min = 1, $max = 5),
        'ImageFormat' => $faker->imageUrl($width = 640, $height = 480),    
        'PublishedTime' => $faker->dateTime($max = 'now', $timezone = null),
        // Revisar
        
        
    ];
});
