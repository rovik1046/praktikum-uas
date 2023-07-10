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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/buku/search', 'BukuController@search')->name('search'); 
Route::delete('buku/{id}', 'BukuController@destroy');
Route::get('buku/{id}/edit', 'BukuController@edit'); 
Route::patch('buku/{id}', 'BukuController@update');
Route::get('/buku/create', 'BukuController@create'); 
Route::post('/buku', 'BukuController@store');
Route::get('/buku', 'BukuController@index');
Route::get('/home', 'HomeController@index')->name('home');
