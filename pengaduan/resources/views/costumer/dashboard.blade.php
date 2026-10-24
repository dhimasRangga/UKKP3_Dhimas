@extends('layouts.app')

@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card shadow p-4 border-danger">
            <h2 class="text-primary">Dashboard Costumer</h2>
            <div class="primary mt-3">
                Selamat datang, <strong>{{ $user->name }}</strong>
                <br>No. Telepon: {{ $user->no_telepon }}
            </div>
            <div>apakah ada keluhan? jika ada silakan<a href="{{ route('pengaduan.create') }}"> pengaduan</a></div>
        </div>
    </div>
</div>
@endsection