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


</head>
<body>
    <header>
    <nav class="navbar">
        <div class="navbar-container">
            <div class="logo">
                <img src="{{ asset('images/file.png') }}" alt="Tenganan Village Logo">
                <span>TENGANAN VILLAGE</span>
            </div>

            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Book</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Maps</a></li>
            </ul>

            <div class="auth-buttons">
                <a href="#" class="login-btn">Login</a>
                <a href="#" class="signup-btn">Sign Up</a>
            </div>
        </div>
    </nav>
    </header>

   <!-- Main Content -->
    <main class="container-fluid">
        @yield('content')
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <img src="{{ asset('images/file.png') }}" alt="Tenganan Village Logo">
                <h3>Tenganan Village</h3>
            </div>
            <div class="footer-social-media">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="https://instagram.com/tengananvillage"><i class='bx bxl-instagram-alt' ></i></a>
                    <a href="https://twitter.com/tengananvillage"><i class='bx bxl-twitter' ></i></a>
                    <a href="https://facebook.com/tengananvillage"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://youtube.com/tengananvillage"><i class='bx bxl-youtube' ></i></a>
                </div>
            </div>
            <div class="footer-visit-us">
                <h3>Visit Us</h3>
                <p>Jl. Tenganan, Bali, Indonesia</p>
                <p>Open Daily: 8 AM - 6 PM</p>
            </div>
        </div>
    </footer>
    <footer class="footer-bottom">
        <p>&copy; 2023 Tenganan Village | All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @stack('js')
    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</body>
</html>


