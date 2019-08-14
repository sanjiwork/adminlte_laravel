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


//Route::get('/', 'AdminLTEController@index');
Route::get('posts','PostController@index')->name('posts.index');
Route::get('posts/create','PostController@create')->name('posts.create');
Route::post('posts/store','PostController@store')->name("posts.store");
Route::get('posts/{id}','PostController@show')->name("posts.show");
Route::get('posts/{id}/edit','PostController@edit')->name("posts.edit");
Route::patch('posts/{id}','PostController@update')->name("posts.update");
Route::delete('posts/{id}','PostController@destroy')->name("posts.destroy");
/*
Route::get('/index.html', 'AdminLTEController@index');
Route::get('/news.html', 'NewsController@index');
Route::get('/news.html/{id}', 'NewsController@show');
Route::get('/news.html/{action}/{id}', 'NewsController@orm');
*/
Route::get('/index', 'AdminLTEController@index');
Route::get('/{id?}', 'AdminLTEController@index');

//Route::resource('posts','PostController');




