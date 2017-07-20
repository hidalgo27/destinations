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
    'uses' => 'HomeController@index',
    'as' => 'home_path',
]);

//---itinerary
Route::get('/packages/{titulo}', [
    'uses' => 'HomeController@show',
    'as' => 'show_path',
]);

