<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Coach;
use Faker\Generator as Faker;

$factory->define(Coach::class, function (Faker $faker) {
  return [
    'title' => substr($faker->sentence(2), 0, -1),
    'slug' => $faker->slug,
    'seo_title' => $faker->sentence(10),
    'seo_description' => $faker->text($maxNbChars = 20),
    'poster' => '/demo/c_' . mt_rand(1, 6) . '.jpg',
    'content' => $faker->realText($maxNbChars = 1000, $indexSize = 2),
  ];
});
