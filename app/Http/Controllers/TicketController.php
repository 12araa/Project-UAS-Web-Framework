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
        'date' => 'required|date', // Visit date
        'ticket_package' => 'required|string', // Corrected from ticketPackage
        'tickets' => 'required|integer|min:1', // Number of tickets
    ]);

    // Define ticket prices based on the package
    $ticketPrices = [
        'domesticAdult' => 25000,
        'domesticChild' => 15000,
        'foreignerAdult' => 50000,
        'foreignerChild' => 25000,
    ];

    // Get the price per ticket based on the selected package
    $pricePerTicket = $ticketPrices[$validated['ticket_package']] ?? 0;

    // Calculate total price
    $totalPrice = $pricePerTicket * $validated['tickets'];

    // Add total_price to the validated data
    $validated['total_price'] = $totalPrice;

    // Save the data to the database
    $ticket = Ticket::create($validated);

    // Redirect to the 'tickets.payment' view with ticket data
    return redirect()->route('tickets.payment', ['ticket_id' => $ticket->id])
                     ->with('success', 'Booking berhasil disimpan!');
}



    public function show($ticket_id){
        $tickets = Ticket::findOrFail($ticket_id);

        return view('tickets.payment', compact('tickets'));
    }
}
