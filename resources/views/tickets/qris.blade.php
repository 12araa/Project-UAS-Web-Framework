<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRIS Payment</title>
    <style>
        /* General Body Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #f8efd4, #e8dcc1); /* Soft gradient background */
            color: #4e342e; /* Dark brown text */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Container Styles */
        .container {
            max-width: 500px;
            padding: 25px;
            background-color: #ffffff; /* White background */
            border-radius: 12px; /* Rounded corners */
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15); /* Subtle shadow for elevation */
            border: 1px solid #d7ccc8;
            text-align: center;
        }

        h1 {
            color: #5d4037; /* Rich brown */
            margin-bottom: 20px;
            font-size: 1.8em;
            font-weight: bold;
        }

        p {
            margin: 10px 0 20px;
            font-size: 1em;
            color: #6d4c41;
        }

        .qris-image {
            width: 200px;
            height: 200px;
            margin: 20px auto;
            border: 1px solid #d7ccc8;
            border-radius: 10px;
            padding: 10px;
            background-color: #fbe9e7;
        }

        .qris-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .instructions {
            margin-top: 15px;
            font-size: 0.9em;
            color: #8d6e63;
        }

        .instructions span {
            font-weight: bold;
            color: #4e342e;
        }

        .submit-button {
            margin-top: 20px;
            display: inline-block;
            background-color: #795548; /* Dark brown button */
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1em;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>QRIS Payment</h1>
        <p>Scan the QR code below to complete your payment.</p>

        <!-- QRIS Code Image -->
        <div class="qris-image">
            <img src="{{ asset('images/qris-code.png') }}" alt="QRIS Code">
        </div>

        <p class="instructions">
            Open your preferred payment app and scan the <span>QR code</span>.
        </p>

        <!-- Button to Confirm Payment -->
        <a href="#" class="submit-button">Confirm Payment</a>
    </div>
</body>
</html>
