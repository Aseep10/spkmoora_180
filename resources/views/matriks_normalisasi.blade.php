@extends('layouts.ready.main')

@section('konten')
<div class="card">
    <div class="card-header">
        <div class="card-title">Matriks Normalisasi</div>
	</div>
    <div class="card-body">
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Kode Alternatif</th>
            <th>Kode Kriteria</th>
            <th>Nilai</th>
            <th>Hasil Normalisasi</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($normalisasi as $item)
        
        
        <tr>
            <td>{{$item ->kode_alternatif}}</td>
            <td>{{$item ->kode_kriteria}}</td>
            <td>{{$item ->value}}</td>
            <td>{{$item ->normalisasi}}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
    </div>
@endsection
@push('javascript')
@endpush