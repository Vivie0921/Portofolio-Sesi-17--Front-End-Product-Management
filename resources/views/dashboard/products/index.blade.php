@extends('layouts.app')

@section('title', 'TechHunt')

@section('content')
    <h1 class="text-center mb-4 fw-bold">TechHunt</h1>

    <div class="row">
        <!-- Produk 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Mouse Gaming</h5>
                    <img src ="{{ asset('images/mousegaming.jpg') }}" class =card-img-top style="height: 300px; object-fit: cover;" alt ='Mouse Gaming'>
                    <p class="card-price text-success fw-bold h3">Rp 650.000</p>
                    <p class="card-text">Mouse responsif dengan lampu RGB.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-auto"> Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Produk 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Keyboard Mechanical</h5>
                    <img src ="{{ asset('images/keyboardmechanical.jpg') }}" class =card-img-top style="height: 300px; object-fit: cover;" alt ='Keyboard Mechanical'>
                    <p class="card-price text-success fw-bold h3">Rp 350.000</p>
                    <p class="card-text">Keyboard dengan switch tactile dan backlight RGB.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-auto"> Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Produk 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Headphone Wireless</h5>
                    <img src ="{{ asset('images/headphonewireless.jpg') }}" class =card-img-top style="height: 300px; object-fit: cover;" alt ='headphone Wireless'>
                    <p class="card-price text-success fw-bold h3">Rp 275.000</p>
                    <p class="card-text">Headset nyaman dengan noise-cancelling dan baterai awet.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-auto"> Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
