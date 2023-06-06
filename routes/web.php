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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard/home', 'HomeController@index')->name('home');

Route::get('/dashboard/tiket', 'TiketController@index');
Route::get('/dashboard/tiket/create', 'TiketController@create');
Route::post('/dashboard/tiket/proses_add_tiket', 'TiketController@store');
Route::get('/dashboard/tiket/edit/{id}', 'TiketController@edit');
Route::post('/dashboard/tiket/proses_edit_tiket/{id}', 'TiketController@update');
Route::get('/dashboard/tiket/delete/{id}/{foto}', 'TiketController@destroy');
Route::get('/dashboard/tiket/delete/{id}', 'TiketController@delete');

Route::get('/dashboard/tiket/close/{id}', 'TiketController@close');
Route::get('/dashboard/tiket/progress/{id}', 'TiketController@progress');

Route::post('/dashboard/tiket/proses_update_progress', 'TiketController@update_progress');
Route::post('/dashboard/tiket/proses_update_close', 'TiketController@update_close');

Route::get('/dashboard/kategori', 'KategoriController@index');
Route::get('/dashboard/kategori/create', 'KategoriController@create');
Route::post('/dashboard/kategori/proses_add_kategori', 'KategoriController@store');
Route::get('/dashboard/kategori/edit/{id}', 'KategoriController@edit');
Route::post('/dashboard/kategori/proses_edit_kategori/{id}', 'KategoriController@update');
Route::get('/dashboard/kategori/delete/{id}', 'KategoriController@destroy');

Route::get('/dashboard/tiket/new', 'TiketController@new');
Route::get('/dashboard/tiket/onprogress', 'TiketController@onprogress');
Route::get('/dashboard/tiket/done', 'TiketController@done');