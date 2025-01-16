<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('tickets.payment');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'date' => 'required|date', // Kolom date
        'ticketPackage' => 'required|string',
        'tickets' => 'required|integer|min:1', // Kolom tickets
    ]);

    // Tentukan harga tiket berdasarkan pilihan paket
    $ticketPrices = [
        'domesticAdult' => 25000,
        'domesticChild' => 15000,
        'foreignerAdult' => 50000,
        'foreignerChild' => 25000,
    ];
    $pricePerTicket = $ticketPrices[$request->ticketPackage] ?? 0;

    // Hitung total harga
    $totalPrice = $pricePerTicket * $request->tickets;

    // Simpan data ke database
    Ticket::create($request->all());

    // Redirect dengan pesan sukses
    return redirect()->route('detail')->with('success', 'Booking berhasil disimpan!');
}


    public function show($ticket_id){
        $tickets = Ticket::findOrFail($ticket_id);

        return view('tickets.detail', compact('tickets'));
    }
}
