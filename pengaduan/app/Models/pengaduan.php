<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduans';

    protected $fillable = [
        'kategori_id',
        'nama',
        'email',
        'no_telp',
        'keluhan',
        'foto',
    ];

    // Relasi ke tabel Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
