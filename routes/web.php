<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;

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

Route::get('/admin/mahasiswa', function () {
    return view('admin/mahasiswa/mhs');
});

Route::get('/riset', function () {
    return view('riset/riset');
});

Route::get('/admin', function () {
    return view('admin/beranda/index');
});
//user
// user
Route::get('/daftar', [AuthController::class, 'registrationForm']);
Route::post('/daftar', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');





Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari/', [PegawaiController::class, 'cari']);


Route::get('/admin/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/admin/mahasiswa/tambah', [MahasiswaController::class, 'tambah']);
Route::post('/admin/mahasiswa/store', [MahasiswaController::class, 'store']);
Route::get('/admin/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/admin/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
Route::get('/admin/mahasiswa/hapus/{id}', [MahasiswaController::class, 'hapus']);