<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    // Menampilkan daftar alternatif
    public function index()
    {
        $tampil = Alternatif::all();
        return view('alternatif.data_alternatif', compact('tampil'));
    }

    // Menampilkan form untuk menambahkan alternatif baru
    public function create()
    {
        return view('alternatif.createAlternatif');
    }

    // Menyimpan alternatif baru ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_alternatif' => 'required|unique:tb_alternatif,kode_alternatif|max:10',
            'nama_alternatif' => 'required|max:50',
        ]);

        Alternatif::create($validated);

        return redirect()->route('alternatifs.index')->with('success', 'Alternatif berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit alternatif
    public function edit(Alternatif $alternatif)
    {
        return view('alternatif.updateAlternatif', compact('alternatif'));
    }

    // Memperbarui alternatif di database
    public function update(Request $request, Alternatif $alternatif)
    {
        // Validasi hanya untuk nama_alternatif, kode_kriteria tidak perlu divalidasi karena tidak bisa diubah
        $validated = $request->validate([
            'nama_alternatif' => 'required|max:50',
        ]);

        // Update hanya kolom nama_alternatif
        $alternatif->update([
            'nama_alternatif' => $validated['nama_alternatif']
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('alternatifs.index')->with('success', 'Alternatif berhasil diperbarui.');
    }


    // Menghapus alternatif
    public function destroy(Alternatif $alternatif)
    {
        $alternatif->delete();
        return redirect()->route('alternatifs.index')->with('success', 'Alternatif berhasil dihapus.');
    }
}