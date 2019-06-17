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
Route::get('/', 'AdminLTEController@index');
Route::get('/index.html', 'AdminLTEController@index');
Route::get('/news.html', 'NewsController@index');
Route::get('/news.html/{id}', 'NewsController@show');
Route::get('/news.html/{action}/{id}', 'NewsController@orm');

Route::get('/{id?}', 'AdminLTEController@index');
