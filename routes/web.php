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

use App\Http\Middleware\LanguageSwitcher;

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

Route::get('/drivereyes', function () {
    return view('drivereyes');
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
      App::setLocale($locale);
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/news1', function () {
    return view('news1');
});



/*Route::get('/{locale}', function ($locale) {
    App::setLocale($locale);
return view('home');
    //
}); */

Route::get('/{lang}', 'LanguagesController@set');






Route::post('/contact/submit', 'MessagesController@submit')->name('message.create');

Route::post('/demand/submit', 'TransportController@store');
