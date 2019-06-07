<?php

namespace App\Http\Controllers;

use App\Service;
use TCG\Voyager\Models\Page;

class ServiceController extends Controller
{
  public function index()
  {
    $services = Service::orderByRaw('ISNULL(position), position ASC')->get();

    $page = Page::where('slug', 'services')->firstOrFail();

    return view('pages.services', ['page' => $page, 'services' => $services]);
  }

  public function show($slug)
  {
    $page = Page::where('slug', 'services')->firstOrFail();

    $service= Service::where('slug', $slug)->firstOrFail();

    return view('pages.service', ['page' => $page, 'service' => $service]);
  }
}
