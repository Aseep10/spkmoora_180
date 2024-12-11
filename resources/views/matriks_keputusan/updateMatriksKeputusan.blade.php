@extends('layouts.ready.main')

@section('konten')
<div class="card rounded shadow-lg">
    <div class="card-header">
        <h1 class="card-title fw-semibold mb-4">Edit Data Matriks</h1>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-start mb-3">
            <a href="{{ route('matriks_keputusan.index') }}" class="btn btn-primary">Kembali</a>
        </div>
        <form action="{{ route('matriks_keputusan.update', $matriks_keputusan->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Pastikan ini digunakan untuk mengubah metode POST ke PUT -->

            <div class="mb-3">
                <label for="kode_alternatif" class="form-label">Kode Alternatif</label>
                <!-- Menampilkan kode alternatif sebagai read-only -->
                <input type="text" name="kode_alternatif" id="kode_alternatif" class="form-control" value="{{ $matriks_keputusan->kode_alternatif }}" readonly>
            </div>

            <div class="mb-3">
                <label for="kode_kriteria" class="form-label">Kode Kriteria</label>
                <!-- Menampilkan kode kriteria sebagai read-only -->
                <input type="text" name="kode_kriteria" id="kode_kriteria" class="form-control" value="{{ $matriks_keputusan->kode_kriteria }}" readonly>
            </div>

            <div class="mb-3">
                <label for="value" class="form-label">Nilai</label>
                <!-- Pastikan nilai dapat diubah dan menggunakan nilai default dari data -->
                <input type="number" name="value" id="value" class="form-control" value="{{ old('value', $matriks_kkeputusan->value) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection