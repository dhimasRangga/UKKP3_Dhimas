@extends('layouts.app')
@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card shadow p-4 border-danger">
            <div class="card p-1">
                <h3>Detail Pengaduan</h3>
                <p><strong>Kategori:</strong> {{ $pengaduan->kategori->nama_kategori ?? '-' }}</p>
                <p><strong>Nama:</strong> {{ $pengaduan->nama }} ({{ $pengaduan->email }})</p>
                <p><strong>No. Telp:</strong> {{ $pengaduan->no_telp }}</p>
                <p><strong>Keluhan:</strong> {{ $pengaduan->keluhan }}</p>

                <div class="mb-3">
                    <label class="fw-bold">Foto Bukti (Ukuran Penuh):</label>
                    @if($pengaduan->foto)
                        <div>
                            <img src="{{ asset('storage/' . $pengaduan->foto) }}" class="img-fluid rounded" style="max-height: 400px;">
                        </div>
                    @else
                        <p class="text-muted">Tidak ada foto dilampirkan.</p>
                    @endif
                </div>

                <a href="{{ route('admin.pengaduan.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
       </div>
    </div>
</div>
@endsection