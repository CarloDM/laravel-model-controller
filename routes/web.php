<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController as PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/movie',[PageController::class, 'movie'])->name('movie');
Route::get('/movie/{id}',[PageController::class, 'search'])->name('search');
// Route::get('/movie/{id}',[PageController::class, 'movie'])->name('movie');
