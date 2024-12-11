@extends('layouts.ready.main')

@section('konten')
<div class="card">
    <div class="card-header">
        <h1 class="card-title fw-semibold mb-4">Tambah Data Alternatif</h1>
    </div>
    <div class="card-body">
        <div class="'d-flex justify-content-start mb-3">
            <a href="{{route( 'alternatifs.index' )}}" class=""btn btn-primary>Kembali</a>
        </div>
        <form action="{{ route('alternatifs.store') }}" method="POST">
            @csrf
            <div class="mb-3">
            <label for="kode_alternatif" class="form-label">Kode Alternatif</label>
            <input type="text" name="kode_alternatif" id="kode_alternatif" class="form-control" value="{{ old('kode_alternatif') }}" required>
            @error('kode_alternatif')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama_alternatif" class="form-label">Nama Alternatif</label>
            <input type="text" name="nama_alternatif" id="nama_alternatif" class="form-control" value="{{ old('nama_alternatif') }}" required>
            @error('nama_alternatif')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </form>
    </div>
</div>
@endsection
@push('javascript')
@endpush