@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto mt-8">
    {{-- Pesan sukses --}}
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form id="produkForm" action="{{ route('produk.submit') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700">Foto Produk</label>
            <input type="file" name="foto[]" multiple class="border rounded w-full p-2">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Nama Produk</label>
            <input type="text" name="nama" class="border rounded w-full p-2" placeholder="Contoh: Slingbag">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Deskripsi</label>
            <textarea name="deskripsi" rows="3" class="border rounded w-full p-2" placeholder="jual rugi, pemakaian baru 2 bulan"></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Kategori</label>
            <select name="kategori" class="border rounded w-full p-2">
                @foreach ([
                    'Fashion', 'Furniture', 'Elektronik', 'Aksesoris', 'Sepatu',
                    'Tas', 'Kosmetik', 'Perlengkapan Rumah', 'Kacamata', 'Buku', 'Lainnya'
                ] as $kategori)
                    <option value="{{ $kategori }}">{{ $kategori }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Gaya</label>
            <select name="gaya" class="border rounded w-full p-2">
                @foreach ([
                    'Batik', 'Casual', 'Formal', 'Sporty', 'Vintage',
                    'Modern', 'Minimalis', 'Lainnya'
                ] as $style)
                    <option value="{{ $style }}">{{ $style }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Kondisi</label>
            <select name="kondisi" class="border rounded w-full p-2">
                @foreach ([
                    'Baru', 'Bekas', 'Baru dengan tag', 'Bekas seperti baru'
                ] as $kondisi)
                    <option value="{{ $kondisi }}">{{ $kondisi }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Harga</label>
            <input type="number" name="harga" class="border rounded w-full p-2" placeholder="Contoh: 250000">
        </div>

        <button id="submitBtn" type="submit" class="bg-black text-white py-2 px-4 rounded w-full flex items-center justify-center">
            <span id="btnText">Submit</span>
            <svg id="loadingSpinner" class="animate-spin h-5 w-5 ml-2 hidden" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="white" stroke-width="4" fill="none" />
                <path class="opacity-75" fill="white" d="M4 12a8 8 0 018-8v8H4z" />
            </svg>
        </button>
    </form>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('produkForm').addEventListener('submit', function () {
        const btn = document.getElementById('submitBtn');
        const text = document.getElementById('btnText');
        const spinner = document.getElementById('loadingSpinner');

        btn.disabled = true;
        text.textContent = 'Loading...';
        spinner.classList.remove('hidden');
    });
</script>
@endpush
