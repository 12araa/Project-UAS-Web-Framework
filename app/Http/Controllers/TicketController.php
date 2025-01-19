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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'ticket_package' => 'required|string',
            'tickets' => 'required|integer|min:1',
        ]);

        // Define ticket prices
        $ticketPrices = [
            'domesticAdult' => 25000,
            'domesticChild' => 15000,
            'foreignerAdult' => 50000,
            'foreignerChild' => 25000,
        ];

        // Calculate prices
        $pricePerTicket = $ticketPrices[$validated['ticket_package']] ?? 0;
        $totalPrice = $pricePerTicket * $validated['tickets'];

        // Create ticket
        $ticket = Ticket::create([
            'user_id' => Auth::id(),
            'name' => $validated['name'],
            'email' => $validated['email'],
            'date' => $validated['date'],
            'ticket_package' => $validated['ticket_package'],
            'tickets' => $validated['tickets'],
            'price' => $pricePerTicket,
            'total_price' => $totalPrice,
        ]);

        return redirect()->route('tickets.payment', ['ticket_id' => $ticket->id])
                        ->with('success', 'Booking berhasil disimpan!');
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
