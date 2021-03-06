<?php

Breadcrumbs::for('index', function ($trail) {
  $trail->push('Главная', route('index'));
});

Breadcrumbs::for('services', function ($trail) {
  $trail->parent('index');
  $trail->push('Услуги', route('services'));
});

Breadcrumbs::for('service', function ($trail, $service) {
  $trail->parent('services');
  $trail->push($service->title, route('service', $service->slug));
});

Breadcrumbs::for('schedule', function ($trail) {
  $trail->parent('index');
  $trail->push('Расписание', route('schedule'));
});

Breadcrumbs::for('events', function ($trail) {
  $trail->parent('index');
  $trail->push('События', route('events'));
});

Breadcrumbs::for('event', function ($trail, $event) {
  $trail->parent('events');
  $trail->push($event->title, route('event', $event->slug));
});

Breadcrumbs::for('coaches', function ($trail) {
  $trail->parent('index');
  $trail->push('Тренеры', route('coaches'));
});

Breadcrumbs::for('coach', function ($trail, $coach) {
  $trail->parent('coaches');
  $trail->push($coach->title, route('coach', $coach->slug));
});

Breadcrumbs::for('gallery', function ($trail) {
  $trail->parent('index');
  $trail->push('Галерея', route('gallery'));
});

Breadcrumbs::for('album', function ($trail, $album) {
  $trail->parent('gallery');
  $trail->push($album->title, route('album', $album->slug));
});

Breadcrumbs::for('page', function ($trail, $page) {
  $trail->push('Главная', url('/'));
  $trail->push($page->title, url($page->slug));
});
