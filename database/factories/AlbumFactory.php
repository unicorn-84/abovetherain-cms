<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
  $images = [];
  for ($i = 0; $i < 10; $i += 1) {
    array_push($images, $faker->imageUrl(800, 533, false, true));
  }
  return [
    'title' => substr($faker->sentence(2), 0, -1),
    'slug' => $faker->slug,
    'order' => $faker->randomDigitNotNull,
    'seo_title' => $faker->sentence(10),
    'seo_description' => $faker->text($maxNbChars = 20),
    'poster' => $faker->imageUrl(800, 533, false, true),
    'images' => json_encode($images),
  ];
});
