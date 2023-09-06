<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/login', 'App\Http\Controllers\authController@login')->name("user.login");
Route::post('/login', 'App\Http\Controllers\authController@loginPost')->name("user.loginPost");
Route::get('/signup', 'App\Http\Controllers\authController@signup')->name("user.signup");
Route::post('/signup', 'App\Http\Controllers\authController@signupPost')->name("user.signupPost");
Route::get('/logout', 'App\Http\Controllers\authController@logout')->name("user.logout");
Route::get('/profiles', 'App\Http\Controllers\authController@show')->name("user.show");
Route::get('/profiles/{id}', 'App\Http\Controllers\authController@index')->name("user.profileindex");
Route::post('/profiles/{id}/delete', 'App\Http\Controllers\authController@delete')->name("user.delete");