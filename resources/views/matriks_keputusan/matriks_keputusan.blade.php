@extends('layouts.ready.main')

@section('konten')
<div class="card">
    <div class="card-header">
        <h1 class="card-title fw-semibold mb-4">Tabel Matriks Keputusan</h1>
	</div>
    <div class="card-body">
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('matriks_keputusan.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Kode Alternatif</th>
            <th>Kode Kriteria</th>
            <th>Value</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tampil as $item )
        <tr>
            <td>{{$item ->id}}</td>
            <td>{{$item ->kode_alternatif}}</td>
            <td>{{$item ->kode_kriteria}}</td>
            <td>{{$item ->value}}</td>
            <td>
                <a href="{{ route('matriks_keputusan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('matriks_keputusan.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus alternatif ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
    </div>
@endsection
@push('javascript')
@endpush