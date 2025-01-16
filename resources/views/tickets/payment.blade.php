<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Methods</title>
    <style>
        /* General Body Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #f8efd4, #e8dcc1); /* Soft gradient background */
            color: #4e342e; /* Dark brown text */
        }

        /* Container Styles */
        .container {
            max-width: 700px;
            margin: 40px auto;
            padding: 25px;
            background-color: #ffffff; /* White background */
            border-radius: 12px; /* Rounded corners */
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15); /* Subtle shadow for elevation */
            border: 1px solid #d7ccc8;
        }

        h1 {
            text-align: center;
            color: #5d4037; /* Rich brown */
            margin-bottom: 20px;
            font-size: 1.8em;
            font-weight: bold;
        }

        .section {
            margin-bottom: 25px;
        }

        .section h2 {
            font-size: 1.3em;
            margin-bottom: 15px;
            border-bottom: 2px solid #8d6e63; /* Medium brown */
            padding-bottom: 8px;
            color: #5d4037;
        }

        /* Payment Options Grid */
        .payment-options {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center; /* Center align */
            margin-top: 15px;
        }

        .payment-option {
            flex: 1 1 calc(45% - 10px); /* Flexible for two-column layout */
            max-width: 200px;
            background-color: #fbe9e7; /* Lighter brown */
            border: 1px solid #d7ccc8;
            border-radius: 12px;
            text-align: center;
            padding: 20px;
            cursor: pointer;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .payment-option:hover {
            background-color: #e0c3ab; /* Darker brown on hover */
            transform: translateY(-5px); /* Subtle lift */
        }

        .payment-option img {
            max-width: 80px;
            margin-bottom: 12px;
        }

        .payment-option p {
            font-size: 1em;
            font-weight: bold;
            color: #5d4037;
        }

        /* Form Group Styles */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #4e342e;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px;
            font-size: 1em;
            border: 1px solid #d7ccc8;
            border-radius: 8px;
            background-color: #f9f2ec; /* Subtle off-white */
            color: #4e342e;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.05); /* Subtle inset shadow */
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #8d6e63; /* Medium brown on focus */
            box-shadow: 0 0 4px rgba(141, 110, 99, 0.5); /* Glow effect */
            outline: none;
        }

        /* Submit Button Styles */
        .submit-button {
            display: block;
            width: 100%;
            background-color: #795548; /* Dark brown button */
            color: #ffffff;
            padding: 14px;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            text-transform: uppercase;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .submit-button:hover {
            background-color: #6d4c41; /* Slightly darker hover */
            transform: translateY(-2px); /* Slight lift */
        }

        .submit-button:active {
            background-color: #5d4037; /* Even darker on click */
            transform: translateY(0); /* Revert lift */
        }

        /* Responsive Adjustments */
        @media (max-width: 600px) {
            .payment-option {
                flex: 1 1 100%; /* Stack in a single column */
            }
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
                    <a href="/qris"> <img src="{{ asset('images/qris.png') }}" alt="QRIS">
                        <p>QRIS</p></a>

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

                    <label for="account-details">Name</label>
                    <input type="text" id="account-details" name="account_details" placeholder="Name" required>

                </div>
                <div class="form-group">
                    <label for="account-details">Account Details (or Bank Info)</label>
                    <input type="text" id="account-details" name="account_details" placeholder="Account Details" required>
                </div>
                <button type="submit" class="submit-button">Submit Payment</button>
            </form>
        </div>
    </div>
</body>
</html>
