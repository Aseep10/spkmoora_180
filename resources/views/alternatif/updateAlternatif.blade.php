@extends('layouts.ready.main')

@section('konten')
<div class="card rounded shadow-lg">
    <div class="card-header">
        <h1 class="card-title fw-semibold mb-4">Update Data Alternatif</h1>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-start mb-3">
            <a href="{{ route('alternatifs.index') }}" class="btn btn-primary">Kembali</a>
        </div>
        <form action="{{ route('alternatifs.update', $alternatif->kode_alternatif) }}" method="POST">
            @csrf
            @method('PUT') <!-- Menggunakan method PUT untuk update -->

            <div class="mb-3">
                <label for="kode_alternatif" class="form-label">Kode Alternatif</label>
                <!-- Kode Alternatif hanya tampil dan tidak bisa diubah -->
                <input type="text"
                       name="kode_alternatif"
                       id="kode_alternatif"
                       class="form-control"
                       value="{{ old('kode_alternatif', $alternatif->kode_alternatif) }}"
                       readonly>
                @error('kode_alternatif')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nama_alternatif" class="form-label">Nama Alternatif</label>
                <!-- Nama Alternatif bisa diubah -->
                <input type="text"
                       name="nama_alternatif"
                       id="nama_alternatif"
                       class="form-control"
                       value="{{ old('nama_alternatif', $alternatif->nama_alternatif) }}"
                       required>
                @error('nama_alternatif')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection