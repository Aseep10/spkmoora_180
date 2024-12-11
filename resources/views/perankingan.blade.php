@extends('layouts.ready.main')

@section('konten')
<div class="card">
    <div class="card-header">
        <div class="card-title">Tabel Perangkingan</div>
	</div>
    <div class="card-body">
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Kode Alternatif</th>
            <th>Nilai Max</th>
            <th>Nilai Min</th>
            <th>Nilai Yi</th>
            <th>Rank</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ranking as $item)
        
        
        <tr>
            <td>{{$item ->kode_alternatif}}</td>
            <td>{{$item ->nilai_max}}</td>
            <td>{{$item ->nilai_min}}</td>
            <td>{{$item ->Yi}}</td>
            <td>{{$item ->peringkat}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
    </div>
@endsection
@push('javascript')
@endpush