<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coach;
use App\Page;
use TCG\Voyager\Facades\Voyager;

class CoachController extends Controller
{
  public function index()
  {
    $page = Page::where('slug', 'coaches')->firstOrFail();
    $coaches = Coach::orderByRaw('ISNULL(position), position ASC')->get();

    $layoutType = Voyager::setting('coaches.layout', 'grid');
    $layoutColumns = Voyager::setting('coaches.columns', '3');

    if (view()->exists('pages.coaches.' . $layoutType))
      return view('pages.coaches.' . $layoutType, ['page' => $page, 'coaches' => $coaches, 'layoutColumns' => $layoutColumns]);
    else {
      return view('pages.coaches.grid', ['page' => $page, 'coaches' => $coaches, 'layoutColumns' => $layoutColumns]);
    }
  }

  public function show($slug)
  {
    $page = Page::where('slug', 'coaches')->firstOrFail();
    $coach = Coach::where('slug', $slug)->firstOrFail();
    $template = Voyager::setting('coaches.template', 'standard');

    if (view()->exists('pages.coaches.coach.' . $template))
      return view('pages.coaches.coach.' . $template, ['page' => $page, 'coach' => $coach]);
    else {
      return view('pages.coaches.coach.standard', ['page' => $page, 'coach' => $coach]);
    }
  }
}
