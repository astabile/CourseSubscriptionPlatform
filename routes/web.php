<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', 'IndexController@index')->name('index.index');

//Route::Verb(URI, Controller@Action)->name(Route Name)
Route::get('/courses', 'CourseController@index')->name('courses.index');
Route::get('/courses/{course}', 'CourseController@show')->name('courses.show');

Route::post('/courses/{course}', 'SubscriptionsController@update')->name('subscriptions.update');

Route::get('/home', 'HomeController@index')->name('home');
