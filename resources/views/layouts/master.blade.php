<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenganan Village</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/summernote/summernote-bs4.min.css')}}">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/ekko-lightbox/ekko-lightbox.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css')}}">
</head>
<body>
    <header>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="{{ route('history_index') }}" class="brand-link">
                <img src="{{ asset('images/Logo.png') }}" alt="Tenganan Village Logo" class="brand-image">
                <span class="brand-text text-dark">TENGANAN VILLAGE</span>
            </a>

            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#fitur">Fitur</a></li>
                <li><a href="#history">History</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#event">Event</a></li>
                <li><a href="#book">Book</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#UMKM">UMKM Desa</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li><a href="#maps">Maps</a></li>
            </ul>

            <div class="auth-buttons">
                @guest
                    <a href="{{ route('login') }}" class="login-btn">Login</a>
                    <a href="{{ route('register')}}" class="signup-btn">Sign Up</a>
                @else
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #8B4513; color: white; text-decoration: none; padding: 8px 16px; border-radius: 4px;">
                            {{ Auth::user()->name }}
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            @if(Auth::user()->role === 'admin')
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                    <i class='bx bx-dashboard me-2'></i> Dashboard
                                </a>
                            @else
                                <a class="dropdown-item" href="{{ route('user.tickets') }}">
                                    <i class='bx bx-ticket me-2'></i> My Ticket
                                </a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class='bx bx-log-out me-2'></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </nav>
    </header>

   <!-- Main Content -->
    <main class="container-fluid">
        @yield('content')
    </main>

    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row text-center text-md-start">
                <!-- Kolom 1: Logo dan Deskripsi -->
                <div class="col-md-3 mb-4" id="footer">
                    <div class="footer-logo d-flex align-items-center justify-content-center justify-content-md-start">
                        <img src="{{ asset('images/Logo.png') }}" alt="Tenganan Village Logo" class="me-3" style="width: 50px;">
                        <h3 class="m-0">TENGANAN VILLAGE</h3>
                    </div>
                    <p class="mt-3">Discover the beauty and culture of Tenganan Pegringsingan Village, Bali's iconic heritage destination.</p>
                </div>

                <!-- Kolom 2: Quick Links -->
                <div class="col-md-3 mb-4">
                    <h3 class="mb-3">Quick Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="#home" class="text-light text-decoration-none">Home</a></li>
                        <li><a href="#fitur" class="text-light text-decoration-none">Fitur</a></li>
                        <li><a href="#history" class="text-light text-decoration-none">History</a></li>
                        <li><a href="#news" class="text-light text-decoration-none">News</a></li>
                        <li><a href="#event" class="text-light text-decoration-none">Event</a></li>
                        <li><a href="#book" class="text-light text-decoration-none">Book</a></li>
                        <li><a href="#gallery" class="text-light text-decoration-none">Gallery</a></li>
                        <li><a href="#UMKM" class="text-light text-decoration-none">UMKM Desa</a></li>
                        <li><a href="#reviews" class="text-light text-decoration-none">Reviews</a></li>
                        <li><a href="#maps" class="text-light text-decoration-none">Maps</a></li>
                    </ul>
                </div>

                <!-- Kolom 3: Social Media -->
                <div class="col-md-3 mb-4">
                    <h3 class="mb-3">Contact Us</h3>
                    <div class="d-flex justify-content-center">
                        <a href="https://instagram.com/tengananvillage" class="btn btn-outline-light me-2" aria-label="Instagram">
                            <i class='bx bxl-instagram-alt'></i>
                        </a>
                        <a href="https://twitter.com/tengananvillage" class="btn btn-outline-light me-2" aria-label="Twitter">
                            <i class='bx bxl-twitter'></i>
                        </a>
                        <a href="https://facebook.com/tengananvillage" class="btn btn-outline-light me-2" aria-label="Facebook">
                            <i class='bx bxl-facebook'></i>
                        </a>
                        <a href="https://youtube.com/tengananvillage" class="btn btn-outline-light me-2" aria-label="YouTube">
                            <i class='bx bxl-youtube'></i>
                        </a>
                        <a href="https://wa.me/1234567890" class="btn btn-outline-light" aria-label="WhatsApp">
                            <i class='bx bxl-whatsapp'></i>
                        </a>
                    </div>
                </div>

                <!-- Kolom 4: Visit Us -->
                <div class="col-md-3 mb-4">
                    <h3 class="mb-3">Visit Us</h3>
                    <p>Jl. Tenganan, Karangasem, Bali</p>
                    <p>Open Daily: 8 AM - 6 PM</p>
                </div>
            </div>

             <!-- Garis Pemisah -->
            <hr class="border-secondary">


            <!-- Footer Bottom -->
            <footer class="footer-bottom">
                <p>&copy; 2025 Tenganan Village | All Rights Reserved.</p>
            </footer>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @stack('js')
    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>


