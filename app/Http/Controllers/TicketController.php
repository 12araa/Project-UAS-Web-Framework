<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index()
    {
        return view('tickets.tiket_select');
    }

    public function store(Request $request)
    {
        // Validasi input, pastikan 'price' ada
        $validatedData = $request->validate([
            'ticketPackage' => 'required|string',
            'tickets' => 'required|integer|min:1',
            'date' => 'required|date',
            'price' => 'required|integer',  // Validasi untuk price
            'total_price' => 'required|integer',  // Validasi untuk total_price
        ]);

        // Simpan data tiket
        $ticket = Ticket::create([
            'user_id' => Auth::id(),
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'date' => $request->date,
            'ticket_package' => $request->ticketPackage,
            'tickets' => $request->tickets,
            'price' => $request->price,  // Menyimpan harga per tiket
            'total_price' => $request->total_price,  // Menyimpan total harga
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('payment')->with('ticket_id', $ticket->id);
    }




    public function show($ticket_id)
    {
        $ticket = Ticket::where('id', $ticket_id)
                        ->where('user_id', Auth::id())
                        ->firstOrFail();

        return view('tickets.detail', compact('ticket'));
    }


    public function myTickets()
    {
        $tickets = Ticket::where('user_id', Auth::id())
                        ->orderBy('created_at', 'desc')
                        ->get();

        return view('tickets.my_ticket', compact('tickets'));
    }
}
