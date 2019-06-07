<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Coach;
use Faker\Generator as Faker;

$factory->define(Coach::class, function (Faker $faker) {
  return [
    'title' => substr($faker->sentence(2), 0, -1),
    'slug' => $faker->slug,
    'content' => $faker->realText($maxNbChars = 1000, $indexSize = 2),
  ];
});
