<?php

/** @ var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence,
        'author'=>$faker->name,
        'category_id'=> $faker->numberBetween(1,10),
    ];
});
