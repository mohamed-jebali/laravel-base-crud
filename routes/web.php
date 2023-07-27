<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BeachResortController as AdminBeachResortController;
use App\Http\Controllers\Guest\PageController as GuestPageController;

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

Route::get('/home',[GuestPageController::class, 'home'])->name('guest.beachresorts.home');
Route::get('/index',[AdminBeachResortController::class, 'index'])->name('admin.beachresorts.index');
Route::get('/show',[AdminBeachResortController::class, 'show'])->name('admin.beachresorts.show');
