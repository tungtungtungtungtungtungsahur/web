@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 500px;">
    <h4 class="mb-4">Biodata Toko</h4>

    <form action="{{ route('toko.update', $toko->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Deskripsi --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="3" required>{{ old('deskripsi', $toko->deskripsi) }}</textarea>
        </div>

        {{-- Lokasi --}}
        <div class="mb-3 d-flex justify-content-between align-items-center border-bottom py-2">
            <span>Lokasi</span>
            <span class="text-muted">{{ $toko->lokasi ?? 'Pilih Lokasi' }}</span>
        </div>

        {{-- Kategori --}}
        <div class="mb-3 d-flex justify-content-between align-items-center border-bottom py-2">
            <span>Kategori</span>
            <div>
                @foreach($toko->kategori as $kategori)
                    <span class="badge bg-secondary me-1">{{ $kategori }}</span>
                @endforeach
            </div>
        </div>

        {{-- Jam Operasional --}}
        <div class="mb-3 d-flex justify-content-between align-items-center border-bottom py-2">
            <span>Jam Operasional</span>
            <span class="text-muted">{{ $toko->jam_operasional ?? 'Belum diatur' }}</span>
        </div>

        {{-- Kontak --}}
        <div class="mb-4 d-flex justify-content-between align-items-center border-bottom py-2">
            <span>Kontak</span>
            <span class="text-muted">{{ $toko->kontak ?? '-' }}</span>
        </div>

        {{-- Tombol Simpan --}}
        <button type="submit" class="btn btn-dark w-100">Simpan</button>
    </form>
</div>
@endsection
