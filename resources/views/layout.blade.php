<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background-color: #2ac4b1; /* Warna sesuai gambar */
            padding: 60px 0;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .product-card img {
            height: 200px;
            object-fit: cover;
        }
        .product-price {
            color: #28a745;
            font-weight: bold;
        }
    </style>
</head>

<body class="bg-light">

    @include('navbar')
    <div style="min-height: 80vh">
    @yield('content')
    </div>
    <x-footer></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
