<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    //index view
    public function index()
    {
        //seelect * from pegawai buat ambil data dari table pegawai
        $pegawai =DB::table('pegawai')->get();

        return view('admin.pegawai.index', ['pegawai' => $pegawai]);
    }

    //add 
    public function tambah()
    {
        return view('admin.pegawai.tambah');
    }

    //save
    public function store(Request $request)
    {
        //insert data ke table pegawai
        DB::table('pegawai')->insert(
            [
            'pegawai_nama' => $request->Nama,
            'pegawai_jabatan' => $request->Jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->Alamat
        ]
    );
        //alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    //update edit

    //delete
}
