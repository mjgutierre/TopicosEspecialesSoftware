<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/create', 'App\Http\Controllers\AnimalController@create')->name('animal.create');
Route::post('/createPost', 'App\Http\Controllers\AnimalController@createPost')->name('animal.createPost');
Route::get('/list', 'App\Http\Controllers\AnimalController@list')->name('animal.list');
Route::post('/{id}/delete', 'App\Http\Controllers\AnimalController@delete')->name('animal.delete');
