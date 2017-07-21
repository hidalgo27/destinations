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
//---destinarions
Route::get('/destinations', [
    'uses' => 'HomeController@destinations',
    'as' => 'destinations_path',
]);
Route::get('/destinations/{title}', [
    'uses' => 'HomeController@destinations_sow',
    'as' => 'destinations_show_path',
]);

//---packages
Route::get('/packages', [
    'uses' => 'HomeController@packages',
    'as' => 'packages_path',
]);

//---About
Route::get('/about', [
    'uses' => 'HomeController@about',
    'as' => 'about_path',
]);
//---Testimonisal
Route::get('/testimonials', [
    'uses' => 'HomeController@testimonials',
    'as' => 'testimonials_path',
]);