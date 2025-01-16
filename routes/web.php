<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PaymentController;

use App\Http\Middleware\AdminMiddleware;

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
Route::get('/tickets', [TicketController::class, 'index'])->name('ticket');

Route::get('/detail', function () {
    return view('tickets.detail');
});

Route::get('/payment', function () {
    return view('tickets.payment');
});

app()->singleton('admin', AdminMiddleware::class);

// Route untuk login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Route untuk register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


//user
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    });
});

// admin
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/pages/gallery', [GalleryController::class, 'index'])->name('gallery');
});


Route::get('/', [DashboardController::class, 'index'])->name('history_index');
Route::get('/list/news', [DashboardController::class, 'listNews'])->name('list_news');
Route::get('/read-history', function () {
    return view('pages.user.read-history');
});

Route::get('/news/1', function () {
    return view('pages.user.news1');
});

Route::get('/news/2', function () {
    return view('pages.user.news2');
});

Route::get('/news/3', function () {
    return view('pages.user.news3');
});

Route::get('/news/4', function () {
    return view('pages.user.news4');
});

Route::get('/statistik/penduduk', [ChartController::class, 'index'])->name('penduduk.index');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/statistics', [ChartController::class, 'edit'])->name('admin.statistics.edit');
    Route::put('/admin/statistics', [ChartController::class, 'update'])->name('admin.statistics.update');
});


Route::prefix('news')->group(function (){
    Route::get('', [NewsController::class, 'index'])->name('news');
    Route::get('/add', [NewsController::class, 'create'])->name('news_create');
    Route::post('/store', [NewsController::class, 'store'])->name('news_store');
    Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('news_edit');
    Route::put('/update/{id}', [NewsController::class, 'update'])->name('news_update');
    Route::get('/show/{id}', [NewsController::class, 'show'])->middleware('auth')->name('news_show');
    Route::delete('/destroy/{id}', [NewsController::class, 'destroy'])->name('news_destroy');
    Route::get('/read/{id}', [NewsController::class, 'news_read'])->name('news_read');

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

Route::get('/index', function () {
    return view('tickets.index');
});


Route::get('/ticket', [TicketController::class, 'index'])->name('tickets.index');
Route::post('/book', [TicketController::class, 'store'])->name('tickets.store');
Route::get('/ticket/{id}', [TicketController::class, 'show'])->name('ticket.show');
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
Route::middleware(['auth'])->group(function () {
    Route::get('/my-tickets', [TicketController::class, 'myTickets'])->name('user.tickets');
});

