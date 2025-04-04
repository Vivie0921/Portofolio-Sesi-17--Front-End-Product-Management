@extends('layout')
@section('title','Shopping Cart')
@section('content')

    <!-- Keranjang Belanja -->
    <div class="container py-5">
        <h2 class="mb-4 text-center">Shopping Cart</h2>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Headphone Wireless</td>
                    <td>Rp 200.000</td>
                    <td>
                        <input type="number" class="form-control" value="1" min="1">
                    </td>
                    <td>Rp 200.000</td>
                    <td>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>Keyboard Mechanical</td>
                    <td>Rp 550.000</td>
                    <td>
                        <input type="number" class="form-control" value="2" min="1">
                    </td>
                    <td>Rp 1.100.000</td>
                    <td>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Total Harga -->
        <div class="d-flex justify-content-end">
            <h4>Total: <span class="text-success">Rp 1.300.000</span></h4>
        </div>

        <!-- Tombol Checkout -->
        <div class="d-flex justify-content-end mt-3">
            <a href="#" class="btn btn-success">Lanjut ke Pembayaran</a>
        </div>
    </div>

@endsection
