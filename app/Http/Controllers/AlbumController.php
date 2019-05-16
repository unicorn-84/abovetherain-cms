<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Page;

class AlbumController extends Controller
{
  public function index()
  {
    $page = Page::where('name', 'gallery')->firstOrFail();
    $albums = Album::orderBy('order', 'asc')->get();
    return view('pages.gallery', compact('page', 'albums'));
  }

  public function show($slug)
  {
    $page = Page::where('name', 'gallery')->firstOrFail();
    $album = Album::where('slug', $slug)->firstOrFail();
    return view('pages.album', compact('page', 'album'));
  }
}
