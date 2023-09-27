<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class addcvController extends Controller
{
    public function addpg(){
        return view("cv.tambahcv");
    }
    public function storeData1(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kab_kota' => 'required',
            'kode_pos' => 'required',
        ]);
    
        // Simpan data ke dalam database
        $user = new User([
            'nama' => $request->input('nama_lengkap'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'agama' => $request->input('agama'),
            'alamat' => $request->input('alamat'),
            'provinsi' => $request->input('provinsi'),
            'kab_kota' => $request->input('kab_kota'),
            'kode_pos' => $request->input('kode_pos'),
        ]);
    
        $user->save();
    
        // Redirect atau tampilkan pesan sukses
        return redirect('cv.slide2')->with('success', 'Data dari Form Slide 1 berhasil disimpan');
    }
    
    public function storeData2(Request $request)
    {
        // Validasi data
        $request->validate([
            'universitas' => 'required',
            'gelar' => 'required',
            'bidang_studi' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'deskripsi' => 'required',
        ]);
    
        // Simpan data ke dalam database
        $user = new User([
            'universitas' => $request->input('universitas'),
            'gelar' => $request->input('gelar'),
            'bidang_studi' => $request->input('bidang_studi'),
            'tanggal_mulai' => $request->input('tanggal_mulai'),
            'tanggal_akhir' => $request->input('tanggal_akhir'),
            'deskripsi' => $request->input('deskripsi'),
        ]);
    
        $user->save();
    
        // Redirect atau tampilkan pesan sukses
        return redirect('home')->with('success', 'Data dari Form Slide 2 berhasil disimpan');
    }
    

}
