@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-8 bg-white p-4 rounded shadow">

    {{-- Judul --}}
    <h2 class="text-xl font-bold mb-4">Tentang Toko</h2>

    {{-- Deskripsi --}}
    <div class="mb-4">
        <h4 class="font-semibold text-gray-700">Deskripsi</h4>
        <p class="text-sm text-gray-800 mt-1">{{ $toko->deskripsi ?? '-' }}</p>
    </div>

    {{-- Lokasi --}}
    <div class="mb-4">
        <h4 class="font-semibold text-gray-700">Lokasi</h4>
        <p class="text-sm text-gray-800 mt-1">{{ $toko->lokasi ?? '-' }}</p>
    </div>

    {{-- Kategori --}}
    <div class="mb-4">
        <h4 class="font-semibold text-gray-700">Kategori</h4>
        <div class="flex flex-wrap gap-2 mt-1">
            @foreach(explode(',', $toko->kategori ?? '') as $kategori)
                <span class="bg-gray-200 text-xs px-2 py-1 rounded">{{ $kategori }}</span>
            @endforeach
        </div>
    </div>

    {{-- Kontak --}}
    <div class="mb-4">
        <h4 class="font-semibold text-gray-700">Kontak</h4>
        <p class="text-sm text-gray-800 mt-1">{{ $toko->kontak ?? '-' }}</p>
    </div>

    {{-- Jam Operasional --}}
    <div>
        <h4 class="font-semibold text-gray-700">Jam Operasional</h4>
        <p class="text-sm text-gray-800 mt-1">{{ $toko->jam_operasional ?? '-' }}</p>
    </div>

</div>
@endsection
