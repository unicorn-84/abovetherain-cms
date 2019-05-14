<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coach;
use App\Page;

class CoachController extends Controller
{
  public function index()
  {
    $page = Page::where('name', 'coaches')->firstOrFail();
    $coaches = Coach::orderBy('order', 'asc')->get();
    return view('pages.coaches', compact('page', 'coaches'));
  }

  public function show($slug)
  {
    $page = Page::where('name', 'coaches')->firstOrFail();
    $coach = Coach::where('slug', $slug)->firstOrFail();
    return view('pages.coach', compact('page', 'coach'));
  }
}
