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
    public function edit($id)
    {
        //ambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->first();
        //passing data pegawai yang didapat ke view edit.blade.php
        return view('admin.pegawai.edit', ['pegawai' => $pegawai]);
    }

    public function update(Request $request, $id)
    
    {
        //update data pegawai
        DB::table('pegawai')->where('pegawai_id', $id)->update(
            [
            'pegawai_nama' => $request->Nama,
            'pegawai_jabatan' => $request->Jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->Alamat
        ]
    );
        //alihkan halaman ke halaman pegawai
        return redirect('/pegawai')->with('success', 'Data Pegawai Berhasil Diupdate');
    }
    //delete
    public function hapus($id)
    {
        //hapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('pegawai_id', $id)->delete();

        //alihkan halaman ke halaman pegawai
        return redirect('/pegawai')->with('success', 'Data Pegawai Berhasil Dihapus');
    }

    //pencarian
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->input('txt_cari');

        // mengambil data dari table pegawai sesuai pencarian data
        $pegawai = DB::table('pegawai')
        ->where([
            ['pegawai_nama', 'like', "%".$cari."%"],
          
        ])
        ->orWhere([
            ['pegawai_jabatan', 'like', "%".$cari."%"],
        ])
        ->orWhere([
            ['pegawai_alamat', 'like', "%".$cari."%"],
        ])
        ->orWhere([
            ['pegawai_umur', 'like', "%".$cari."%"],
        ])
        ->get();

        // mengirim data pegawai ke view index
        return view('admin.pegawai.index',['pegawai' => $pegawai]);

    }
}
    