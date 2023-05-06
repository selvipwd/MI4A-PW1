@extends('layout.master')
@section('judul_halaman', 'Halaman Fakultas')
    
@section('content')
<h2>Fakulitas</h2>
Ini adalah halaman fakultas
<table class="table table-stried">
    <thead>
        <tr>
            <th>Nama Fakultas</th>
            <th>Dekan</th>
            <th>Wakil Dekan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fakultas as $item)
        <tr>
            <td>{{ $item['nama_fakultas'] }}</td>
             <td>{{ $item['nama_dekan'] }}</td>
              <td>{{ $item['nama_wakil_dekan'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
