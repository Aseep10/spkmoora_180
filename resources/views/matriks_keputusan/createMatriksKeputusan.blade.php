@extends('layouts.ready.main')

@section('konten')
<div class="card rounded shadow-lg">
    <div class="card-header">
        <h1 class="card-title fw-semibold mb-4">Tambah Data Matriks Keputusan</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('matriks_keputusan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kode_alternatif" class="form-label">Kode Alternatif</label>
                <select name="kode_alternatif" id="kode_alternatif" class="form-control" required>
                    @foreach ($alternatifs as $alternatif)
                    <option value="{{ $alternatif->kode_alternatif }}">{{ $alternatif->kode_alternatif }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="kode_kriteria" class="form-label">Kode Kriteria</label>
                <select name="kode_kriteria" id="kode_kriteria" class="form-control" required>
                    @foreach ($kriterias as $kriteria)
                    <option value="{{ $kriteria->kode_kriteria }}">{{ $kriteria->kode_kriteria }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="value" class="form-label">Value</label>
                <input type="number" name="value" id="value" class="form-control" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection