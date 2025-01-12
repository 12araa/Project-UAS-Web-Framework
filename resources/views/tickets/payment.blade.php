<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Methods</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4ece1; /* Light brown background */
            color: #4e342e; /* Dark brown text */
        }

        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff; /* White card background */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 1px solid #d7ccc8; /* Subtle border */
        }

        h1 {
            text-align: center;
            color: #5d4037; /* Rich brown */
            margin-bottom: 20px;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            font-size: 1.2em;
            margin-bottom: 10px;
            border-bottom: 2px solid #8d6e63; /* Medium brown */
            padding-bottom: 5px;
        }

        .payment-options {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 15px;
        }

        .payment-option {
            flex: 1;
            background-color: #fbe9e7; /* Lighter brown */
            border: 1px solid #d7ccc8;
            border-radius: 8px;
            text-align: center;
            padding: 15px;
            cursor: pointer;
            transition: 0.3s ease-in-out;
        }

        .payment-option:hover {
            background-color: #e0c3ab; /* Slightly darker brown on hover */
        }

        .payment-option img {
            max-width: 100px;
            margin-bottom: 10px;
        }

        .payment-option p {
            font-size: 1em;
            color: #5d4037;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #d7ccc8;
            border-radius: 5px;
            background-color: #fbe9e7; /* Input field color */
            color: #4e342e;
        }

        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: #8d6e63; /* Focus border color */
        }

        .submit-button {
            display: block;
            width: 100%;
            background-color: #795548; /* Dark brown button */
            color: #ffffff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #6d4c41; /* Slightly darker hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Select Payment Method</h1>

        <!-- Payment Options -->
        <div class="section">
            <h2>Available Methods</h2>
            <div class="payment-options">
                <div class="payment-option">
                    <img src="{{ asset('images/visa.png') }}" alt="Visa">
                    <p>Visa</p>
                </div>
                <div class="payment-option">
                    <img src="{{ asset('images/mastercard.jpg') }}" alt="Mastercard">
                    <p>Mastercard</p>
                </div>
                <div class="payment-option">
                    <img src="{{ asset('images/qris.png') }}" alt="PayPal">
                    <p>Qris</p>
                </div>
                <div class="payment-option">
                    <img src="{{ asset('images/bank.jpg') }}" alt="Bank Transfer">
                    <p>Bank Transfer</p>
                </div>
            </div>
        </div>

        <!-- Payment Details Form -->
        <div class="section">
            <h2>Enter Payment Details</h2>
            <form action="{{ route('payments.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="card-number">Card Number</label>
                    <input type="text" id="card-number" name="card_number" placeholder="1234 5678 9012 3456" required>
                </div>
                <div class="form-group">
                    <label for="expiry-date">Expiry Date</label>
                    <input type="month" id="expiry-date" name="expiry_date" required>
                </div>
                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="123" required>
                </div>
                <div class="form-group">
                    <label for="cardholder-name">Cardholder Name</label>
                    <input type="text" id="cardholder-name" name="cardholder_name" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label for="billing-address">Billing Address</label>
                    <input type="text" id="billing-address" name="billing_address" placeholder="123 Brown Street" required>
                </div>
                <button type="submit" class="submit-button">Submit Payment</button>
            </form>
        </div>
    </div>
</body>
</html>
