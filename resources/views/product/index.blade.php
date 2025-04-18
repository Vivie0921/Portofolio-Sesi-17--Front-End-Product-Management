<x-app-layout>
    <div class="bg-white p-6 rounded-lg shadow">
      <div class="flex justify-between items-center mb-4">
          <h2 class="text-xl font-semibold text-gray-800">Daftar Produk</h2>
          <a href="{{ route('product-tambah') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">+ Tambah Produk</a>
      </div>
  
      <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
              <thead class="bg-black text-white">
                  <tr>
                      <th class="px-4 py-2 text-left text-sm font-medium border-gray-300">ID</th>
                      <th class="px-4 py-2 text-left text-sm font-medium border-gray-300">Nama</th>
                      <th class="px-4 py-2 text-left text-sm font-medium border-gray-300">Deskripsi</th>
                      <th class="px-4 py-2 text-left text-sm font-medium border-gray-300">Stok</th>
                      <th class="px-4 py-2 text-left text-sm font-medium border-gray-300">Harga</th>
                      <th class="px-4 py-2 text-left text-sm font-medium border-gray-300">Gambar</th>
                      <th class="px-4 py-2 text-left text-sm font-medium border-gray-300">Aksi</th>
                  </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($product as $produk)
                <tr>
                    <td class="px-4 py-2 border border-gray-300 text-sm">{{ $produk->id }}</td>
                    <td class="px-4 py-2 border border-gray-300 text-sm break-words">{{ $produk->name }}</td>
                    <td class="px-4 py-2 border border-gray-300 text-sm break-words max-w-xs">{{ $produk->description }}</td>
                    <td class="px-4 py-2 border border-gray-300 text-sm">{{ $produk->stock }}</td>
                    <td class="px-4 py-2 border border-gray-300 text-sm">Rp {{ number_format($produk->price, 0, ',', '.') }}</td>
                    <td class="px-4 py-2 border border-gray-300">
                        <img src="{{ $produk->image }}" class="w-60 h-60 object-cover rounded" alt="{{ $produk->name }}">
                    </td>
                    <td class="px-4 py-2 border border-gray-300">
                        <div class="flex flex-col sm:flex-row sm:space-x-2 space-y-2 sm:space-y-0 w-full">
                            <!-- Tombol Edit -->
                            <a href="{{ route('product.edit', $produk->id) }}" class="flex items-center justify-center gap-1 bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M11 5h2M12 7v2m-6.586 5.586a2 2 0 000 2.828l2.828 2.828a2 2 0 002.828 0L19.414 12a2 2 0 000-2.828l-2.828-2.828a2 2 0 00-2.828 0L5.414 14.586z" />
                                </svg>
                                Edit
                            </a>
            
                            <!-- Tombol Hapus -->
                            <button onclick="confirmDelete({{ $produk->id }})"
                                class="flex items-center justify-center gap-1 bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                Hapus
                            </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
      </div>
  </div>

     <!-- Modal Konfirmasi Hapus -->
    <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-lg font-semibold text-gray-800 mb-2">Hapus Produk?</h2>
        <p class="text-sm text-gray-600 mb-4">Apakah kamu yakin ingin menghapus produk ini?</p>
        <div class="flex justify-end space-x-2">
            <button onclick="hideModal()" class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300">Batal</button>
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 rounded bg-red-500 text-white hover:bg-red-600">Hapus</button>
            </form>
        </div>
    </div>
</div> 

  
  <!-- Script JS Modal -->
  <script>
    function confirmDelete(id) {
        const modal = document.getElementById('deleteModal');
        const form = document.getElementById('deleteForm');
        form.action = `/productT/hapus/${id}`;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
  
    function hideModal() {
        const modal = document.getElementById('deleteModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
  </script>
</x-app-layout>



