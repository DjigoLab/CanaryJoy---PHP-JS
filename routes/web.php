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

Auth::routes();


Route::get('/', function () {
    return view('home.homepage');
});


Route::get('search/{tp}', 'PlacesController@index');
Route::get('home', 'HomeController@index')->name('home');

Route::post('/search/favourites', 'PlacesController@store')->name('place.fav');