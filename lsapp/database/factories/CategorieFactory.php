<?php

use Faker\Generator as Faker;

$factory->define(\App\Categorie::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'photo' => $faker->imageUrl(),
    ];
});
