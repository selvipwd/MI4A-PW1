@extends('layout.master')
@section('judul_halaman', 'Halaman Prodi')

@section('content')
    <h2>Prodi</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Prodi</th>
                <th>Nama Fakultas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prodi as $item)
            <tr>
                <td>{{ $item['nama_prodi'] }}</td>
                <td>{{ $item['fakultas']->nama_fakultas }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
