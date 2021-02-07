<?php

/** @ var \Illuminate\Database\Eloquent\Factory $factory */

use App\PostInformation;
use Faker\Generator as Faker;

$factory->define(App\PostInformation::class, function (Faker $faker) {
    return [
        'post_id'=>$faker->unique()->numberBetween(1,100),
        'description'=>$faker->paragraph,
        'slug'=>$faker->slug,
    ];
});
