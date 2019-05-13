<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
  $title = substr($faker->sentence(2), 0, -1);
  $content = '
    <img class="w-100 mb-4" src="' . $faker->imageUrl(800, 533, false, false) . '"/>
    <h1 class="text-center mb-3">' . $title . '</h1>
    <p class="mb-0">' . $faker->realText($maxNbChars = 1000, $indexSize = 2) . '</p>';
  return [
    'title' => $title,
    'slug' => $faker->slug,
    'order' => $faker->randomDigitNotNull,
    'seo_title' => $faker->sentence(10),
    'description' => $faker->text($maxNbChars = 200),
    'seo_description' => $faker->text($maxNbChars = 20),
    'poster' => '/demo/' . mt_rand(1, 17) . '.jpg',
    'content' => $content,
  ];
});
