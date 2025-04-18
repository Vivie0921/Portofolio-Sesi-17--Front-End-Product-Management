<x-app-layout>
  <div class="bg-white p-6 rounded-lg shadow">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold text-gray-800">Daftar Kategori Produk</h2>
        <a href="{{ route('product-category-tambah') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">+ Tambah Kategori Produk</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
            <thead class="bg-black text-white">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-medium border-gray-300">ID</th>
                    <th class="px-4 py-2 text-left text-sm font-medium border-gray-300">Nama Kategori</th>
                    <th class="px-4 py-2 text-left text-sm font-medium border-gray-300">Jumlah Produk</th>
                    <th class="px-4 py-2 text-left text-sm font-medium border-gray-300">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($productCategories as $category)
                  <tr>
                      <td class="px-4 py-2 border border-gray-300 text-sm">{{ $category->id }}</td>
                      <td class="px-4 py-2 border border-gray-300 text-sm">{{ $category->name }}</td>
                      <td class="px-4 py-2 border border-gray-300 text-sm">
                          {{-- Hitung jumlah produk jika sudah ada relasi --}}
                          {{-- Contoh: $category->products->count() --}}
                          {{ $category->products_count ?? '0' }}
                      </td>
                      <td class="px-4 py-2 border border-gray-300 text-sm">
                          <div class="flex flex-col sm:flex-row sm:space-x-2 space-y-2 sm:space-y-0 w-full">
                              <!-- Tombol Edit -->
                              <a href="{{ route('product-category-edit', $category->id) }}" class="flex items-center justify-center gap-1 bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 text-sm">
                                  Edit
                              </a>
          
                              <!-- Tombol Hapus -->
                              <form method="POST" action="{{ route('product-category-hapus', $category->id) }}">
                                  @csrf
                                  @method('DELETE')
                                  <button type="button"
                                      onclick="confirmDelete({{ $category->id }})"
                                      class="flex items-center justify-center gap-1 bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">
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
      <h2 class="text-lg font-semibold text-gray-800 mb-2">Hapus Kategori?</h2>
      <p class="text-sm text-gray-600 mb-4">Apakah kamu yakin ingin menghapus kategori ini?</p>
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
      form.action = `/product/hapus/${id}`;
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




