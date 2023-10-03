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
            'nama_panggilan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kab_kota' => 'required',
            'kode_pos' => 'required',
           
    
            // Validasi untuk file (gunakan sertifikat[][], dokumen_pendukung[][] dan file_portofolio[][])
            'sertifikat.*' => 'required|mimes:pdf,doc,docx,jpg,png',
            'dokumen_pendukung.*' => 'required|mimes:pdf,doc,docx,jpg,png',
            'file_portofolio.*' => 'required|mimes:pdf,doc,docx,jpg,png',
        ]);
    
        // Menyimpan data pribadi ke dalam variabel
        $personalData = [
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
          
        ];

        $riwayatPendidikan = [];

        // Loop melalui data riwayat pendidikan yang dikirimkan melalui form
        for ($i = 0; $i < count($request->jenjang); $i++) {
            $riwayatPendidikan[] = [
                'jenjang' => $request->jenjang[$i],
                'sekolah' => $request->sekolah[$i],
                'gelar' => $request->gelar[$i],
                'bidang_studi' => $request->bidang_studi[$i],
                'tanggal_mulai' => $request->tanggal_mulai[$i],
                'tanggal_akhir' => $request->tanggal_akhir[$i],
                'deskripsi' => $request->deskripsi[$i],
            ];
        }
    
        // Menyimpan tiga file yang diunggah dalam satu kolom JSON
        $fileData = [
            'sertifikat' => [],
            'dokumen_pendukung' => [],
            'file_portofolio' => [],
        ];
    
        if ($request->hasfile('sertifikat')) {
            foreach ($request->file('sertifikat') as $file) {
                $fileData['sertifikat'][] = $file->store('uploads');
            }
        }
    
        if ($request->hasfile('dokumen_pendukung')) {
            foreach ($request->file('dokumen_pendukung') as $file) {
                $fileData['dokumen_pendukung'][] = $file->store('uploads');
            }
        }
    
        if ($request->hasfile('file_portofolio')) {
            foreach ($request->file('file_portofolio') as $file) {
                $fileData['file_portofolio'][] = $file->store('uploads');
            }
        }
    
        // Menggabungkan data pribadi dan data file ke dalam satu array
        $personalData['file_data'] = json_encode($fileData);
        $personalData['riwayat_pendidikan'] = json_encode($riwayatPendidikan);
    
        // Menyimpan data ke dalam tabel cv_personal menggunakan DB Facade
        DB::table('cv')->insert($personalData);
    
        return redirect()->route('cv.tambah1')
            ->with('success', 'Data berhasil ditambahkan.');
    }
    
    
}
