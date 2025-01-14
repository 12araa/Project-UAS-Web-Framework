<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
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
            margin-bottom: 10px;
            font-size: 1.2em;
            border-bottom: 2px solid #8d6e63; /* Medium brown */
            padding-bottom: 5px;
        }

        .order-summary, .customer-info, .order-items {
            margin-bottom: 20px;
        }

        .order-summary p, .customer-info p {
            margin: 5px 0;
        }

        .order-items table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .order-items th, .order-items td {
            padding: 10px;
            text-align: left;
            border: 1px solid #d7ccc8; /* Light border */
        }

        .order-items th {
            background-color: #8d6e63; /* Medium brown header */
            color: #ffffff; /* White text */
        }

        .order-items td {
            background-color: #fbe9e7; /* Lighter brown for rows */
        }

        .total {
            text-align: right;
            font-size: 1.2em;
            font-weight: bold;
            color: #bf360c; /* Accent brown for total */
        }

        button {
            display: block;
            width: 100%;
            background-color: #795548; /* Dark brown button */
            color: #ffffff; /* White text */
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }

        button:hover {
            background-color: #6d4c41; /* Slightly darker hover effect */
        }
    </style>
</head>
<body>
    <div class="container">
        @foreach ($tickets as $ticket)
        <h1>Order Details</h1>

        <!-- Order Summary Section -->
        <div class="section order-summary">
            <h2>Order Summary</h2>
            <p><strong>Order ID:</strong>{{ $ticket->id }}</p>
            <p><strong>Order Date:</strong>{{$ticket->date->format('d F Y') }}</p>
            <p><strong>Status:</strong> Confirmed</p>
        </div>

        <!-- Customer Information Section -->
        <div class="section customer-info">
            <h2>Customer Information</h2>
            <p><strong>Name:</strong>{{ $ticket->user->name }}</p>
            <p><strong>Email:</strong>{{ $ticket->user->email }}</p>
        </div>

        <!-- Order Items Section -->
        <div class="section order-items">
            <h2>Items Ordered</h2>
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $ticket->tiket_package}}</td>
                        <td>{{ $ticket->tickets}}</td>
                        <td>{{ $ticket->price}}</td>
                        <td>{{ $ticket->total_price}}</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="total">Grand Total</td>
                        <td>
                            IDR {{ number_format($ticket->sum('total_price'), 0, ',', '.') }}
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Button Section -->
        <button>Print Invoice</button>
        <a href="/"><button>go back</button></a>

        @endforeach
    </div>
</body>
</html>
