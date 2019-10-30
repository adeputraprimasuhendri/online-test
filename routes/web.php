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
    return view('home');
})->name('home');

Route::get('/register', 'RandomizeReward@index')->name('register');
Route::get('/simulate', 'RandomizeReward@simulate')->name('simulate');

Route::post('/createUser','RandomizeReward@register');