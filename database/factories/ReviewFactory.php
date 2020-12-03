<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
            'title' => 'title',
            'author' => $faker->name,
            'status' => $faker->randomElement($array = ['読了', '読んでる', '未了']),
            'score' => $faker->numberBetween(1,5),
            'summary' => $faker->realText
        ];
});
