<?php

use Carbon\Carbon;
use Jenssegers\Date\Date;

/**
 * Day abbr
 *
 * @param string $day
 * @return array
 */

function getDayAbbr($day)
{
  $daysAbbr = [
    '1' => [
      'abbr' => 'Пн',
      'name' => 'Понедельник'
    ],
    '2' => [
      'abbr' => 'Вт',
      'name' => 'Вторник'
    ],
    '3' => [
      'abbr' => 'Ср',
      'name' => 'Среда'
    ],
    '4' => [
      'abbr' => 'Чт',
      'name' => 'Четверг'
    ],
    '5' => [
      'abbr' => 'Пт',
      'name' => 'Пятница'
    ],
    '6' => [
      'abbr' => 'Сб',
      'name' => 'Суббота'
    ],
    '7' => [
      'abbr' => 'Вс',
      'name' => 'Воскресенье'
    ],
  ];
  return $daysAbbr[$day];
}
