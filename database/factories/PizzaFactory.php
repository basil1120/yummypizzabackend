<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Pizza::class, function (Faker $faker) {
    return [
        //
        'pizzatype'=> $faker->name,
        'size'=> $faker->name,
        'price'=> $faker->numberBetween($min= 1000, $max=2000),
        'img'=> $faker->name,
        'deliveryfee'=> $faker->numberBetween($min= 100, $max=300),
        'pizzadesc'=> $faker->paragraph
    ];
});
