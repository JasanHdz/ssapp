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

Route::get('/', [\App\Http\Controllers\PageController::class, 'users'])
  ->middleware('auth');

Route::get('search', [App\Http\Controllers\PageController::class, 'search'])
  ->name('search');

Route::get('/profile', [App\Http\Controllers\PageController::class, 'profile'])
  ->name('profile');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])
  ->name('home');

