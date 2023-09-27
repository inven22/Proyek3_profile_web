<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class slide1controller extends Controller
{

    public function tampil()
    {
       return view('ahmad.inforrmasi,pendidikan');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Validasi untuk data pribadi
            'nama_lengkap' => 'required',
            // Tambahkan validasi untuk data pendidikan
            'universitas' => 'required',
            'gelar' => 'required',
            'bidang_studi' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'deskripsi' => 'required',
            // Validasi untuk data pribadi yang sudah ada
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kab_kota' => 'required',
            'kode_pos' => 'required',
        ]);
    
        DB::table('cv')->insert([
            'nama_lengkap' => $request->nama_lengkap,
            'nama_panggilan' => $request->nama_panggilan,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kab_kota' => $request->kab_kota,
            'kode_pos' => $request->kode_pos,
        ]);
    
        // Simpan data pendidikan
        DB::table('cv')->insert([
            'universitas' => $request->universitas,
            'gelar' => $request->gelar,
            'bidang_studi' => $request->bidang_studi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
            'deskripsi' => $request->deskripsi,
        ]);
    
        return redirect()->route('cv.tambah1')
            ->with('success', 'Data buku berhasil ditambahkan.');
    }
    
}
