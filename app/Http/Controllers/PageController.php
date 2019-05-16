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
    $page = Page::where('slug', $name)->firstOrFail();

    if (view()->exists('pages.' . $name)) {
      $view = 'pages.' . $name;
    } else {
      $view = 'page';
    }
    return view($view, ['page' => $page]);
  }

  public function gallery()
  {
    $page = Page::where('slug', 'gallery')->firstOrFail();
    $albums = Album::all();
    return view('pages.gallery')->with(['albums' => $albums, 'page' => $page]);
  }
}
