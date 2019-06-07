<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
  return [
    'title' => substr($faker->sentence(2), 0, -1),
    'subtitle' => $faker->text($maxNbChars = 50),
    'slug' => $faker->slug,
    'description' => $faker->text($maxNbChars = 200),
    'content' => $faker->realText($maxNbChars = 1000, $indexSize = 2),
  ];
});
