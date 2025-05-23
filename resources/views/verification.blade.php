@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center h-screen bg-purple-50">
    <div class="text-blue-500 text-5xl mb-4">
        <i class="fas fa-id-card"></i> <!-- Ganti dengan ikon sesuai font-awesome/tailwind-icons -->
    </div>
    <h2 class="text-xl font-semibold text-gray-800 mb-2">Verifikasi KTP Diperlukan</h2>
    <p class="text-gray-600 mb-6 text-center w-64">
        Untuk dapat menjual produk, Anda perlu memverifikasi KTP terlebih dahulu.
    </p>
    <a href="{{ route('verifikasi.ktp') }}" class="bg-indigo-500 text-white px-6 py-2 rounded-full shadow-md hover:bg-indigo-600">
        Verifikasi KTP
    </a>
</div>
@endsection
