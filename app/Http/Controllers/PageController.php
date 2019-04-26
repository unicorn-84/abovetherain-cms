<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    return view('pages.index', [
      'title' => 'Главная | Над Дождём',
      'pageSelector' => config('app.name') . '__' . 'index',
      'name' => 'Главная'
    ]);
  }

  public function services()
  {
    return view('pages.services', [
      'title' => 'Услуги | Над Дождём',
      'pageSelector' => config('app.name') . '__' . 'services',
      'name' => 'Услуги'
    ]);
  }

  public function schedule()
  {
    return view('pages.schedule', [
      'title' => 'Расписание | Над Дождём',
      'pageSelector' => config('app.name') . '__' . 'schedule',
      'name' => 'Расписание'
    ]);
  }

  public function events()
  {
    return view('pages.events', [
      'title' => 'События | Над Дождём',
      'pageSelector' => config('app.name') . '__' . 'events',
      'name' => 'События'
    ]);
  }

  public function team()
  {
    return view('pages.team', [
      'title' => 'Мы | Над Дождём',
      'pageSelector' => config('app.name') . '__' . 'team',
      'name' => 'Мы'
    ]);
  }

  public function coaches()
  {
    return view('pages.coaches', [
      'title' => 'Тренеры | Над Дождём',
      'pageSelector' => config('app.name') . '__' . 'coaches',
      'name' => 'Тренеры'
    ]);
  }

  public function gallery()
  {
    return view('pages.gallery', [
      'title' => 'Галерея | Над Дождём',
      'pageSelector' => config('app.name') . '__' . 'gallery',
      'name' => 'Галерея'
    ]);
  }

  public function contacts()
  {
    return view('pages.contacts', [
      'title' => 'Контакты | Над Дождём',
      'pageSelector' => config('app.name') . '__' . 'contacts',
      'name' => 'Контакты'
    ]);
  }
}
