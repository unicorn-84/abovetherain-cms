<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  private $siteName = 'Над Дождём';
  private $siteDescription = 'Школа танцев в Санкт-Петербурге';

  public function index()
  {
    return view('pages.index', [
      'title' => 'Главная | ' . $this->siteName,
      'description' => $this->siteDescription,
      'pageSelector' => env('APP_NAME') . '__' . 'index',
      'name' => 'Главная'
    ]);
  }

  public function services()
  {
    return view('pages.services', [
      'title' => 'Услуги | ' . $this->siteName,
      'description' => $this->siteDescription,
      'pageSelector' => env('APP_NAME') . '__' . 'services',
      'name' => 'Услуги'
    ]);
  }

  public function schedule()
  {
    return view('pages.schedule', [
      'title' => 'Расписание | ' . $this->siteName,
      'description' => $this->siteDescription,
      'pageSelector' => env('APP_NAME') . '__' . 'schedule',
      'name' => 'Расписание'
    ]);
  }

  public function events()
  {
    return view('pages.events', [
      'title' => 'События | ' . $this->siteName,
      'description' => $this->siteDescription,
      'pageSelector' => env('APP_NAME') . '__' . 'events',
      'name' => 'События'
    ]);
  }

  public function team()
  {
    return view('pages.team', [
      'title' => 'Мы | ' . $this->siteName,
      'description' => $this->siteDescription,
      'pageSelector' => env('APP_NAME') . '__' . 'team',
      'name' => 'Мы'
    ]);
  }

  public function coaches()
  {
    return view('pages.coaches', [
      'title' => 'Тренеры | ' . $this->siteName,
      'description' => $this->siteDescription,
      'pageSelector' => env('APP_NAME') . '__' . 'coaches',
      'name' => 'Тренеры'
    ]);
  }

  public function gallery()
  {
    return view('pages.gallery', [
      'title' => 'Галерея | ' . $this->siteName,
      'description' => $this->siteDescription,
      'pageSelector' => env('APP_NAME') . '__' . 'gallery',
      'name' => 'Галерея'
    ]);
  }

  public function contacts()
  {
    return view('pages.contacts', [
      'title' => 'Контакты | ' . $this->siteName,
      'description' => $this->siteDescription,
      'pageSelector' => env('APP_NAME') . '__' . 'contacts',
      'name' => 'Контакты'
    ]);
  }

  public function requisites()
  {
    return view('pages.requisites', [
      'title' => 'Реквизиты для оплаты | ' . $this->siteName,
      'description' => $this->siteDescription,
      'pageSelector' => env('APP_NAME') . '__' . 'requisites',
      'name' => 'Реквизиты для оплаты'
    ]);
  }
}
