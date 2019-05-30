<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Training;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {

        $page = \App\Page::where('slug', 'schedule')->firstOrFail();

        $trainings = Training::orderBy('start_time', 'asc')->with(['service:id,slug,title', 'coach:id,slug,title']);

        if ($request->has('training')) {
            $trainings->whereHas('service', function($query) use ($request) {
                $query->where('title', $request->training);
            });
        } elseif ($request->has('coach')) {
            $trainings->whereHas('coach', function($query) use ($request) {
                $query->where('title', $request->coach);
            });
        } elseif ($request->has('day')) {
            $trainings->where('day', $request->day);
        }


        $days = [
            __('days.Monday'),
            __('days.Tuesday'),
            __('days.Wednesday'),
            __('days.Thursday'),
            __('days.Friday'),
            __('days.Saturday'),
            __('days.Sunday'),
        ];

        $times = $trainings->distinct('start_time')->pluck('start_time');

        $times = Arr::flatten($times);

        $events = array_fill(0, count($times), null);

        for ($i = 0; $i < count($events); $i += 1) {
            $events[$i] = array_fill(0, count($days), null);
        }

        foreach ($trainings->get() as $training) {
            $rowIndex = array_search($training->start_time, $times);
            $columnsIndex = array_search($training->day, $days);
            $events[$rowIndex][$columnsIndex] = $training;
        }

        for ($i = 0; $i < count($events); $i += 1) {
            $events[$i] = array_combine($days, $events[$i]);
        }

        $events = array_combine($times, $events);

        return view('pages.schedule', [
            'page' => $page,
            'days' => $days,
            'times' => $times,
            'events' => $events,
        ]);
    }
}
