<?php

use Carbon\Carbon;
use Jenssegers\Date\Date;

/**
 * Day abbr
 *
 * @param string $day
 * @return string
 */

function getDayAbbr($day)
{
  $daysAbbr = [
    'Понедельник' => 'Пн',
    'Вторник' => 'Вт',
    'Среда' => 'Ср',
    'Четверг' => 'Чт',
    'Пятница' => 'Пт',
    'Суббота' => 'Сб',
    'Воскресенье' => 'Вс',
  ];
  return $daysAbbr[$day];
}
