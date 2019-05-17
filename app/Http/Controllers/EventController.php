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
    $events = Event::orderBy('order', 'asc')->get();
    return view('pages.events', compact('page', 'events'));
  }

  public function show($slug)
  {
    $page = Page::where('slug', 'events')->firstOrFail();
    $event = Event::where('slug', $slug)->firstOrFail();
    return view('pages.event', compact('page', 'event'));
  }
}
