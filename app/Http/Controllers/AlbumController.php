<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Page;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Facades\Voyager;

class AlbumController extends Controller
{
  public function index()
  {
    $page = Page::where('slug', 'gallery')->firstOrFail();
    $albums = Album::orderByRaw('ISNULL(position), position ASC')->get();

    $layoutType = Voyager::setting('galereya.layout', 'grid');
    $layoutColumns = Voyager::setting('galereya.columns', '4');

    if (view()->exists('pages.gallery.' . $layoutType))
      return view('pages.gallery.' . $layoutType, ['page' => $page, 'albums' => $albums, 'layoutColumns' => $layoutColumns]);
    else {
      return view('pages.gallery.grid', ['page' => $page, 'albums' => $albums, 'layoutColumns' => $layoutColumns]);
    }
  }

  public function show($slug)
  {
    $page = Page::where('slug', 'gallery')->firstOrFail();
    $album = Album::where('slug', $slug)->firstOrFail();
    return view('pages.album', ['page' => $page, 'album' => $album]);
  }
}
