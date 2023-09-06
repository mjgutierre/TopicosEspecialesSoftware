<?php

use Illuminate\Support\Facades\Route;


//ROUTES
Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/login', 'App\Http\Controllers\AuthController@login')->name("auth.login");
Route::post('/login', 'App\Http\Controllers\AuthController@loginPost')->name("auth.loginPost");
Route::get('/signup', 'App\Http\Controllers\AuthController@signup')->name("auth.signup");
Route::post('/signup', 'App\Http\Controllers\AuthController@signupPost')->name("auth.signupPost");