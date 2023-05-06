@extends('layout.master')
@section('judul_halaman', 'Halaman provinsi')
    
@section('content')
<h2>Provinsi</h2>
Ini adalah halaman provinsi
<table class="table table-stried">
    <thead>
        <tr>
            <th>Nama Provinsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($provinsi as $item)
        <tr>
            <td>{{ $item['nama_provinsi'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection