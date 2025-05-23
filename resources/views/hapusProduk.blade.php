<!-- Modal Konfirmasi Hapus Produk -->
<div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-lg w-11/12 max-w-sm p-6 text-center">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Hapus Produk</h2>
        <p class="text-gray-600 mb-6">Apakah Anda yakin ingin menghapus produk ini?</p>
        
        <div class="flex justify-end gap-4">
            <a href="{{ route('produk.index') }}" class="text-purple-600 font-semibold">Batal</a>
            <form action="{{ route('produk.destroy', $produk->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-purple-600 font-semibold">Hapus</button>
            </form>
        </div>
    </div>
</div>
