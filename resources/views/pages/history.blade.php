@extends('layouts.master')

@section('content')
    <main>

        <section class="hero">
            <h1>Welcome to TENGANAN VILLAGE</h1>
            <img src="{{ asset('images\Tradisi-Ayunan.jpeg')}}" alt="Tenganan Village">
        </section>

        <section class="history-section">
            <div class="history-grid">
                <!-- Title Content -->
                <div class="history-title">
                    <h2>HISTORY TENGANAN VILLAGE</h2>
                </div>
                <!-- Text Content -->
                <div class="history-content">
                    <p>
                        Desa Tenganan, atau yang lebih dikenal dengan nama Tenganan Pegringsingan, adalah sebuah desa adat yang terletak di Kecamatan Manggis, Kabupaten Karangasem, Bali, Indonesia. Desa ini terkenal sebagai salah satu desa kuno yang masih mempertahankan tradisi dan budaya Bali Aga, yaitu budaya asli Bali yang lebih tua dan berbeda dengan budaya Bali pada umumnya.
                    <br>
                    <a href="/baca-selengkapnya" class="btn-read-more">Baca Selengkapnya</a>
                </div>
                <!-- Image Content -->
                <div class="history-image">
                    <img src="{{ asset('images/Desa-Tenganan.jpeg') }}" alt="Desa Tenganan">
                </div>
            </div>
        </section>

        <section class="news-section">
            <div class="section-title">
                <h2>TENGANAN NEWS</h2>
            </div>
            <div class="news-grid">
                <!-- News Item 1 -->
                <div class="news-item">
                    <img src="{{ asset('images\Perang-Pandan.jpeg') }}" alt="Perang Pandan">
                    <div class="news-content">
                        <h3>Perang Pandan</h3>
                        <p>Makare-kare atau Perang Pandan is balinese tradisi yang dilaksanakan oleh masyarakat Desa Tenganan Pegringsingan. Tradisi ini unik karena dilaksanakan dengan cara berperang menggunakan daun pandan yang telah kering.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <!-- News Item 2 -->
                <div class="news-item">
                    <img src="{{ asset('images\Tradisi-Ayunan.jpeg') }}" alt="Tradisi Ayunan">
                    <div class="news-content">
                        <h3>Ayunan Jantra</h3>
                        <p>Biasanya, ayunan ini akan digunankan pada saat Tradisi Perang Pandan yang dilaksanakan oleh masyarakat Desa Tenganan. Ayunan ini memiliki makna tersendiri bagi masyarakat Desa Tenganan.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <!-- News Item 3 -->
                <div class="news-item">
                    <img src="{{ asset('images\Menenun.jpg') }}" alt="Kain Gringsing">
                    <div class="news-content">
                        <h3>Kain Gringsing</h3>
                        <p>Kain gringsing merupakan satu-satunya tenun ikat ganda yang berasal dari Indonesia. Kata Gringsing itu sendiri berasal dari kata "gering" yang berarti sakit atau musibah, dan "sing" yang artinya tidak, maka secara keseluruhan gringsing diartikan sebagai penolak bala.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
         </section>

         <section class="visit-now">
            <h1>BOOK YOUR VISIT TO <span class="highlight">TENGANAN VILLAGE NOW</span></h1>
            <br>
            <div class="grid-container">
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
        </section>

        <section class="gallery">
            <div class="section-title">
                <h2>TENGANAN GALLERY</h2>
            </div>
            <div class="grid-gallery">
                <img src="{{ asset('images\Menenun.jpg') }}" alt="Kain Gringsing" data-toggle="modal" data-target="#imageModal" class="gallery-image">
                <img src="{{ asset('images\Tradisi-Ayunan.jpeg') }}" alt="Tradisi Ayunan" data-toggle="modal" data-target="#imageModal" class="gallery-image">
                <img src="{{ asset('images\Perang-Pandan.jpeg') }}" alt="Perang Pandan" data-toggle="modal" data-target="#imageModal" class="gallery-image">
                <img src="{{ asset('images\Gadis Tenganan.jpeg') }}" alt="Desa Tenganan" data-toggle="modal" data-target="#imageModal" class="gallery-image">
                <img src="{{ asset('images\Desa-Tenganan.jpeg') }}" alt="Desa Tenganan" data-toggle="modal" data-target="#imageModal" class="gallery-image">
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

        <section class="review-section">
            <div class="section-title">
                <h2>REVIEWS</h2>
            </div>
            <div class="village-review-container">
                <div class="village-summary">
                    <img src="{{ asset('images/file.png') }}" alt="Logo Tenganan Village">
                    <div class="info">
                        <h2>Tenganan Village</h2>
                        <div class="stars">★★★★★</div>
                        <div class="review-count">23,266 Google reviews</div>
                        <div class="write-review">
                            <a href="https://www.google.com/maps/place/Tenganan,+Kec.+Manggis,+Kabupaten+Karangasem,+Bali/@-8.4763133,115.5277936,13782m/data=!3m2!1e3!4b1!4m6!3m5!1s0x2dd208ae07ab780d:0xd5e08aa546665776!8m2!3d-8.4717387!4d115.5651478!16s%2Fm%2F0glnnrh?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="https://www.google.com/maps/place/Tenganan,+Kec.+Manggis,+Kabupaten+Karangasem,+Bali/@-8.4763133,115.5277936,13782m/data=!3m2!1e3!4b1!4m6!3m5!1s0x2dd208ae07ab780d:0xd5e08aa546665776!8m2!3d-8.4717387!4d115.5651478!16s%2Fm%2F0glnnrh?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D">Write a review</a>
                        </div>
                    </div>

                </div>
                <div class="reviews">
                    <div class="review-slider">
                        <div class="review-card">
                            <h3>yanti erwendy</h3>
                            <div class="date">2024-06-27</div>
                            <div class="stars">★★★★☆</div>
                            <p>Bagus... cuma datang di waktu hujan dan pada siang hari jadinya banyak org.. enakan perginya pagi jadi untuk foto foto rada sepi.</p>
                        </div>
                        <div class="review-card">
                            <h3>yanti erwendy</h3>
                            <div class="date">2024-06-27</div>
                            <div class="stars">★★★★☆</div>
                            <p>Bagus... cuma datang di waktu hujan dan pada siang hari jadinya banyak org.. enakan perginya pagi jadi untuk foto foto rada sepi.</p>
                        </div>
                        <div class="review-card">
                            <h3>yanti erwendy</h3>
                            <div class="date">2024-06-27</div>
                            <div class="stars">★★★★☆</div>
                            <p>Bagus... cuma datang di waktu hujan dan pada siang hari jadinya banyak org.. enakan perginya pagi jadi untuk foto foto rada sepi.</p>
                        </div>
                        <div class="review-card">
                            <h3>yanti erwendy</h3>
                            <div class="date">2024-06-27</div>
                            <div class="stars">★★★★☆</div>
                            <p>Bagus... cuma datang di waktu hujan dan pada siang hari jadinya banyak org.. enakan perginya pagi jadi untuk foto foto rada sepi.</p>
                        </div>
                        <div class="review-card">
                            <h3>yanti erwendy</h3>
                            <div class="date">2024-06-27</div>
                            <div class="stars">★★★★☆</div>
                            <p>Bagus... cuma datang di waktu hujan dan pada siang hari jadinya banyak org.. enakan perginya pagi jadi untuk foto foto rada sepi.</p>
                        </div>
                    </div>
                    <div class="slider-buttons">
                        <button class="nav-button" id="prev">&lt;</button>
                        <button class="nav-button" id="next">&gt;</button>
                    </div>
                </div>
            </div>



        </section>

        <script>
            const slider = document.querySelector('.review-slider');
            const prevButton = document.getElementById('prev');
            const nextButton = document.getElementById('next');

            let currentIndex = 0;

            prevButton.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    slider.style.transform = `translateX(-${currentIndex * 320}px)`;
                }
            });

            nextButton.addEventListener('click', () => {
                if (currentIndex < slider.children.length - 1) {
                    currentIndex++;
                    slider.style.transform = `translateX(-${currentIndex * 320}px)`;
                }
            });
        </script>

        <section class="maps">
            <div class="section-title">
                <h2>COME AND VISIT US</h2>
            </div>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.130441894128!2d115.527876!3d-8.506002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24148f543ae93%3A0xd342f28be16835fa!2sTenganan%20Village!5e0!3m2!1sen!2sid!4v1600126026402!5m2!1sen!2sid"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </section>
    </main>
@endsection
