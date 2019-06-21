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
Route::get('/poll/create', 'IndexController@create');
Route::get('/poll/1/edit', 'IndexController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


