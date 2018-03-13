<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});


$factory->define(App\Property::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->streetName,
        'description' => $faker->text,
        'price' => $faker->numberBetween(1000, 9000),
    ];
});


$factory->define(App\Image::class, function (Faker\Generator $faker) {
    return [
        'url' => $faker->imageUrl(640, 480, 'city'),
    ];
});
