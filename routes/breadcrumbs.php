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
  $trail->push($service->title, route('service', $service->id));
});

Breadcrumbs::for('schedule', function ($trail) {
  $trail->parent('index');
  $trail->push('Расписание', route('schedule'));
});

Breadcrumbs::for('events', function ($trail) {
  $trail->parent('index');
  $trail->push('Афиша', route('events'));
});

Breadcrumbs::for('event', function ($trail, $event) {
  $trail->parent('index');
  $trail->push($event->title, route('event', $event->id));
});

Breadcrumbs::for('coaches', function ($trail) {
  $trail->parent('index');
  $trail->push('Тренеры', route('coaches'));
});

Breadcrumbs::for('coach', function ($trail, $coach) {
  $trail->parent('index');
  $trail->push($coach->title, route('coach', $coach->id));
});

Breadcrumbs::for('team', function ($trail) {
  $trail->parent('index');
  $trail->push('Мы', route('team'));
});

Breadcrumbs::for('gallery', function ($trail) {
  $trail->parent('index');
  $trail->push('Галерея', route('gallery'));
});

Breadcrumbs::for('contacts', function ($trail) {
  $trail->parent('index');
  $trail->push('Контакты', route('contacts'));
});