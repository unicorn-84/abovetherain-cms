<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
  $images = [];
  for ($i = 1; $i <= 17; $i += 1) {
    array_push($images, '/demo/' . $i . '.jpg');
  }
  return [
    'title' => substr($faker->sentence(2), 0, -1),
    'slug' => $faker->slug,
    'order' => $faker->randomDigitNotNull,
    'seo_title' => $faker->sentence(10),
    'seo_description' => $faker->text($maxNbChars = 20),
    'poster' => '/demo/' . mt_rand(1, 17) . '.jpg',
    'images' => json_encode($images),
  ];
});
