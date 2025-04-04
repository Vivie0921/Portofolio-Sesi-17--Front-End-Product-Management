<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'TechHunt')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">TechHunt</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('products') ? 'active' : '' }}" href="{{ url('/products-resource') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('cart') ? 'active' : '' }}" href="{{ url('/cart') }}">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
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
