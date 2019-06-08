<?php

namespace App\Http\Controllers;

use App\Page;
use Request;

class PageController extends Controller
{
  public function show()
  {
    if(Request::route()->getName()) {
      $name = Request::route()->getName();
    } else {
      $name = Request::segment(1);
    }

    $page = Page::where('slug', $name)->firstOrFail();

    if (view()->exists('pages.' . $name)) {
      $view = 'pages.' . $name;
    } else {
      $view = 'page';
    }
    return view($view, ['page' => $page]);
  }
}
