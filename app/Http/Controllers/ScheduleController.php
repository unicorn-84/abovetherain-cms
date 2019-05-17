<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ScheduleController extends Controller
{
  public function index()
  {
    $page = \App\Page::where('slug', 'schedule')->firstOrFail();

    $trainings = \App\Training::all();

    $columns = [
      __('days.Monday'),
      __('days.Tuesday'),
      __('days.Wednesday'),
      __('days.Thursday'),
      __('days.Friday'),
      __('days.Saturday'),
      __('days.Sunday'),
    ];

    $times = \App\Training::orderBy('start_time', 'asc')->distinct('start_time')->pluck('start_time');

    $trainingsOfTheDay = array_map(function ($item) {
      return \App\Training::orderBy('start_time', 'asc')->where('day', '=', $item)->get();
    }, $columns);

    $trainingsOfTheDay = array_combine($columns, $trainingsOfTheDay);

//    dd($trainingsOfTheDay);

    $virtTable = array_fill(0, count($times), null);

    for ($i = 0; $i < count($virtTable); $i += 1) {
      $virtTable[$i] = array_fill(0, count($columns), null);
    }

    foreach ($trainings as $training) {
      $rowIndex = array_search($training->start_time, Arr::flatten($times));
      $columnsIndex = array_search($training->day, Arr::flatten($columns));
      $virtTable[$rowIndex][$columnsIndex] = $training;
    }

    return view('pages.schedule', [
      'page' => $page,
      'columns' => $columns,
      'times' => $times,
      'virtTable' => $virtTable,
      'trainingsOfTheDay' => $trainingsOfTheDay,
    ]);
  }
}
