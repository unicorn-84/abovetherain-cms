<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Training;
use Faker\Generator as Faker;

$factory->define(Training::class, function (Faker $faker) {
  $days = [
    __('days.Monday'),
    __('days.Tuesday'),
    __('days.Wednesday'),
    __('days.Thursday'),
    __('days.Friday'),
    __('days.Saturday'),
    __('days.Sunday'),
  ];

  return [
    'day' => $days[mt_rand(0, 6)],
    'start_time' => $faker->time($format = 'H:i', $max = 'now'),
    'end_time' => $faker->time($format = 'H:i', $max = 'now'),
    'service_id' => mt_rand(1, 10),
    'coach_id' => mt_rand(1, 4),
  ];
});
