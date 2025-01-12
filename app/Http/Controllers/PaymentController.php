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

        // Redirect to a confirmation or details page
        return redirect()->route('ticket.show')->with('success', 'Payment submitted successfully!');
    }

    public function index()
    {
        return view('tickets.payment'); // Adjust the view name as needed
    }

}
