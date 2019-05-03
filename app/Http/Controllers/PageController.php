<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
  public function index()
  {
    $page = DB::table('pages')->where('slug', 'index')->first();
    return view('pages.index', ['page' => $page]);
  }

  public function services()
  {
    $page = DB::table('pages')->where('slug', 'services')->first();
    return view('pages.services', compact($page));
  }

  public function schedule()
  {
    $page = DB::table('pages')->where('slug', 'schedule')->first();
    return view('pages.schedule', ['page', $page]);
  }

  public function events()
  {
    $page = DB::table('pages')->where('slug', 'events')->first();
    return view('pages.events', ['page', $page]);
  }

  public function team()
  {
    $page = DB::table('pages')->where('slug', 'team')->first();
    return view('pages.team', ['page', $page]);
  }

  public function coaches()
  {
    $page = DB::table('pages')->where('slug', 'coaches')->first();
    return view('pages.coaches', ['page', $page]);
  }

  public function gallery()
  {
    $page = DB::table('pages')->where('slug', 'gallery')->first();
    return view('pages.gallery', ['page', $page]);
  }

  public function contacts()
  {
    $page = DB::table('pages')->where('slug', 'contacts')->first();
    return view('pages.contacts', ['page', $page]);
  }

  public function requisites()
  {
    $page = DB::table('pages')->where('slug', 'requisites')->first();
    return view('pages.requisites', ['page', $page]);
  }
}
