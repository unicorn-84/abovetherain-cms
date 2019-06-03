<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Page;

class EventController extends Controller
{
  public function index()
  {
    $page = Page::where('slug', 'events')->firstOrFail();
    $events = Event::orderByRaw('-date', 'asc')->get();
    return view('pages.events', ['page' => $page, 'events' => $events]);
  }

  public function show($slug)
  {
    $page = Page::where('slug', 'events')->firstOrFail();
    $event = Event::where('slug', $slug)->firstOrFail();
    return view('pages.event', ['page' => $page, 'event' => $event]);
  }
}
