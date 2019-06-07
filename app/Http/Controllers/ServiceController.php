<?php

namespace App\Http\Controllers;

use App\Service;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Page;

class ServiceController extends Controller
{
  public function index()
  {
    $services = Service::orderByRaw('ISNULL(position), position ASC')->get();

    $page = Page::where('slug', 'services')->firstOrFail();

    $layoutType = Voyager::setting('services.layout', 'grid');
    $layoutColumns = Voyager::setting('services.columns', '3');

    if (view()->exists('pages.services.' . $layoutType))
      return view('pages.services.' . $layoutType, ['page' => $page, 'services' => $services, 'layoutColumns' => $layoutColumns]);
    else {
      return view('pages.services.grid', ['page' => $page, 'services' => $services, 'layoutColumns' => $layoutColumns]);
    }
  }

  public function show($slug)
  {
    $page = Page::where('slug', 'services')->firstOrFail();

    $service= Service::where('slug', $slug)->firstOrFail();

    $template = Voyager::setting('services.template', 'standard');

    if (view()->exists('pages.services.service.' . $template))
      return view('pages.services.service.' . $template, ['page' => $page, 'service' => $service]);
    else {
      return view('pages.services.service.standard', ['page' => $page, 'service' => $service]);
    }
  }
}
