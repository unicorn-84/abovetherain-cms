<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Page;
use App\Album;

class PageController extends Controller
{
  public function show()
  {
    $name = \Request::route()->getName();
    $page = DB::table('pages')->where('name', $name)->first();
    if (!$page) {
      abort('404');
    }
    if (view()->exists('pages.' . $name)) {
      $view = 'pages.' . $name;
    } else {
      $view = 'page';
    }
    return view($view, ['page' => $page]);
  }

  public function gallery()
  {
    $page = Page::where('name', 'gallery')->firstOrFail();
    $albums = Album::all();
    return view('pages.gallery')->with(['albums' => $albums, 'page' => $page]);
  }
}
