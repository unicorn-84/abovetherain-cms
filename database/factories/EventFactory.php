<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
  $image = $faker->unique()->imageUrl(800, 533, false, true);
  $title = substr($faker->sentence(2), 0, -1);
  $content = '<img class="w-100 mb-4" src="' . $image . '"/>'. '<h1 class="text-center mb-3">' . $title . '</h1>' . '<p class="mb-0">' . $faker->realText($maxNbChars = 1000, $indexSize = 2) . '</p>';
  return [
    'title' => $title,
    'slug' => $faker->slug,
    'order' => $faker->randomDigitNotNull,
    'seo_title' => $faker->sentence(10),
    'description' => $faker->text($maxNbChars = 200),
    'seo_description' => $faker->text($maxNbChars = 20),
    'poster' => $image,
    'content' => $content,
  ];
});
