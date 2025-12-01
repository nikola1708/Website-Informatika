<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class MahasiswaController extends Controller
{
     //index view
    public function index()
    {
        //seelect * from mahasiswa buat ambil data dari table mahasiswa
        $mahasiswa =DB::table('mahasiswa')->get();

        return view('admin.mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    //add 
    public function tambah()
    {
        return view('admin.mahasiswa.tambah');
    }

    //save
    public function store(Request $request)
    {
        //insert data ke table mahasiswa
        DB::table('mahasiswa')->insert(
            [
            'mahasiswa' => $request->Nama,
            'prodi' => $request->Prodi,
            'nim' => $request->nim,
        ]
    );
        //alihkan halaman ke halaman mahasiswa
        return redirect('/admin/mahasiswa');
    }

    //update edit
    public function edit($id)
    {
        //ambil data mahasiswa berdasarkan id yang dipilih
        $mahasiswa = DB::table('mahasiswa')->where('mahasiswa_id', $id)->first();
        //passing data mahasiswa yang didapat ke view edit.blade.php
        return view('admin.mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request, $id)
    
    {
        //update data mahasiswa
        DB::table('mahasiswa')->where('mahasiswa_id', $id)->update(
            [
            'mahasiswa' => $request->Nama,
            'prodi' => $request->Prodi,
            'nim' => $request->nim,
        ]
    );
        //alihkan halaman ke halaman mahasiswa
        return redirect('/admin/mahasiswa')->with('success', 'Data mahasiswa Berhasil Diupdate');
    }
    //delete
    public function hapus($id)
    {
        //hapus data mahasiswa berdasarkan id yang dipilih
        DB::table('mahasiswa')->where('mahasiswa_id', $id)->delete();

        //alihkan halaman ke halaman mahasiswa
        return redirect('/admin/mahasiswa')->with('success', 'Data mahasiswa Berhasil Dihapus');
    }
}
