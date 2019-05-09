<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Page;

class ServiceController extends Controller
{
  public function index()
  {
    $page = Page::where('name', 'services')->firstOrFail();
    $services = Service::all();
    return view('pages.services', compact('page', 'services'));
  }

  public function show($slug)
  {
    $page = Page::where('name', 'services')->firstOrFail();
    $service = Service::where('slug', $slug)->firstOrFail();
    return view('pages.service', compact('page', 'service'));
  }
}
