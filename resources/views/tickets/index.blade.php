<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Visit to Tenganan Village</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        .form-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card-header {
            background-color: #482901;
            color: white;
            text-align: center;
        }
        .btn-submit {
            background-color: #482901;
            border: none;
        }
        .btn-submit:hover {
            background-color: #482901;
        }
        .total-amount {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <!-- Full-width image at the top -->
                <img src="{{ asset('images/c1.jpg') }}" alt="Tenganan Village" class="form-image">

                <div class="card-header">
                    <h2>Book Your Visit to Tenganan Village</h2>
                    <p>Experience the beauty of traditional Balinese culture</p>
                </div>
                <div class="card-body">
                    <!-- Flash message -->
                    @if(session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('tickets.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">Visit Date</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="ticketPackage" class="form-label">Pilih Paket Tiket</label>
                            <select name="ticketPackage" id="ticketPackage" class="form-control" required>
                                <option value="domesticAdult">Domestic Dewasa (IDR 25.000)</option>
                                <option value="domesticChild">Domestic Anak (IDR 15.000)</option>
                                <option value="foreignerAdult">Foreigner Dewasa (IDR 50.000)</option>
                                <option value="foreignerChild">Foreigner Anak (IDR 25.000)</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="tickets" class="form-label">Jumlah Tiket</label>
                            <input type="number" name="tickets" id="tickets" class="form-control" min="1" required placeholder="Jumlah tiket">
                        </div>

                            <input type="hidden" name="total_price" id="totalPrice" value="0">
                            <input type="hidden" name="price" id="price" value="0">

                        <div class="total-amount mb-4">
                            <span class="fw-bold">Total Harga: </span>
                            <span id="totalAmount" class="text-primary">IDR 0</span>
                        </div>
                        <button type="submit" class="btn btn-submit w-100 text-white py-2">Book Now</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const ticketPackageSelect = document.getElementById("ticketPackage");
    const ticketsInput = document.getElementById("tickets");
    const totalAmountElement = document.getElementById("totalAmount");

    const ticketPrices = {
        domesticAdult: 25000,
        domesticChild: 15000,
        foreignerAdult: 50000,
        foreignerChild: 25000
    };

    // Fungsi untuk menghitung total harga
    function updateTotalAmount() {
        const selectedPackage = ticketPackageSelect.value;
        const ticketCount = parseInt(ticketsInput.value) || 0;
        const pricePerTicket = ticketPrices[selectedPackage] || 0;
        const totalPrice = pricePerTicket * ticketCount;

        // Menampilkan total harga
        totalAmountElement.textContent = `IDR ${totalPrice.toLocaleString()}`;

        document.getElementById("price").value = pricePerTicket;
        document.getElementById("totalPrice").value = totalPrice;
    }

    // Menambahkan event listener untuk update harga saat memilih paket atau jumlah tiket
    ticketPackageSelect.addEventListener("change", updateTotalAmount);
    ticketsInput.addEventListener("input", updateTotalAmount);
</script>
</body>
</html>
