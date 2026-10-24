<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengaduans = Pengaduan::with('kategori')->latest()->get();
        return view('admin.pengaduan.index', compact('pengaduans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $kategoris = Kategori::all(); // Ambil semua data kategori dari database
        return view('pengaduan.create', compact('user', 'kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required|exists:kategoris,id', // Validasi harus ada di tabel kategoris
            'keluhan'     => 'required|string',
            'foto'        => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('pengaduan', 'public');
        }

        $user = Auth::user();

        Pengaduan::create([
            'kategori_id' => $request->kategori_id,
            'nama'        => $user->name,
            'email'       => $user->email,
            'no_telp'     => $user->no_telepon,
            'keluhan'     => $request->keluhan,
            'foto'        => $fotoPath,
        ]);

        return redirect()->route('dashboard')->with('success', 'Pengaduan berhasil dikirim!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(pengaduan $pengaduan)
    {
        return view('admin.pengaduan.show', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengaduan $pengaduan)
    {
        //
    }
}
