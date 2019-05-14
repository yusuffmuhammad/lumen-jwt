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


use Illuminate\Support\Facades\Hash;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = Hash::make('secret')
    ];
});