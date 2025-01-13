@extends('layouts.master')

@section('content')
    <main>

        <section class="hero" id="home">
            <h1>Welcome to TENGANAN VILLAGE</h1>
            <img src="{{ asset('images\Ayunan.png')}}" alt="Tenganan Village">
        </section>

        <section class="features-section py-5 bg-light" id="fitur">
            <div class="container">
                <div class="section-title">
                    <h2 class="fw-bold">FITUR DESA TENGANAN</h2>
                    <p>Explore the features available to make it easier to access information about Tenganan Village</p>
                </div>
                <div class="row row-cols-1 row-cols-md-6 g-4">
                    <!-- Fitur Peta Desa -->
                    <div class="col">
                        <div class="card h-100 shadow-sm" div data-aos="fade-down">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="icon mb-3 icon-large">
                                    <i class='bx bx-map'></i>
                                </div>
                                <h5 class="card-title">Peta Desa</h5>
                                <p class="card-text">Lihat peta desa untuk mengetahui lokasi dan batas wilayah Desa Tenganan.</p>
                                <a href="#maps" class="btn btn-primary mt-auto">Lihat Peta</a>
                            </div>
                        </div>
                    </div>
                    <!-- Fitur Statistik Penduduk -->
                    <div class="col">
                        <div class="card h-100 shadow-sm" div data-aos="fade-down">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="icon mb-3 icon-large">
                                    <i class='bx bx-line-chart'></i>
                                </div>
                                <h5 class="card-title">Statistik Penduduk</h5>
                                <p class="card-text">Informasi lengkap tentang jumlah dan profil penduduk Desa Tenganan.</p>
                                <a href="/statistik-penduduk" class="btn btn-success mt-auto">Lihat Statistik</a>
                            </div>
                        </div>
                    </div>
                    <!-- Fitur Galeri Desa -->
                    <div class="col">
                        <div class="card h-100 shadow-sm" div data-aos="fade-down">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="icon mb-3 icon-large">
                                    <i class='bx bx-image'></i>
                                </div>
                                <h5 class="card-title">Galeri Desa</h5>
                                <p class="card-text">Jelajahi galeri foto dan video kegiatan serta keindahan Desa Tenganan.</p>
                                <a href="#gallery" class="btn btn-warning mt-auto">Lihat Galeri</a>
                            </div>
                        </div>
                    </div>
                    <!-- Fitur Berita Desa -->
                    <div class="col">
                        <div class="card h-100 shadow-sm" div data-aos="fade-down">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="icon mb-3 icon-large">
                                    <i class='bx bx-news'></i>
                                </div>
                                <h5 class="card-title">Berita Desa</h5>
                                <p class="card-text">Ikuti berita dan informasi terkini tentang Desa Tenganan.</p>
                                <a href="#news" class="btn btn-info mt-auto">Baca Berita</a>
                            </div>
                        </div>
                    </div>
                    <!-- Fitur UMKM Desa -->
                    <div class="col">
                        <div class="card h-100 shadow-sm" div data-aos="fade-down">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="icon mb-3 icon-large">
                                    <i class='bx bxs-shopping-bags'></i>
                                </div>
                                <h5 class="card-title">UMKM Desa</h5>
                                <p class="card-text">Dukung produk lokal dengan melihat UMKM yang ada di Desa Tenganan.</p>
                                <a href="#UMKM" class="btn btn-danger mt-auto">Lihat UMKM</a>
                            </div>
                        </div>
                    </div>
                    <!-- Fitur Layanan Publik -->
                    <div class="col">
                        <div class="card h-100 shadow-sm" div data-aos="fade-down">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="icon mb-3 icon-large">
                                    <i class='bx bx-user'></i>
                                </div>
                                <h5 class="card-title">Layanan Publik</h5>
                                <p class="card-text">Informasi tentang layanan publik untuk masyarakat Desa Tenganan.</p>
                                <a href="#footer" class="btn btn-secondary mt-auto">Lihat Layanan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="history-section bg-light" id="history">
            <div class="history-grid">
                <!-- Title Content -->
                <div class="history-title">
                    <h2>HISTORY TENGANAN VILLAGE</h2>
                    <p>Explore the rich culture and beauty of Tenganan Village in Bali</p>
                </div>
                <!-- Text Content -->
                <div class="history-content">
                    <p>
                        Desa Tenganan, atau yang lebih dikenal dengan nama Tenganan Pegringsingan, adalah sebuah desa adat yang terletak di Kecamatan Manggis, Kabupaten Karangasem, Bali, Indonesia. Desa ini terkenal sebagai salah satu desa kuno yang masih mempertahankan tradisi dan budaya Bali Aga, yaitu budaya asli Bali yang lebih tua dan berbeda dengan budaya Bali pada umumnya.
                    <br>
                    <a href="/read-history" class="btn-read-more">Baca Selengkapnya</a>
                </div>
                <!-- Image Content -->
                <div class="history-image" div data-aos="zoom-in-up">
                    <img src="{{ asset('images/Desa Tenganan.png') }}" alt="Desa Tenganan">
                </div>
            </div>
        </section>

        <section class="news-section py-5 bg-light" id="news">
            <div class="container">
                <div class="section-title text-center mb-5">
                    <h2 class="fw-bold">TENGANAN NEWS</h2>
                    <p>Stay updated on the latest news and updates about Tenganan Village</p>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 g-4">
                    @if(count($news) > 0)
                        @foreach($news->take(4) as $item)
                            <div class="col" data-aos="fade-right">
                                <div class="card h-100 shadow-sm position-relative">
                                    <!-- Tanggal -->
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
                    @else
                        <!-- News Item 1 -->
                        <div class="col" data-aos="fade-right">
                            <div class="card h-100 shadow-sm position-relative">
                                <!-- Tanggal -->
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
                        <div class="col" data-aos="fade-right">
                            <div class="card h-100 shadow-sm position-relative">
                                <!-- Tanggal -->
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
                        <div class="col" data-aos="fade-left">
                            <div class="card h-100 shadow-sm position-relative">
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
                        <!-- News Item 4 -->
                        <div class="col" data-aos="fade-left">
                            <div class="card h-100 shadow-sm position-relative">
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
                    @endif
                </div>
                <!-- Tombol View More -->
                <div class="text-center mt-4">
                    <a href="/news/list" class="btn btn-dark">View More</a>
                </div>
            </div>
        </section>

         <section class="visit-now bg-light" id="book">
            <div class="history-title">
                <h2>BOOK YOUR TICKET NOW</h2>
                <p>Get Ready for a New Adventure, Book Your Tickets Now!</p>
            </div>
            <div class="grid-container" data-aos="fade-down">
                <div class="ticket-card">
                    <h3>Entrance Fee Domestic</h3>
                    <ul>
                        <li>Dewasa : Rp 25.000 / Orang</li>
                        <li>Anak : Rp 15.000 / Orang</li>
                    </ul>
                    <div class="ticket-badge">Ticket</div>
                </div>

                <div class="ticket-card">
                    <h3>Entrance Fee Foreigner</h3>
                    <ul>
                        <li>Adult : Rp 50.000 / Person</li>
                        <li>Child : Rp 30.000 / Person</li>
                    </ul>
                    <div class="ticket-badge">Ticket</div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="/news" class="btn btn-dark">Book Now</a>
            </div>
        </section>

        <section class="gallery bg-light" id="gallery">
            <div class="section-title">
                <h2>TENGANAN GALLERY</h2>
                <p>Discover the captivating stories and latest updates from the charming Tenganan Village</p>
            </div>
            <div class="grid-gallery" data-aos="zoom-in">
                <img src="{{ asset('images\Menenun.png') }}" alt="Kain Gringsing" data-toggle="modal" data-target="#imageModal" class="gallery-image">
                <img src="{{ asset('images\Ayunan.png') }}" alt="Tradisi Ayunan" data-toggle="modal" data-target="#imageModal" class="gallery-image">
                <img src="{{ asset('images\Perang Pandan.png') }}" alt="Perang Pandan" data-toggle="modal" data-target="#imageModal" class="gallery-image">
                <img src="{{ asset('images\Gadis Tenganan.png') }}" alt="Desa Tenganan" data-toggle="modal" data-target="#imageModal" class="gallery-image">
                <img src="{{ asset('images\Desa Tenganan.png') }}" alt="Desa Tenganan" data-toggle="modal" data-target="#imageModal" class="gallery-image">
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document"> <!-- Menambahkan kelas modal-lg untuk memperbesar ukuran modal -->
                <div class="modal-content">
                    <div class="modal-body">
                    <img src="" id="modalImage" class="img-fluid" alt="Large Image">
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Menambahkan event listener untuk setiap gambar galeri
            const galleryImages = document.querySelectorAll('.gallery-image');

            galleryImages.forEach(image => {
                image.addEventListener('click', function() {
                    // Mengambil URL gambar yang diklik
                    const imageSrc = this.src;

                    // Menyisipkan gambar besar ke dalam modal
                    const modalImage = document.getElementById('modalImage');
                    modalImage.src = imageSrc;
                });
            });
        </script>

        <section class="umkm-section py-5 bg-light" id="UMKM">
            <div class="container">
                <div class="section-title text-center mb-5">
                    <h2 class="fw-bold">UMKM DESA TENGANAN</h2>
                    <p>Explore Tenganan Village iconic products that combine local culture and creativity</p>
                </div>
                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-md-4" data-aos="zoom-in-up">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/Kain Tenun.png') }}" class="card-img-top" alt="Kain Gringsing">
                            <div class="card-body">
                                <h5 class="card-title">Kain Gringsing</h5>
                                <p class="card-text">Salah satu produk UMKM paling khas dari Desa Tenganan adalah kain Gringsing, kain tenun ikat ganda yang telah dikenal hingga mancanegara. Kain ini memiliki makna spiritual yang mendalam dalam kehidupan masyarakat Bali Aga, digunakan dalam berbagai ritual adat dan dipercaya memiliki kekuatan magis untuk menangkal energi negatif.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-4" data-aos="zoom-in-up">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/Topeng Tenganan.png') }}" class="card-img-top" alt="Kerajinan Bambu">
                            <div class="card-body">
                                <h5 class="card-title">Kerajinan Topeng</h5>
                                <p class="card-text">Desa Tenganan dikenal sebagai pusat budaya Bali Aga yang unik, dan salah satu warisan seni yang menonjol adalah kerajinan topeng. Topeng yang dibuat oleh para perajin di desa ini tidak hanya memiliki nilai estetika yang tinggi, tetapi juga mengandung makna spiritual dan filosofi mendalam yang mencerminkan tradisi lokal.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-4" data-aos="zoom-in-up">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/Jajan Tradisional.png') }}" class="card-img-top" alt="Kuliner Tradisional">
                            <div class="card-body">
                                <h5 class="card-title">Kuliner Tradisional</h5>
                                <p class="card-text">Desa Tenganan juga dikenal menghasilkan produk kuliner khas, seperti arak Bali, madu hutan, dan berbagai jajanan tradisional yang dibuat dengan bahan alami. Produk kuliner ini tidak hanya dijual kepada wisatawan tetapi juga mulai dipasarkan secara daring.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="review-section bg-light" id="reviews">
            <div class="container">
                <div class="row text-center mb-4">
                    <div class="col">
                        <h2 style="font-size: 36px;"><strong>REVIEWS</strong></h2>
                        <p>Read reviews, testimonials, and feedback to learn more about this unique destination</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-4 text-center text-md-start">
                        <div class="village-summary d-flex align-items-center">
                            <img src="{{ asset('images/Logo.png') }}" alt="Logo Tenganan Village" class="me-3" style="width: 60px; height: 60px;">
                            <div>
                                <h2 class="h5">Tenganan Village</h2>
                                <div class="stars text-warning">★★★★★</div>
                                <div class="review-count text-muted">23,266 Google reviews</div>
                                <div class="write-review mt-3">
                                    <a href="https://www.google.com/maps/place/Tenganan,+Kec.+Manggis,+Kabupaten+Karangasem,+Bali"
                                       target="_blank"
                                       class="btn btn-sm btn-primary">
                                        Write a review
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row row-cols-1 row-cols-md-3 g-3">
                            <div class="col" data-aos="fade-left">
                                <div class="review-card card border-light h-100" style="border-radius: 15px;">
                                    <div class="card-body">
                                        <h5 class="card-title">yanti erwendy</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">2024-06-27</h6>
                                        <div class="stars text-warning">★★★★☆</div>
                                        <p class="card-text">Bagus... cuma datang di waktu hujan dan pada siang hari jadinya banyak org.. enakan perginya pagi jadi untuk foto foto rada sepi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col" data-aos="fade-left">
                                <div class="review-card card border-light h-100" style="border-radius: 15px;">
                                    <div class="card-body">
                                        <h5 class="card-title">yanti erwendy</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">2024-06-27</h6>
                                        <div class="stars text-warning">★★★★☆</div>
                                        <p class="card-text">Bagus... cuma datang di waktu hujan dan pada siang hari jadinya banyak org.. enakan perginya pagi jadi untuk foto foto rada sepi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col" data-aos="fade-left">
                                <div class="review-card card border-light h-100" style="border-radius: 15px;">
                                    <div class="card-body">
                                        <h5 class="card-title">yanti erwendy</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">2024-06-27</h6>
                                        <div class="stars text-warning">★★★★☆</div>
                                        <p class="card-text">Bagus... cuma datang di waktu hujan dan pada siang hari jadinya banyak org.. enakan perginya pagi jadi untuk foto foto rada sepi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="maps bg-light" id="maps">
            <div class="section-title">
                <h2>COME AND VISIT US</h2>
                <p>Discover the enchanting world of Tenganan Village</p>
            </div>
            <div class="map-container" data-aos="zoom-out-down">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.130441894128!2d115.527876!3d-8.506002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24148f543ae93%3A0xd342f28be16835fa!2sTenganan%20Village!5e0!3m2!1sen!2sid!4v1600126026402!5m2!1sen!2sid"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </section>
    </main>
@endsection




