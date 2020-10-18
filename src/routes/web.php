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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/logout', [\Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/user/rate', [\App\Http\Controllers\UserRateController::class, 'list'])->name('user.rate');
Route::get('/user/rate/add/{movieId}', [\App\Http\Controllers\UserRateController::class, 'add'])->name('user.rate.add');
