<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-10">
        <div class="bg-white p-6 rounded-lg shadow-md">

            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf

                <!-- Nama Produk -->
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" id="nama" name="nama" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Deskripsi -->
                <div>
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>

                <!-- Stok -->
                <div>
                    <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
                    <input type="number" id="stok" name="stok" min="0" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Harga -->
                <div>
                    <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                    <input type="number" id="harga" name="harga" min="0" step="0.01" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Gambar -->
                <div>
                    <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar Produk</label>
                    <input type="file" id="gambar" name="gambar" accept="image/*" required
                        class="mt-1 block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4
                        file:rounded-md file:border-0 file:text-sm file:font-semibold
                        file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </div>

                <!-- Kategori -->
                <div>
                    <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori Produk</label>
                    <select id="kategori" name="kategori" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option disabled selected>Pilih Kategori</option>
                        <option value="1">Headphone</option>
                        <option value="2">Laptop</option>
                        <option value="3">Keyboard</option>
                    </select>
                </div>

                <!-- Tombol Submit -->
                <div class="pt-4">
                    <button type="submit"
                        class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-200">
                        Tambah Produk
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
