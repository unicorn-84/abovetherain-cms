<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Training;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class ScheduleController extends Controller
{
  public function index(Request $request)
  {
//    fixme: Не созраняется значение цветов, если null
    $page = \App\Page::where('slug', 'schedule')->firstOrFail();

    $trainings = DB::table('trainings')
      ->join('services', 'trainings.service_id', '=', 'services.id')
      ->join('coaches', 'trainings.coach_id', '=', 'coaches.id')
      ->select('day', 'start_time', 'end_time', 'services.title as service_title', 'services.slug as service_slug', 'services.content as service_content', 'coaches.title as coach_title', 'coaches.slug as coach_slug', 'coaches.content as coach_content', 'info', 'direction_color', 'time_color', 'coach_color', 'fon_color')
      ->orderBy('start_time', 'asc')
      ->get();

    $services = $trainings->pluck('service_title', 'service_slug')->unique();
    $coaches = $trainings->pluck('coach_title', 'coach_slug')->unique();
    $days = [
      'mon' => __('days.Monday'),
      'tue' => __('days.Tuesday'),
      'wed' => __('days.Wednesday'),
      'thu' => __('days.Thursday'),
      'fri' => __('days.Friday'),
      'sut' => __('days.Saturday'),
      'sun' => __('days.Sunday'),
    ];


    if ($request->has('training')) {
      $trainings = $trainings->filter(function ($value) use($request) {
        return $value->service_slug == $request->query('training');
      });
    } elseif ($request->has('coach')) {
      $trainings = $trainings->filter(function ($value) use($request) {
        return $value->coach_slug == $request->query('coach');
      });
    } elseif ($request->has('day')) {
      $trainings = $trainings->filter(function ($value) use($request, $days) {
        $day = $days[$request->query('day')];
        return $value->day == $day;
      });
    }

    return view('pages.schedule', [
      'page' => $page,
      'days' => $days,
      'services' => $services,
      'coaches' => $coaches,
      'trainings' => $trainings,
    ]);
  }
}
