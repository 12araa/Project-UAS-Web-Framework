@extends('layouts.master')

@section('content')
<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- News Item 1 -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/Perang Pandan.png') }}" class="card-img-top" alt="Perang Pandan">
                <div class="card-body">
                    <h5 class="card-title">Perang Pandan</h5>
                    <p class="card-text">Makare-kare atau Perang Pandan adalah tradisi yang dilaksanakan oleh masyarakat Desa Tenganan Pegringsingan.</p>
                    <a href="/news/1" class="btn" style="background-color: #8B4513; color: white;">Read More</a>
                </div>
            </div>
        </div>
         <!-- News Item 2 -->
         <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/Ayunan.png') }}" class="card-img-top" alt="Tradisi Ayunan">
                <div class="card-body">
                    <h5 class="card-title">Ayunan Jantra</h5>
                    <p class="card-text">Setelah melaksanakan tradisi mekare-kare atau perang pandan, para remaja putri akan melaksanakan sebuah tradisi yang bernama ayunan jantra.</p>
                    <a href="/news/2" class="btn" style="background-color: #8B4513; color: white;">Read More</a>
                </div>
            </div>
        </div>
        <!-- News Item 3 -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/Menenun.png') }}" class="card-img-top" alt="Kain Gringsing">
                <div class="card-body">
                    <h5 class="card-title">Kain Gringsing</h5>
                    <p class="card-text">Keunikan lain yang dimiliki oleh Desa Tenganan adalah kerajinan tangan yaitu tenun double ikat Kain Gringsing.</p>
                    <a href="/news/3" class="btn" style="background-color: #8B4513; color: white;">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Menambahkan margin-top pada baris kedua untuk memberi jarak -->
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
        <!-- News Item 4 -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/Gadis Tenganan.png') }}" class="card-img-top" alt="Tradisi Baru">
                <div class="card-body">
                    <h5 class="card-title">Fakta-Fakta Unik Desa Tenganan</h5>
                    <p class="card-text">Tidak ada penjor saat Galungan, tidak merayakan hari raya Nyepi.</p>
                    <a href="/news/4" class="btn" style="background-color: #8B4513; color: white;">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
