<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'TechHunt')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark mb-4 fw-bold">
        <div class="container">
            <a class="navbar-brand" href="#">TechHunt Product</a>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center py-4 mt-5 text-muted">
        &copy; {{ date('Y') }} My Shop TechHunt
    </footer>

</body>
</html>
