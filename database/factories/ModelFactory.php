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
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Flyer::class, function (Faker\Generator $faker) {
    return [
       
        'city'            => $faker->city,

        'zip'             => $faker->postcode,

        'state'           => $faker->state,

        'country'         => $faker->country,

        'price'           => $faker->numberBetween(10000, 50000000),

        'description'     => $faker->paragraphs(3),

        'make'            => $faker->text($maxNbChars = 50),

        'model'           => $faker->text($maxNbChars = 50),

        'color'           => $faker->text($maxNbChars = 50),

        'year'            => $faker->year($max = 'now'),

        'miles'           => $faker->numberBetween(0, 10000000),

        'condition'       => $faker->text($maxNbChars = 50),

    ];
});

