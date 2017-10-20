<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->words(2, true),
        'price' => $faker->randomFloat(2, 0, 100)
    ];
});
