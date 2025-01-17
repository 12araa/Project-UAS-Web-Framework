@extends('layouts.master')

@section('content')
<section class="bg-light">
<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">

        <!-- News Item 1 -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="position-absolute top-0 end-0 bg-dark text-white px-2 py-1" style="border-radius: 0 0 0 5px;">20 Jan</div>
                <img src="{{ asset('images/Perang Pandan.png') }}" class="card-img-top" alt="Perang Pandan">
                <div class="card-body">
                    <!-- Tulisan kecil -->
                    <p class="text-muted mb-1">Tradisi Desa Tenganan</p>
                    <h5 class="card-title">Perang Pandan</h5>
                    <p class="card-text">Makare-kare atau Perang Pandan adalah tradisi yang dilaksanakan oleh masyarakat Desa Tenganan Pegringsingan.</p>
                    <a href="/news/1" class="btn" style="background-color: #8B4513; color: white;">Read More</a>
                </div>
            </div>
        </div>
         <!-- News Item 2 -->
         <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="position-absolute top-0 end-0 bg-dark text-white px-2 py-1" style="border-radius: 0 0 0 5px;">18 Jan</div>
                    <img src="{{ asset('images/Ayunan Jantra.png') }}" class="card-img-top" alt="Ayunan">
                    <div class="card-body">
                        <!-- Tulisan kecil -->
                        <p class="text-muted mb-1">Tradisi Ayunan</p>
                        <h5 class="card-title">Ayunan Jantra</h5>
                        <p class="card-text">Setelah melaksanakan tradisi mekare-kare atau perang pandan, para remaja putri akan melaksanakan sebuah tradisi yang bernama ayunan jantra.</p>
                        <a href="/news/2" class="btn" style="background-color: #8B4513; color: white;">Read More</a>
                    </div>
                </div>
            </div>
        <!-- News Item 3 -->
        <div class="col">
            <div class="card h-100 shadow-sm">
            <!-- Tanggal -->
            <div class="position-absolute top-0 end-0 bg-dark text-white px-2 py-1" style="border-radius: 0 0 0 5px;">15 Jan</div>
            <img src="{{ asset('images/Menenun.png') }}" class="card-img-top" alt="Menenun">
            <div class="card-body">
                <!-- Tulisan kecil -->
                <p class="text-muted mb-1">Kerajinan Tangan</p>
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
                <!-- Tanggal -->
                <div class="position-absolute top-0 end-0 bg-dark text-white px-2 py-1" style="border-radius: 0 0 0 5px;">10 Jan</div>
                <img src="{{ asset('images/Gadis Tenganan.png') }}" class="card-img-top" alt="Gadis Tenganan">
                <div class="card-body">
                    <!-- Tulisan kecil -->
                    <p class="text-muted mb-1">Keunikan Desa</p>
                    <h5 class="card-title">Fakta-Fakta Unik Desa Tenganan</h5>
                    <p class="card-text">Tidak ada penjor saat Galungan, tidak merayakan hari raya Nyepi.</p>
                    <a href="/news/4" class="btn" style="background-color: #8B4513; color: white;">Read More</a>
                </div>
            </div>
        </div>
        <div class="col">
            @foreach($news as $item)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="position-absolute top-0 end-0 bg-dark text-white px-2 py-1" style="border-radius: 0 0 0 5px;">{{ $item->created_at->format('d M') }}</div>
                        <img src="{{ asset('storage/' . $item->image) }}"
                        class="img-fluid w-80"
                        alt="{{ $item->title }}"
                        style="max-height: 500px; object-fit: cover;">
                        <div class="card-body">
                            <!-- Tulisan kecil -->
                            <p class="text-muted mb-1">Tradisi Desa Tenganan</p>
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ Str::limit($item->content, 100) }}</p>
                            <a href="{{ route('news_read', $item->id)}}" class="btn" style="background-color: #8B4513; color: white;">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
</section>
@endsection
