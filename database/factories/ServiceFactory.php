<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
  return [
    'title' => substr($faker->sentence(2), 0, -1),
    'slug' => $faker->slug,
    'order' => $faker->randomDigitNotNull,
    'seo_title' => $faker->sentence(10),
    'description' => $faker->text($maxNbChars = 200),
    'seo_description' => $faker->text($maxNbChars = 20),
    'poster' => $faker->imageUrl(800, 533, false, true),
    'content' => $faker->realText($maxNbChars = 1000, $indexSize = 2),
  ];
});
