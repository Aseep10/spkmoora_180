<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    // Menampilkan daftar kriteria
    public function index()
    {
        $tampil = Kriteria::all();
        return view('kriteria.data_kriteria', compact('tampil'));
    }

    // Menampilkan form untuk menambahkan kriteria baru
    public function create()
    {
        return view('kriteria.createKriteria'); // Mengarahkan ke view form create
    }

    // Menyimpan kriteria baru ke database
    public function store(Request $request)
    {
        // Validasi data dari form
        $validated = $request->validate([
            'kode_kriteria' => 'required|unique:tb_kriteria,kode_kriteria|max:20',
            'nama_kriteria' => 'required|max:50',
            'bobot' => ['required', 'regex:/^\d+([,.]\d{1,2})?$/'],
            'atribut' => 'required|in:cost,benefit',
        ]);

        // Konversi koma ke titik
        $validated['bobot'] = str_replace(',', '.', $validated['bobot']);


        // Menyimpan data kriteria
        Kriteria::create($validated);

        // Mengarahkan kembali dengan pesan sukses
        return redirect()->route('kriterias.index')->with('success', 'Kriteria berhasil ditambahkan.');
    }


    // Menampilkan form untuk mengedit kriteria
    public function edit(Kriteria $kriteria)
    {
        return view('kriteria.updateKriteria', compact('kriteria')); // Mengarahkan ke form edit
    }

    // Memperbarui kriteria di database
    public function update(Request $request, Kriteria $kriteria)
    {
        // Validasi data dari form
        // Validasi data dari form
        $validated = $request->validate([
            'kode_kriteria' => 'required|unique:tb_kriteria,kode_kriteria|max:20',
            'nama_kriteria' => 'required|max:50',
            'bobot' => ['required', 'regex:/^\d+([,.]\d{1,2})?$/'],
            'atribut' => 'required|in:cost,benefit',
        ]);

        // Konversi koma ke titik
        $validated['bobot'] = str_replace(',', '.', $validated['bobot']);

        // Update data kriteria
        $kriteria->update($validated);

        return redirect()->route('kriterias.index')->with('success', 'Kriteria berhasil diperbarui.');
    }

    // Menghapus kriteria
    public function destroy(Kriteria $kriteria)
    {
        $kriteria->delete(); // Menghapus data kriteria
        return redirect()->route('kriterias.index')->with('success', 'Kriteria berhasil dihapus.');
    }
}
