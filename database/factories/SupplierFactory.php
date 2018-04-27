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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Data\Models\Supplier::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'address' => $faker->sentence,
        'contact_no' => $faker->phoneNumber,
        'email' => $faker->email
    ];
});
