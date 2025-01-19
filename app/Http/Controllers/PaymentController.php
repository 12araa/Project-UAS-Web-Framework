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
            'name' => 'required|string|max:255',
            'account_details' => 'required|string|max:255',
        ]);

        // Save payment details to the database
        $payment = Payment::create($request->all());

        // Redirect to a confirmation or details page with the payment data
        return view('tickets.my_ticket', [
            'ticket' => $payment, // Mengirimkan data Payment sebagai $ticket
        ])->with('success', 'Payment submitted successfully!');
    }


    public function index()
    {
        return view('tickets.payment'); // Adjust the view name as needed
    }

}
