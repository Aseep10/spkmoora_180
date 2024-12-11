@extends('layouts.ready.main')

@section('konten')
<div class="card">
    <div class="card-header">
        <div class="card-title">Tabel Data Kriteria</div>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-end">
            <a href="{{ route('kriterias.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
    <div class="card-body">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Kode Kriteria</th>
                    <th>Nama Kriteria</th>
                    <th>Bobot</th>
                    <th>Atribut</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            <tbody>
                @foreach ( $tampil as $item )
                <tr>
                    <td>{{$item -> kode_kriteria }}</td>
                    <td>{{$item -> nama_kriteria}}</td>
                    <td>{{$item -> bobot}}</td>
                    <td>{{$item -> atribut}}</td>
                    <td>
                        <a href="{{ route('kriterias.edit', $item->kode_kriteria) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kriterias.destroy', $item->kode_kriteria) }}" method="POST" style="display: inline-block;">
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