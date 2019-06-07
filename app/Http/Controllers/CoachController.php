<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coach;
use App\Page;

class CoachController extends Controller
{
  public function index()
  {
    $page = Page::where('slug', 'coaches')->firstOrFail();
    $coaches = Coach::orderByRaw('ISNULL(position), position ASC')->get();
    return view('pages.coaches', ['page' => $page, 'coaches' => $coaches]);
  }

  public function show($slug)
  {
    $page = Page::where('slug', 'coaches')->firstOrFail();
    $coach = Coach::where('slug', $slug)->firstOrFail();
    return view('pages.coach', ['page' => $page, 'coach' => $coach]);
  }
}
