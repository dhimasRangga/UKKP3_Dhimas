<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengaduan Costumer</title>

    <!-- Atau gunakan Bootstrap CDN jika templat Anda berbasis Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg p-4">
                    <h3 class="text-center mb-4 text-primary">Form Pengaduan Costumer</h3>
                    
                    <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Dropdown Kategori (Berelasi ke tabel kategoris) -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Kategori Kendala</label>
                            <select name="kategori_id" class="form-control" required>
                                <option value="">-- Pilih Kategori --</option>
                                @foreach($kategoris as $kat)
                                    <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Data User Otomatis (Read-only) -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" class="form-control bg-light" value="{{ $user->name }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control bg-light" value="{{ $user->email }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">No. Telepon</label>
                            <input type="text" class="form-control bg-light" value="{{ $user->no_telepon }}" readonly>
                        </div>

                        <!-- Keluhan & Foto -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Detail Keluhan</label>
                            <textarea name="keluhan" class="form-control" rows="4" required placeholder="Tuliskan keluhan Anda secara jelas..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Bukti Foto (Opsional)</label>
                            <input type="file" name="foto" class="form-control">
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary px-4">Kirim Pengaduan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>