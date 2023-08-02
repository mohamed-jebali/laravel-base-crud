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
Route::get('/',[AdminBeachResortController::class, 'index'])->name('admin.beachresorts.index');
Route::get('admin/show/{id}',[AdminBeachResortController::class, 'show'])->name('admin.beachresorts.show');
Route::get('/create',[AdminBeachResortController::class, 'create'])->name('admin.beachresorts.create');
Route::post('/admin',[AdminBeachResortController::class, 'store'])->name('admin.beachresorts.store');
Route::get('/edit/{id}',[AdminBeachResortController::class, 'edit'])->name('admin.beachresorts.edit');
Route::put('/admin/{id}',[AdminBeachResortController::class, 'update'])->name('admin.beachresorts.update');
Route::get('/admin/trashed', [AdminBeachResortController::class, 'trashed'])->name('admin.beachresorts.trashed');
Route::delete('/deleted/{id}', [AdminBeachResortController::class, 'restore'])->name('admin.beachresorts.restore');
Route::delete('/admin/{id}', [AdminBeachResortController::class, 'destroy'])->name('admin.beachresorts.destroy');
