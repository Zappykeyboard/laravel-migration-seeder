<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Place;

$factory->define(Place::class, function (Faker $faker) {
    return [
        'name' => $faker -> word,
        'address' => $faker -> streetAddress,
        'nation' => $faker -> country
    ];
});
