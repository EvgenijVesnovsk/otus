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
    return view('statics.index');
})->name('index');

Route::get('/about', function () {
    return view('statics.about');
})->name('about');

Route::get('/registration', function () {
    return view('users.registration');
})->name('registration');
