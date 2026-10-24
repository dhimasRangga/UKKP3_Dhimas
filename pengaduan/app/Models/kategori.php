<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris'; // Sesuaikan nama tabel kategori Anda
    protected $fillable = ['nama_kategori']; // Sesuaikan nama kolom nama kategori

    public function pengaduans()
    {
        return $this->hasMany(Pengaduan::class, 'kategori_id');
    }
}