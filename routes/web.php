<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\historyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [adminController::class, 'dashboard'])->name('dashboard');
Route::get('/pages/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/', [historyController::class, 'index'])->name('history_index');


Route::prefix('news')->group(function (){
    Route::get('', [NewsController::class, 'index'])->name('news');
    Route::get('/add', [NewsController::class, 'create'])->name('news_create');
    Route::post('/store', [NewsController::class, 'store'])->name('news_store');
    Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('news_edit');
    Route::put('/update/{id}', [NewsController::class, 'update'])->name('news_update');
    Route::get('/show/{id}', [NewsController::class, 'show'])->name('news_show');
    Route::delete('/destroy/{id}', [NewsController::class, 'destroy'])->name('news_destroy');

});

Route::prefix('event')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('event');
    Route::get('/add', [EventController::class, 'create'])->name('event_create');
    Route::post('/store', [EventController::class, 'store'])->name('event_store');
    Route::get('/edit/{id}', [EventController::class, 'edit'])->name('event_edit');
    Route::put('/update/{id}', [EventController::class, 'update'])->name('event_update');
    Route::get('/show/{id}', [EventController::class, 'show'])->name('event_show');
    Route::delete('/destroy/{id}', [EventController::class, 'destroy'])->name('event_destroy');
});
