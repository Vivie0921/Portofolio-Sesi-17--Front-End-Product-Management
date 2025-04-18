<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Kategori Produk') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-10">
        <div class="bg-white p-6 rounded-lg shadow-md">

            <form action="{{ route('product-category.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf

                <!-- Nama Kategori Produk -->
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Kategori Produk</label>
                    <input type="text" id="nama" name="nama" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
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
