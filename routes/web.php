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
  'uses' => 'PageController@show'
]);

Route::get('/services', [
  'as' => 'services',
  'uses' => 'ServiceController@index'
]);

Route::get('services/{slug}', [
  'as' => 'service',
  'uses' => 'ServiceController@show'
]);

Route::get('/schedule', [
  'as' => 'schedule',
  'uses' => 'PageController@show'
]);

Route::get('/events', [
  'as' => 'events',
  'uses' => 'EventController@index'
]);

Route::get('/events/{slug}', [
  'as' => 'event',
  'uses' => 'EventController@show'
]);

Route::get('/team', [
  'as' => 'team',
  'uses' => 'PageController@show'
]);

Route::get('/coaches', [
  'as' => 'coaches',
  'uses' => 'CoachController@index'
]);

Route::get('/coaches/{slug}', [
  'as' => 'coach',
  'uses' => 'CoachController@show'
]);

Route::get('/gallery', [
  'as' => 'gallery',
  'uses' => 'AlbumController@index'
]);

Route::get('/gallery/{slug}', [
  'as' => 'album',
  'uses' => 'AlbumController@show'
]);

Route::get('/contacts', [
  'as' => 'contacts',
  'uses' => 'PageController@show'
]);

Route::get('/requisites', [
  'as' => 'requisites',
  'uses' => 'PageController@show'
]);


Route::group(['prefix' => 'atr-admin'], function () {
    Voyager::routes();
});
