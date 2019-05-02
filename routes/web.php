<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [
  'as' => 'index',
  'uses' => 'PageController@index'
]);

Route::get('/services', [
  'as' => 'services',
  'uses' => 'PageController@services'
]);

Route::get('services/{id}', [
  'as' => 'service',
  'uses' => 'PageController@service'
]);

Route::get('/schedule', [
  'as' => 'schedule',
  'uses' => 'PageController@schedule'
]);

Route::get('/events', [
  'as' => 'events',
  'uses' => 'PageController@events'
]);

Route::get('/events/{id}', [
  'as' => 'event',
  'uses' => 'PageController@event'
]);

Route::get('/team', [
  'as' => 'team',
  'uses' => 'PageController@team'
]);

Route::get('/coaches', [
  'as' => 'coaches',
  'uses' => 'PageController@coaches'
]);

Route::get('/coach/{id}', [
  'as' => 'coach',
  'uses' => 'PageController@coach'
]);

Route::get('/gallery', [
  'as' => 'gallery',
  'uses' => 'PageController@gallery'
]);

Route::get('/contacts', [
  'as' => 'contacts',
  'uses' => 'PageController@contacts'
]);

Route::get('/requisites', [
  'as' => 'requisites',
  'uses' => 'PageController@requisites'
]);


Route::group(['prefix' => 'atr-admin'], function () {
    Voyager::routes();
});
