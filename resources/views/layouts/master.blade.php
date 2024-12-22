<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenganan Village</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Visit Now</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Maps</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Sign Up</a></li>
            </ul>
        </nav>
    </header>


   <!-- Main Content -->
    <main class="container py-4">
        @yield('content')
    </main>


    <footer>
        <p>&copy; 2023 Tenganan Village. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @stack('js')
</body>
</html>
