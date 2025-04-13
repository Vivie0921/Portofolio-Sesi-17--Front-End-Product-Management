<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Produk') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
      
        <!-- Tombol Tambah Kategori -->
        <div class="d-flex justify-content-start mb-3">
            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahKategoriModal">
                + Tambah Produk
            </button>
        </div>
      
        <!-- Tabel Kategori -->
        <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Stok</th>
              <th>Harga</th>
              <th>Gambar</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Headphone WH-1000XM5</td>
              <td>Noise cancelling terbaik dengan dua prosesor <br>berkinerja tinggi dan delapan mikrofon</td>
              <td>10</td>
              <td>Rp 5.000.000</td>
              <td><img src="https://www.sony.co.id/image/6145c1d32e6ac8e63a46c912dc33c5bb?fmt=pjpeg&wid=220&bgcolor=FFFFFF&bgc=FFFFFF" alt="headphone"></td>
              <td>
                <button class="btn btn-warning btn-sm me-1">Edit</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
</x-app-layout>



