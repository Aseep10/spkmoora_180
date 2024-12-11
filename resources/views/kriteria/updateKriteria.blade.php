@extends('layouts.ready.main')

@section('konten')
<div class="card rounded shadow-lg">
    <div class="card-header">
        <h1 class="card-title fw-semibold mb-4">Edit Kriteria</h1>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-start mb-3">
            <a href="{{ route('kriterias.index') }}" class="btn btn-primary">Kembali</a>
        </div>
        <form action="{{ route('kriterias.update', $kriteria->kode_kriteria) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="kode_kriteria" class="form-label">Kode Kriteria</label>
                <input type="text" name="kode_kriteria" id="kode_kriteria" class="form-control" value="{{ $kriteria->kode_kriteria }}" readonly>
            </div>

            <div class="mb-3">
                <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
                <input type="text" name="nama_kriteria" id="nama_kriteria" class="form-control" value="{{ old('nama_kriteria', $kriteria->nama_kriteria) }}" required>
            </div>

            <div class="mb-3">
                <label for="bobot" class="form-label">Bobot</label>
                <input type="number" name="bobot" step="0.01" id="bobot" class="form-control" value="{{ old('bobot', $kriteria->bobot) }}" required>
            </div>

            <div class="mb-3">
                <label for="atribut" class="form-label">Atribut</label>
                <select name="atribut" id="atribut" class="form-control" required>
                    <option value="cost" {{ old('atribut', $kriteria->type) == 'cost' ? 'selected' : '' }}>Cost</option>
                    <option value="benefit" {{ old('atribut', $kriteria->type) == 'benefit' ? 'selected' : '' }}>Benefit</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Kriteria</button>
        </form>
    </div>
</div>
@endsection