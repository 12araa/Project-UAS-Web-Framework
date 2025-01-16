@extends('layouts.master')

@section('content')
<section class="statistics-section py-5 bg-light" id="statistics">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h2 class="fw-bold">STATISTIK PENDUDUK DESA TENGANAN</h2>
            <p>Data statistik penduduk Desa Tenganan berdasarkan data terakhir</p>
        </div>

        <div class="row">
            <!-- Summary Cards -->
            <div class="col-md-12 mb-4">
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="card text-center h-100 shadow-sm" data-aos="fade-up">
                            <div class="card-body">
                                <i class='bx bx-group mb-3' style="font-size: 2rem; color: #4e73df;"></i>
                                <h5 class="card-title">Total Penduduk</h5>
                                <h3 class="card-text">{{ $statistics->total_penduduk }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center h-100 shadow-sm" data-aos="fade-up">
                            <div class="card-body">
                                <i class='bx bx-home-alt mb-3' style="font-size: 2rem; color: #1cc88a;"></i>
                                <h5 class="card-title">Jumlah KK</h5>
                                <h3 class="card-text">{{ $statistics->jumlah_kk }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center h-100 shadow-sm" data-aos="fade-up">
                            <div class="card-body">
                                <i class='bx bx-male mb-3' style="font-size: 2rem; color: #36b9cc;"></i>
                                <h5 class="card-title">Laki-laki</h5>
                                <h3 class="card-text">{{ $statistics->laki_laki }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center h-100 shadow-sm" data-aos="fade-up">
                            <div class="card-body">
                                <i class='bx bx-female mb-3' style="font-size: 2rem; color: #f6c23e;"></i>
                                <h5 class="card-title">Perempuan</h5>
                                <h3 class="card-text">{{ $statistics->perempuan }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm" data-aos="fade-right">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Distribusi Gender</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="genderChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm" data-aos="fade-left">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Statistik Penduduk</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="statistikChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    // Data statistik
    const data = {
        laki_laki: {{ $statistics->laki_laki }},
        perempuan: {{ $statistics->perempuan }},
        total_penduduk: {{ $statistics->total_penduduk }},
        jumlah_kk: {{ $statistics->jumlah_kk }},
        kepadatan: {{ $statistics->kepadatan }}
    };

    // Pie Chart untuk Gender
    const genderChart = new Chart(
        document.getElementById('genderChart'),
        {
            type: 'pie',
            data: {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    data: [data.laki_laki, data.perempuan],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 99, 132, 0.8)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        }
    );

    // Bar Chart untuk Statistik
    const statistikChart = new Chart(
        document.getElementById('statistikChart'),
        {
            type: 'bar',
            data: {
                labels: ['Total Penduduk', 'Jumlah KK', 'Kepadatan (Jiwa/Km²)'],
                datasets: [{
                    label: 'Statistik Penduduk',
                    data: [data.total_penduduk, data.jumlah_kk, data.kepadatan],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(153, 102, 255, 0.8)',
                        'rgba(255, 159, 64, 0.8)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        }
    );
    </script>
</section>
@endsection
