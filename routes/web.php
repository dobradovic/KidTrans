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
});



Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/truck', function () {
    return view('truck');
});

Route::get('/logistic', function () {
    return view('logistic');
});

Route::get('/ship', function () {
    return view('ship');
});

Route::get('/airplane', function () {
    return view('airplane');
});

Route::get('/train', function () {
    return view('train');
});

Route::get('/demand', function () {
    return view('demand');
});





Route::post('/contact/submit', 'MessagesController@submit');
