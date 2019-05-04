<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
  public function show()
  {
    $name = \Request::route()->getName();
    $page = DB::table('pages')->where('name', $name)->first();
    $has_menu = DB::table('menus')->where('name', 'Main')->exists();
    if (!$page) {
      abort('404');
    }
    if (view()->exists('pages.' . $name)) {
      $view = 'pages.' . $name;
    } else {
      $view = 'page';
    }
    return view($view, ['page' => $page, 'has_menu' => $has_menu]);
  }
}
