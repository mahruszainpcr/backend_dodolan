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

/**
 * Factory definition for model App\LokasiPropinsi.
 */
$factory->define(App\LokasiPropinsi::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\LokasiKotakab.
 */
$factory->define(App\LokasiKotakab::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\LokasiKelurahan.
 */
$factory->define(App\LokasiKelurahan::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\LokasiKecamatan.
 */
$factory->define(App\LokasiKecamatan::class, function ($faker) {
    return [
        // Fields here
    ];
});
