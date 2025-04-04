@extends('layout')
@section('title','TechHunt E-Commerce')
@section('content')
    <!-- Hero Section -->
    <section class="hero d-flex align-items-center text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 ">
                    <h1 class="fw-bold mb-3">Selamat Datang di <span class="text-white">TechHunt!</span></h1>
                    <p class="fs-4  mb-4">Temukan produk terbaik dengan harga terjangkau</p>
                </div>
                <div class="col-md-6 text-end">
                    <img src="{{ asset("images/smarttv.png") }}" alt="Bannner" class="img-fluid w-75 rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Produk Grid -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Katalog Produk</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            <!-- Produk 1 -->
            <div class="col">
                <div class="card h-100 product-card shadow-sm">
                    <img src="{{ asset('images/headphonewireless.jpg') }}" class="card-img-top" style="height: 300px; object-fit: cover;" alt="Headphone Wireless">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Headphone Wireless</h5>
                        <p class="product-price fs-4">Rp 200.000</p>
                        <p class="card-text">Headphone wireless adalah perangkat audio yang tidak menggunakan kabel, melainkan menggunakan frekuensi radio atau Bluetooth untuk mengirimkan sinyal suara.</p>
                        <a href="#" class="btn btn-outline-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- Produk 2 -->
            <div class="col">
                <div class="card h-100 product-card shadow-sm">
                    <img src="{{ asset('images/keyboardmechanical.jpg') }}" class="card-img-top" style="height: 300px; object-fit: cover;" alt="Keyboard Mechanical">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Keyboard Mechanical</h5>
                        <p class="product-price fs-4">Rp 550.000</p>
                        <p class="card-text">Keyboard mekanik adalah keyboard yang menggunakan saklar fisik di bawah setiap tombol. Saklar ini terdiri dari pegas, batang, dan kontak elektrik. Saat ditekan, saklar akan aktif dan menghasilkan suara "klik".</p>
                        <a href="#" class="btn btn-outline-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- Produk 3 -->
            <div class="col">
                <div class="card h-100 product-card shadow-sm">
                    <img src="{{ asset('images/mousegaming.jpg') }}" class="card-img-top" style="height: 300px; object-fit: cover;" alt="Mouse Gaming">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Mouse Gaming</h5>
                        <p class="product-price fs-4">Rp 150.000</p>
                        <p class="card-text">Mouse gaming adalah perangkat input komputer yang dirancang khusus untuk meningkatkan pengalaman bermain game.</p>
                        <a href="#" class="btn btn-outline-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
