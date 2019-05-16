<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
  public function index()
  {
    $services = \App\Service::orderBy('order', 'asc')->get();

    $page = \App\Page::where('slug', 'services')->firstOrFail();

    return view('pages.services', ['page' => $page, 'services' => $services]);
  }

  public function show($slug)
  {
    $page = \App\Page::where('slug', 'services')->firstOrFail();

    $service= \App\Service::where('slug', $slug)->firstOrFail();

    return view('pages.service', ['page' => $page, 'service' => $service]);
  }
}
