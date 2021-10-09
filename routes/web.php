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

Route::get('/', 'BukuController@index');
Route::get('/buku/create', 'BukuController@create')->name('buku.create');
Route::get('/buku', 'BukuController@store')->name('buku.store');
Route::post('/buku/delete/{id}', 'BukuController@destroy')->name('buku.destroy');
Route::get('/buku/edit/{id}', 'BukuController@edit')->name('buku.edit');
Route::post('/buku/update/{id}', 'BukuController@update')->name('buku.update');
