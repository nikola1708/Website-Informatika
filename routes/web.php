<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('beranda/beranda');
})->name('home');

Route::get('/beranda', function () {
    return view('beranda/beranda');
})->name('home');

Route::get('/lain', function () {
    return view('lain-lainnya/lain');
});

Route::get('/pendidikan', function () {
    return view('pendidikan/pendidikan');
});

Route::get('/profil', function () {
    return view('profil/profil');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa/mhs');
});

Route::get('/riset', function () {
    return view('riset/riset');
});

Route::get('/admin', function () {
    return view('admin/beranda/index');
});

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);