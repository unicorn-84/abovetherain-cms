<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Page;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
  public function index()
  {
    $page = Page::where('slug', 'gallery')->firstOrFail();
    $albums = Album::orderByRaw('ISNULL(position), position ASC')->get();
    return view('pages.gallery', ['page' => $page, 'albums' => $albums]);
  }

  public function show($slug)
  {
    $page = Page::where('slug', 'gallery')->firstOrFail();
    $album = Album::where('slug', $slug)->firstOrFail();
    return view('pages.album', ['page' => $page, 'album' => $album]);
  }
}
