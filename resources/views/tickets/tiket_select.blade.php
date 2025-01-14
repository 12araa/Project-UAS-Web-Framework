@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.32/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.32/sweetalert2.all.min.js"></script>
    <title>Travel Packages</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .carousel {
            position: relative;
            width: 100%;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .carousel img {
            width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: cover;
        }

        .carousel-buttons {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .carousel-buttons button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        .carousel-buttons button:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }

        .packages {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .package {
        width: 48%; /* Dua kolom dengan jarak kecil */
        margin-bottom: 20px; /* Jarak antar baris */
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .package img {
        width: 100%;
    height: 200px;
    object-fit: cover;
    border-bottom: 1px solid #ddd;
    }

    .package-content {
        padding: 15px;
        text-align: center;
    }

    .package-content h2 {
        font-size: 1.5em;
        margin: 10px 0;
    }

    .package-content p {
        margin: 5px 0;
    }

    .package-content .price {
        font-size: 1.2em;
        color: #8B6E5B;
        font-weight: bold;
    }

    .package-content button {
        background-color: #8B6E5B;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1em;
    }

    .package-content button:hover {
        background-color: #8B6E5B;
    }

        .ticket-section {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        margin-top: 20px;
    }

    .ticket {
        flex: 1;
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 15px;
    }

    .ticket-content {
        text-align: left;
    }

    .ticket h2 {
        margin: 0 0 10px;
        font-size: 20px;
    }

    .ticket p {
        color: #555;
        margin: 5px 0;
    }

    .ticket-badge {
        display: inline-block;
        background-color: #8B6E5B;
        color: white;
        padding: 5px 10px;
        border-radius: 12px;
        margin-bottom: 15px;
        font-size: 14px;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="carousel">
            <img src="{{ asset('images/c1.jpg') }}" alt="Scenic view">
            <div class="carousel-buttons">
                <button onclick="prevSlide()">&#8249;</button>
                <button onclick="nextSlide()">&#8250;</button>
            </div>
        </div>
        <div class="container">
            <h1>Explore Our Packages</h1>
            <div class="ticket-section">
                <div class="ticket">
                    <div class="ticket-content">
                        <h2>Entrance Fee Domestic</h2>
                        <p>Dewasa: Rp 25.000 / Orang</p>
                        <p>Anak: Rp 15.000 / Orang</p>
                    </div>
                </div>
                <div class="ticket">
                    <div class="ticket-content">
                        <h2>Entrance Fee Foreigner</h2>
                        <p>Adult: Rp 50.000 / Person</p>
                        <p>Child: Rp 30.000 / Person</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="packages">
            <div class="package">
                <img src="{{ asset('images/a1.jpg') }}" alt="Indonesia">
                <div class="package-content">
                    <h2>Packages Tur Guide</h2>
                    @auth
                        <a href="/index"><button>Book Now</button></a>
                    @else
                        <button onclick="showLoginAlert()">Book Now</button>
                    @endauth
                </div>
            </div>
            <div class="package">
                <img src="{{ asset('images/b1.jpg') }}" alt="Japan">
                <div class="package-content">
                    <h2>Rent Costume</h2>
                    @auth
                        <a href="/index"><button>Book Now</button></a>
                    @else
                        <button onclick="showLoginAlert()">Book Now</button>
                    @endauth

                </div>
            </div>
            <div class="package">
                <img src="{{ asset('images/a2.jpg') }}" alt="France">
                <div class="package-content">
                    <h2>Art Show</h2>
                    @auth
                        <a href="/index"><button>Book Now</button></a>
                    @else
                        <button onclick="showLoginAlert()">Book Now</button>
                    @endauth
                </div>
            </div>
            <div class="package">
                <img src="{{ asset('images/a3.jpg') }}" alt="England">
                <div class="package-content">
                    <h2>Art Class</h2>
                    @auth
                        <a href="/index"><button>Book Now</button></a>
                    @else
                        <button onclick="showLoginAlert()">Book Now</button>
                    @endauth
                </div>
            </div>
        </div>

    <script>
        let currentSlide = 0;
        const slides = [
            "{{ asset('images/d1.jpg') }}",
            "{{ asset('images/d2.jpg') }}",
            "{{ asset('images/d3.jpeg') }}"
        ];

        function showSlide(index) {
            const carousel = document.querySelector('.carousel img');
            currentSlide = (index + slides.length) % slides.length;
            carousel.src = slides[currentSlide];
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        setInterval(nextSlide, 5000); // Auto-slide every 5 seconds
    </script>

<script>
    function showLoginAlert() {
        Swal.fire({
            title: 'Authentication Required',
            text: 'Please login to book this package!',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#8B6E5B',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Login Now',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('login') }}";
            }
        });
    }
    </script>
</body>
</html>

@endsection
