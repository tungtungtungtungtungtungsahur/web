<!-- resources/views/akun/AkunSayaSisiPenjual.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <img src="{{ asset('images/profile.jpg') }}" alt="Foto Profil" width="100" class="rounded-circle">
        <h4>putri <span class="badge bg-primary">Terverifikasi</span></h4>
        <p>@putri • Bandung</p>
    </div>

    <!-- Tab Navigasi -->
    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('akun.barang') }}">Barang</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('akun.tentang') }}">Tentang</a>
        </li>
    </ul>

    <!-- Daftar Barang -->
    <h5>4 Barang</h5>
    <div class="row">
        @foreach ($barang as $item)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ asset('images/' . $item['gambar']) }}" class="card-img-top" alt="{{ $item['nama'] }}">
                    <div class="card-body">
                        <h6 class="card-title">{{ $item['nama'] }}</h6>
                        <p class="card-text">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Edit</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
