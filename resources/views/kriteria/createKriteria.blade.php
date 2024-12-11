@extends('layouts.ready.main')

@section('konten')
<div class="card rounded shadow-lg">
    <div class="card-header">
        <h1 class="card-title fw-semibold mb-4">Tambah Kriteria</h1>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-start mb-3">
            <a href="{{ route('kriterias.index') }}" class="btn btn-primary">Kembali</a>
        </div>

        <form action="{{ route('kriterias.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kode_kriteria" class="form-label">Kode Kriteria</label>
                <input type="text" name="kode_kriteria" id="kode_kriteria" class="form-control" value="{{ old('kode_kriteria') }}" required>
                @error('kode_kriteria')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
                <input type="text" name="nama_kriteria" id="nama_kriteria" class="form-control" value="{{ old('nama_kriteria') }}" required>
                @error('name_kriteria')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="bobot" class="form-label">Bobot</label>
                <input type="number" name="bobot" step="0.01" id="bobot" class="form-control" value="{{ old('bobot') }}" required>
                @error('bobot')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="atribut" class="form-label">Atribut</label>
                <select name="atribut" id="type" class="form-control" required>
                    <option value="cost" {{ old('atribut') == 'cost' ? 'selected' : '' }}>Cost</option>
                    <option value="benefit" {{ old('atribut') == 'benefit' ? 'selected' : '' }}>Benefit</option>
                </select>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Tambah Kriteria</button>
        </form>
    </div>
</div>
@endsection