<?php

namespace App\Http\Controllers;

use App\Models\Matriks_Keputusan;
use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatriksKeputusanController extends Controller
{
    public function index()
    {
        $tampil = Matriks_Keputusan::all();
        return view('matriks_keputusan.matriks_keputusan', compact('tampil'));
    }

    // Menampilkan form untuk menambahkan kriteria baru
    public function create()
    {
        $alternatifs = Alternatif::all();
        $kriterias = Kriteria::all();
        return view('matriks_keputusan.createMatriksKeputusan', compact('alternatifs', 'kriterias')); // Mengarahkan ke view form create
    }

    // Menyimpan kriteria baru ke database
    public function store(Request $request)
    {
        // Validasi data dari form
        $validated = $request->validate([
            'kode_alternatif' => 'required|exists:tb_alternatif,kode_alternatif',
            'kode_kriteria' => 'required|exists:tb_kriteria,kode_kriteria',
            'value' => 'required|numeric'
        ]);

        // Menyimpan data kriteria
        Matriks_Keputusan::create($validated);

        // Mengarahkan kembali dengan pesan sukses
        return redirect()->route('matriks_keputusan.index')->with('success', 'Matriks berhasil ditambahkan.');
    }


    // Menampilkan form untuk mengedit kriteria
    public function edit(Matriks_Keputusan $matriks_keputusan)
    {
        return view('matriks_keputusan.updateMatriksKeputusan', compact('matriks_keputusan')); // Mengarahkan ke form edit
    }

    // Memperbarui kriteria di database
    public function update(Request $request, Matriks_Keputusan $matriks_keputusan)
    {
        $validated = $request->validate([
            'kode_alternatif' => 'required|exist:tb_alternatif,kode_alternatif',
            'nama_kriteria' => 'required|exist:tb_kriteria,kode_kriteria',
            'value' => 'required|numeric'
        ]);

        // Update data kriteria
        $matriks_keputusan->update($validated);

        return redirect()->route('matriks_keputusan.index')->with('success', 'Matriks berhasil diperbarui.');
    }

    // Menghapus kriteria
    public function destroy(Matriks_Keputusan $matriks_keputusan)
    {
        $matriks_keputusan->delete(); // Menghapus data kriteria
        return redirect()->route('matriks_keputusan.index')->with('success', 'Matriks berhasil dihapus.');
    }
}
