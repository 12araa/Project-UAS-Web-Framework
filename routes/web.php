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
Route::get('/read-history', function () {
    return view('pages.read-history'); // Pastikan file view ini tersedia di folder resources/views/pages
});

Route::get('/news', function () {
    return view('pages.news');
});
Route::get('/news/1', function () {
    return view('pages.news1'); // Replace 'news1' with the actual view file
});

Route::get('/news/2', function () {
    return view('pages.news2'); // Replace 'news2' with the actual view file
});

Route::get('/news/3', function () {
    return view('pages.news3'); // Replace 'news3' with the actual view file
});

Route::get('/news/4', function () {
    return view('pages.news4'); // Replace 'news4' with the actual view file
});


