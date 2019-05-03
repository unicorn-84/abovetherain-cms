<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
  public function show()
  {
    $slug = \Request::route()->getName();
    $page = DB::table('pages')->where('slug', $slug)->first();
    if (!$page) {
      abort('404');
    }
    if (view()->exists('pages.' . $slug)) {
      $view = 'pages.' . $slug;
    } else {
      $view = 'pages.default';
    }
    return view($view, ['page' => $page]);
  }
}
