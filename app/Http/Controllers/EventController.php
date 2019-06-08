<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Page;
use TCG\Voyager\Facades\Voyager;

class EventController extends Controller
{
  public function index()
  {
    $page = Page::where('slug', 'events')->firstOrFail();
    $events = Event::orderByRaw('ISNULL(position), position ASC')->orderByRaw('ISNULL(date), date ASC')->get();

    $layoutType = Voyager::setting('events.layout', 'grid');
    $layoutColumns = Voyager::setting('events.columns', '3');

    if (view()->exists('pages.events.' . $layoutType))
      return view('pages.events.' . $layoutType, ['page' => $page, 'events' => $events, 'layoutColumns' => $layoutColumns]);
    else {
      return view('pages.events.grid', ['page' => $page, 'events' => $events, 'layoutColumns' => $layoutColumns]);
    }
  }

  public function show($slug)
  {
    $page = Page::where('slug', 'events')->firstOrFail();
    $event = Event::where('slug', $slug)->firstOrFail();

    $template = Voyager::setting('events.template', 'standard');

    if (view()->exists('pages.events.event.' . $template))
      return view('pages.events.event.' . $template, ['page' => $page, 'event' => $event]);
    else {
      return view('pages.events.event.standard', ['page' => $page, 'event' => $event]);
    }
  }
}
