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

    $layoutType = Voyager::setting('gallery.layout', 'grid');
    $layoutColumns = Voyager::setting('gallery.columns', '3');

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

    $layoutType = Voyager::setting('album.layout', 'grid');
    $layoutColumns = Voyager::setting('album.columns', '3');

    if (view()->exists('pages.gallery.album.' . $layoutType))
      return view('pages.gallery.album.' . $layoutType, ['page' => $page, 'album' => $album, 'layoutColumns' => $layoutColumns]);
    else {
      return view('pages.gallery.album.grid', ['page' => $page, 'album' => $album, 'layoutColumns' => $layoutColumns]);
    }
  }
}
