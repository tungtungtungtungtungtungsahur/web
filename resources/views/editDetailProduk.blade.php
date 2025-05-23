@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 500px;">
    <h3 class="mb-4">Edit Produk</h3>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form id="produkForm" action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3 d-flex gap-2">
            @if($produk->foto)
                <div>
                    <img src="{{ asset('storage/' . $produk->foto) }}" alt="Foto Produk" width="80" height="80" style="object-fit: cover; border-radius: 5px;">
                </div>
            @endif
            <div>
                <input type="file" name="foto" class="form-control" style="width: 120px;">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $produk->nama) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ old('harga', $produk->harga) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="3">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="kategori" class="form-select" required>
                <option value="Fashion" {{ old('kategori', $produk->kategori) == 'Fashion' ? 'selected' : '' }}>Fashion</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Kondisi</label>
            <select name="kondisi" class="form-select" required>
                <option value="Baru" {{ old('kondisi', $produk->kondisi) == 'Baru' ? 'selected' : '' }}>Baru</option>
                <option value="Bekas" {{ old('kondisi', $produk->kondisi) == 'Bekas' ? 'selected' : '' }}>Bekas</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="form-label">Style</label>
            <select name="style" class="form-select" required>
                <option value="Other" {{ old('style', $produk->style) == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>

        {{-- Tombol simpan dengan loading --}}
        <button type="submit" id="btnSimpan" class="btn btn-primary w-100">
            <span id="btnText">💾 Simpan Perubahan</span>
            <span id="btnLoading" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
        </button>
    </form>
</div>

{{-- Script Loading --}}
<script>
    document.getElementById('produkForm').addEventListener('submit', function () {
        const btn = document.getElementById('btnSimpan');
        const text = document.getElementById('btnText');
        const spinner = document.getElementById('btnLoading');

        btn.disabled = true;
        text.textContent = 'Menyimpan...';
        spinner.classList.remove('d-none');
    });
</script>
@endsection
