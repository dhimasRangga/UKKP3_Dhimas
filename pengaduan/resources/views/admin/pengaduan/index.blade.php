@extends('layouts.app')
@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card shadow p-4 border-danger">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Nama Costumer</th>
                        <th>Keluhan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengaduans as $index => $p)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $p->kategori->nama_kategori ?? '-' }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->keluhan }}</td>
                        <td>
                            <!-- Tombol Detail mengarah ke rute admin -->
                            <a href="{{ route('admin.pengaduan.show', $p->id) }}" class="btn btn-sm btn-info">
                                Detail & Foto
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection