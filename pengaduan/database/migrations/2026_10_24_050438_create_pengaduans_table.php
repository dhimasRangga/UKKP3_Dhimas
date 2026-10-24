<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('kategori_id')->constrained('kategoris')->onDelete('cascade'); // Relasi ke tabel kategoris
            $table->string('nama');     // Otomatis dari tabel users
            $table->string('email');    // Otomatis dari tabel users
            $table->string('no_telp');  // Otomatis dari tabel users
            $table->text('keluhan'); 
            $table->string('foto')->nullable(); 
            $table->timestamps(); 
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
