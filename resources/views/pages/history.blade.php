@extends('layouts.master')

@section('content')
    <main>
        <section class="hero">
            <h1>Welcome to TENGANAN VILLAGE</h1>
            <img src="{{ asset('images\Tenganan-Village-Bali-Facebook-1.jpg')}}" alt="Tenganan Village">
        </section>

        <section class="event">
            <div class="container my-4">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Perang Pandan</h4>
                            <p class="card-text">Date: 5/12/2024</p>
                            <p class="card-text">Tickets: 1 Person, Exclusive</p>
                            <button class="btn btn-primary">Show Events</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="history">
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col col-lg-6"><h2>History</h2>
                        <br>
                        <p>Desa Tenganan atau dikenal dengan Tenganan Pegringsingan, merupakan salah satu dari sejumlah desa kuno
                            di Pulau Bali, Provinsi Bali, Indonesia yang ditetapkan sebagai desa adat.
                            Desa Tenganan Pegringsingan terletak di Kecamatan Manggis, Karangasem.</p></div>
                    <div class="col-4"><img src="https://via.placeholder.com/400x300" alt="Tenganan Village History"></div>
                </div>
              </div>
        </section>

        <section class="news">
            <h2>News</h2>
            <div class="news-item">
                <img src="https://via.placeholder.com/400x300" alt="Perang Pandan">
                <h3>Perang Pandan</h3>
                <p>Makare-kare atau Perang Pandan is balinese tradisi yang dilaksanakan oleh masyarakat Desa Tenganan Pegringsingan. Tradisi ini unik karena dilaksanakan dengan cara berperang menggunakan daun pandan yang telah kering.</p>
                <a href="#">Read More</a>
            </div>
            <h2>News</h2>
            <div class="news-item">
                <img src="https://via.placeholder.com/400x300" alt="Perang Pandan">
                <h3>Perang Pandan</h3>
                <p>Makare-kare atau Perang Pandan is balinese tradisi yang dilaksanakan oleh masyarakat Desa Tenganan Pegringsingan. Tradisi ini unik karena dilaksanakan dengan cara berperang menggunakan daun pandan yang telah kering.</p>
                <a href="#">Read More</a>
            </div>
            <div class="news-item">
                <img src="https://via.placeholder.com/400x300" alt="Tradisi Ayunan">
                <h3>Tradisi Ayunan</h3>
                <p>Biasanya, ayunan ini akan digunankan pada saat Tradisi Perang Pandan yang dilaksanakan oleh masyarakat Desa Tenganan. Ayunan ini memiliki makna tersendiri bagi masyarakat Desa Tenganan.</p>
                <a href="#">Read More</a>
            </div>
        </section>
    </main>
@endsection
