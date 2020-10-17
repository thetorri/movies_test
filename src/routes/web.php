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

Route::get('/', [\App\Http\Controllers\MovieController::class, 'list'])->name('home');
Route::get('/movie/{page}', [\App\Http\Controllers\MovieController::class, 'list'])->name('movie.list');
Route::get('/movie/detail/{id}', [\App\Http\Controllers\MovieController::class, 'detail'])->name('movie.detail');
