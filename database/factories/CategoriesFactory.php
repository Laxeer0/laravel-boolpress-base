<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CategoryModel;
use Faker\Generator as Faker;

$factory->define(CategoryModel::class, function (Faker $faker) {
    return [
        'title'=>$faker->text,
        'slug'=>$faker->slug
    ];
});
