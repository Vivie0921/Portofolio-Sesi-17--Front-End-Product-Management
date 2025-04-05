@extends('layout')
@section('title','TechHunt E-Commerce')
@section('content')

<style>
    .thumbnail_product {
        background-position: center;
        background-size: cover;
        height: 400px;
        width: 100%;
    }
</style>

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
            <!-- Produk -->
            @foreach ($products as $product )
            <div class="col-md-4 col-sm-6">
                <div class="card h-100 product-card shadow-sm">
                    <div class = "thumbnail_product" style="background-image: url({{ $product->image }});"></div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="product-price fs-4">{{ $product->price }}</p>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="#" class="btn btn-outline-primary mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row mt-4">
            <div class="col-12">
                {{ $products->links() }}
            </div>
        </div>

    </div>

@endsection
