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


Route::any('/', [App\Http\Controllers\SiteController::class, 'index'])->name('index');
Route::any('/about-us', [App\Http\Controllers\SiteController::class, 'about'])->name('about');
Route::any('/our-blog', [App\Http\Controllers\SiteController::class, 'blog'])->name('blog');
Route::any('/contact-us', [App\Http\Controllers\SiteController::class, 'contact'])->name('contact');
Route::any('/services', [App\Http\Controllers\SiteController::class, 'services'])->name('services');
Route::any('/career', [App\Http\Controllers\SiteController::class, 'career'])->name('career');
Route::any('/testimonial', [App\Http\Controllers\SiteController::class, 'testimonial'])->name('testimonial');
Route::any('/contact', [App\Http\Controllers\SiteController::class, 'contact'])->name('contact');
