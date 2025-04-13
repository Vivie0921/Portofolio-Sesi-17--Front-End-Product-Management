<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Kategori Produk') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
      
        <!-- Tombol Tambah Kategori -->
        <div class="d-flex justify-content-start mb-3">
            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahKategoriModal">
                + Tambah Kategori
            </button>
        </div>
      
        <!-- Tabel Kategori -->
        <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Nama Kategori</th>
              <th>Jumlah Produk</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Headphone</td>
              <td>10</td>
              <td>
                <button class="btn btn-warning btn-sm me-1">Edit</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Laptop</td>
              <td>25</td>
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



