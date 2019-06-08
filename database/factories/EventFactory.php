<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
  return [
    'title' => substr($faker->sentence(2), 0, -1),
    'date' => $faker->date($format = 'Y-m-d'),
    'slug' => $faker->slug,
    'description' => $faker->text($maxNbChars = 200),
    'content' => $faker->realText($maxNbChars = 1000, $indexSize = 2),
  ];
});
