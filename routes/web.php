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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard');
// });
//for page
Route::get('/', 'PagesController@dashboard')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/service', 'PagesController@service')->name('service');
//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//post blog Controller

Route::resource('posts','PostsController');
