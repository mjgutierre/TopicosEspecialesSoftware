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
Route::get('/crear', 'App\Http\Controllers\AnimalController@create')->name('animal.create');
Route::post('/crearPost', 'App\Http\Controllers\AnimalController@createPost')->name('animal.createPost');
Route::get('/listar', 'App\Http\Controllers\AnimalController@list')->name('animal.list');
Route::get('/estadisticas', 'App\Http\Controllers\AnimalController@statistics')->name('animal.statistics');
