<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [historyController::class, 'index'])->name('history_index');
Route::get('/baca-selengkapnya', function () {
    return view('pages.baca-selengkapnya'); // Pastikan file view ini tersedia di folder resources/views/pages
});

