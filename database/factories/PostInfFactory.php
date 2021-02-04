<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PostInfModel;
use Faker\Generator as Faker;

$factory->define(PostInfModel::class, function (Faker $faker) {
    return [
        'post_id'=>$faker->unique()->numberBetween(1,10),
        'description'=>$faker->text,
        'slug'=>$faker->slug
    ];
});
