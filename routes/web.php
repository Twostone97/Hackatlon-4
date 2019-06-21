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

Route::get('/', 'IndexController@index');
Route::get('/dashboard', 'IndexController@dashboard');
Route::get('/polls', 'IndexController@polls');
Route::get('/poll/create', 'PollController@index');
Route::post('/poll/create', 'PollController@store');
Route::get('/poll/{pollid}/edit', 'OptionController@index');
Route::post('/poll/{pollid}/edit', 'OptionController@store');
Route::get('/poll/{pollid}/view', 'IndexController@viewpoll');
Route::post('/poll/{pollid}/view', 'IndexController@vote');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


