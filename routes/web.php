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

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/products', function () {
    return view('products');
})->name('products');


Route::post('/contact', 'ContactController@store')->name('contact');
Route::post('/quote', 'ContactController@quote')->name('quote');
Route::get('/quote', function () {
    return view('home');
});