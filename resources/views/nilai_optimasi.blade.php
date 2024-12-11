@extends('layouts.ready.main')

@section('konten')
<div class="card">
    <div class="card-header">
        <div class="card-title">Tabel Nilai Optimasi</div>
	</div>
    <div class="card-body">
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Kode Alternatif</th>
            <th>Kode Kriteria</th>
            <th>Nilai Optimasi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($optimasi as $item)
        
        
        <tr>
            <td>{{$item ->kode_alternatif}}</td>
            <td>{{$item ->kode_kriteria}}</td>
            <td>{{$item ->nilai_bobot}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
    </div>
@endsection
@push('javascript')
@endpush