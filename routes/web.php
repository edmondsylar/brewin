<?php

use Illuminate\Support\Facades\Route;

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
// this is for the authentication routes
Auth::routes();


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/news', 'PagesController@news');
Route::get('/contact', 'PagesController@contact');
Route::get('/donate', 'PagesController@donate');
Route::any('/details/{id}', 'PagesController@details');

// Route::any('/details/{id}', function($id){

//     return view('details');
// });

Route::get('/events', 'PagesController@gallery');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/all', 'HomeController@all')->name('all');
Route::post('/blog', 'HomeController@createBlog')->name('blog');
Route::post('/sponser', 'HomeController@sponser')->name('sponser');
Route::post('/fund', 'HomeController@fund')->name('fund');

Route::post('/settings/header', 'SettingsController@header')->name('heander');



Route::resource('sponsers', 'SponsersController');
Route::resource('blogs', 'BlogsController');
Route::resource('fundraisers', 'FundraisersController');
Route::resource('gallery', 'GalleryController');
Route::resource('progs', 'ProgramsController');
