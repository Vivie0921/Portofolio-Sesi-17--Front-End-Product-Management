<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Konfirmasi Hapus Kategori') }}
        </h2>
    </x-slot>

    <div class="max-w-xl mx-auto mt-10">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <p class="text-gray-700 mb-4">Apakah kamu yakin ingin menghapus kategori <strong>{{ $category->name }}</strong>?</p>

            <form action="{{ route('product-category.destroy', $category->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                    Ya, Hapus
                </button>
                <a href="{{ route('product-category.index') }}" class="ml-4 text-gray-700 hover:underline">
                    Batal
                </a>
            </form>
        </div>
    </div>
</x-app-layout>
