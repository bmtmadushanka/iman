<?php

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

Route::get('/home', function () {
    return view('front-end.index');
});
Route::get('/testimonial', function () {
    return view('front-end.testimonial');
});

Route::get('/Contact-us', function () {
    return view('front-end.Contact-us');
});
Route::get('/Career', function () {
    return view('front-end.Career');
});
Route::get('/About-us', function () {
    return view('front-end.About-us');
});
Route::get('/Our-Services', function () {
    return view('front-end.Our-Services');
});

Route::get('/Our-Blog', function () {
    return view('front-end.Our-Blog');
});
Route::get('/Privacy-Policy', function () {
    return view('front-end.Privacy-Policy');
});

Route::get('/Terms-and-Conditions', function () {
    return view('front-end.Terms-and-Conditions');
});

