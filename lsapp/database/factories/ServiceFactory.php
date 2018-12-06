<?php

use Faker\Generator as Faker;

$factory->define(\App\Service::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'adresse' => $faker->address,
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'position' => $faker->postcode,
        'photo' => $faker->imageUrl(),
        'categorie_id' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull,
    ];
});
