@extends('layouts.ready.main')

@section('konten')
<div class="card">
    <div class="card-header">
        <div class="card-title">Tabel Data Alternatif</div>
	</div>
    <div class="card-body">
        <div class="d-flex justify-content-end">
            <a href="{{ route('alternatifs.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Kode Alternatif</th>
            <th>Nama Alternatif</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $tampil as $item )       
        <tr>
            <td>{{$item ->kode_alternatif}}</td>
            <td>{{$item ->nama_alternatif}}</td> 
            <td>
                <a href="{{ route('alternatifs.edit', $item->kode_alternatif) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('alternatifs.destroy', $item->kode_alternatif) }}" method="POST" style="display: inline-block;">
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