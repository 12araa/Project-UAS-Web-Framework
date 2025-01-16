@extends('layouts.adminMain')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Penduduk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Penduduk</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-body">
            <form action="{{ route('admin.statistics.update') }}" method="POST" id="pendudukForm">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Total Penduduk</label>
                        <input type="number" name="total_penduduk" class="form-control"
                               value="{{ $statistics->total_penduduk ?? old('total_penduduk') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Jumlah KK</label>
                        <input type="number" name="jumlah_kk" class="form-control"
                               value="{{ $statistics->jumlah_kk ?? old('jumlah_kk') }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Laki-laki</label>
                        <input type="number" name="laki_laki" class="form-control"
                               value="{{ $statistics->laki_laki ?? old('laki_laki') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Perempuan</label>
                        <input type="number" name="perempuan" class="form-control"
                               value="{{ $statistics->perempuan ?? old('perempuan') }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Kepadatan (Jiwa/Km²)</label>
                        <input type="number" name="kepadatan" class="form-control"
                               value="{{ $statistics->kepadatan ?? old('kepadatan') }}" required>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a class="btn btn-primary" href="{{ route('penduduk.index')}}" role="button">Lihat Grafik</a>
                </div>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->


      </section>
</div>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.getElementById('pendudukForm').addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Konfirmasi',
                text: 'Apakah Anda yakin ingin menyimpan perubahan?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Simpan!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Show loading state
                    Swal.fire({
                        title: 'Menyimpan...',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    // Submit the form
                    this.submit();
                }
            });
        });

        // Add success message if there's a session flash message
        @if(session('success'))
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonColor: '#3085d6'
            });
        @endif
    </script>


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
@endsection
