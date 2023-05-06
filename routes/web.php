<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProvinsiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return "halo Semua";
});

Route::get(
    '/mahasiswa/{nama}',
    function ($nama) {
        echo "<h2>Nama saya $nama</h2>";
    }
);

Route::get(
    '/profil/{nama?}/{pekerjaan?}',
    function ($nama = "Ribka", $pekerjaan = "Makan Tidur") {
        echo "<h2>Nama saya $nama, pekerjaan $pekerjaan";
    }
);

//route view
Route::get('/dosen', function () {
    return view('dosen');
});

Route::get('/jadwal', function () {
    return view('jadwal.index');
    //jadwal => folder
    //index => index.blade.php
});

//Route::get(
//    '/fakultas',
//    function () {
//        return view('fakultas.index')->with('fakultas', ["FIKR", "FEB"]);
//    }
//);

Route::resource('fakultas', FakultasController::class);

Route::resource('provinsi', ProvinsiController::class);