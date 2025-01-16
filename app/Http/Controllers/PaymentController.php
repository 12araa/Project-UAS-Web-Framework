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
        Payment::create($request->all());

        // Redirect to a confirmation or details page
        return view('tickets.detail')->with('success', 'Payment submitted successfully!');
    }

    public function index()
    {
        return view('tickets.payment'); // Adjust the view name as needed
    }

}
