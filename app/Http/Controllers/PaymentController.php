<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'card_number' => 'required|string|max:16',
            'expiry_date' => 'required|date_format:Y-m',
            'cvv' => 'required|string|max:3',
            'cardholder_name' => 'required|string|max:255',
            'billing_address' => 'required|string|max:255',
        ]);

        // Save payment details to the database
        Payment::create($request->all());

       // Ambil ID tiket dari session
        $ticketId = session('ticket_id');

        if ($ticketId) {
            // Redirect ke halaman tiket setelah pembayaran berhasil
            return redirect()->route('ticket.show', ['ticket_id' => $ticketId])
                            ->with('success', 'Payment successful! Your ticket details are below.');
        }

        // Jika ID tiket tidak ditemukan, redirect kembali ke halaman pembayaran dengan error
        return redirect()->route('payment')->with('error', 'Ticket ID not found.');
    }

    public function index()
    {
        return view('tickets.payment'); // Adjust the view name as needed
    }

}
