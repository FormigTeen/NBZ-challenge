<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Request::class, function (Faker $faker) {
    return [
        'quantity' => $faker->randomDigitNotNull,
        'type' => $faker->boolean(),
        'pay' => $faker->boolean(),
        'client_id' => \App\Client::inRandomOrder()->first()->id,
        'product_id' => \App\Product::inRandomOrder()->first()->id,
    ];
});
