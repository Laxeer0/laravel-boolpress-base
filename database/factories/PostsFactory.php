<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PostsModel;
use Faker\Generator as Faker;

$factory->define(PostsModel::class, function (Faker $faker) {
    return [
        'category_id'=>$faker->unique()->numberBetween(1,10),
        'title'=>$faker->word,
        'author'=>$faker->name
    ];
});
