<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PaymentController;


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
Route::get('/', function () {
    return view('tickets.tiket_select');
});

Route::get('/detail', function () {
    return view('tickets.detail');
});

Route::get('/payment', function () {
    return view('tickets.payment');
});

Route::get('/index', function () {
    return view('tickets.index');
});

Route::get('/qris', function () {
    return view('tickets.qris');
});


Route::get('/ticket', [TicketController::class, 'index'])->name('tickets.index');
Route::post('/book', [TicketController::class, 'store'])->name('tickets.store');
Route::get('/ticket/{id}', [TicketController::class, 'show'])->name('ticket.show');
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');

Route::get('/tickets/payment/{ticket_id}', [TicketController::class, 'show'])->name('tickets.payment');
