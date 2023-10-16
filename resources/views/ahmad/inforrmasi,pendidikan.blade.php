@extends('layouts.tem')
<title>Tambah Cv</title>
@section('content')
    <style>
        /* Menghilangkan shadow di sekitar layar putih */
        body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            /* Ganti dengan warna latar belakang yang Anda inginkan */
        }

        /* Menambahkan shadow pada card form */
        .card {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Atur bayangan sesuai preferensi Anda */
        }
    </style>

    <div class="container">
       
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Cv') }}
                       <center> <a href="tab_mode_insert" id="get-started-button">Coba Tab mode</a></center>
                    </div>

                    <div class="card-body">

                        @if ($errors->any())
                            <div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ URL::to('insert_cv') }}" enctype="multipart/form-data">
                            @csrf

                            <!-- Slide 1 -->
                            <div class="slide" id="slide1">
                                <center><Strong>
                                        <font size="6px">Informasi pribadi</font>
                                    </strong></center>
                                <br>
                                <div class="row mb-3">
                                    <label for="nama_lengkap"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Nama Lengkap:') }}</label>
                                    <div class="col-md-9">
                                        <input id="nama_lengkap" type="text"
                                            class="form-control @error('nama_lengkap') is-invalid @enderror"
                                            name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                                            autocomplete="nama_lengkap" autofocus required>
                                        @error('nama_lengkap')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="nama_panggilan"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Nama Panggilan:') }}</label>
                                    <div class="col-md-9">
                                        <input id="nama_panggilan" type="text"
                                            class="form-control @error('nama_panggilan') is-invalid @enderror"
                                            name="nama_panggilan" value="{{ old('nama_panggilan') }}"
                                            autocomplete="nama_panggilan" autofocus required>
                                        @error('nama_panggilan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="tempat_lahir"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Tempat Lahir:') }}</label>
                                    <div class="col-md-3">
                                        <input id="tempat_lahir" type="text"
                                            class="form-control @error('tempat_lahir') is-invalid @enderror"
                                            name="tempat_lahir" value="{{ old('tempat_lahir') }}"
                                            autocomplete="tempat_lahir" autofocus required>
                                        @error('tempat_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label for="tanggal_lahir"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Tanggal Lahir:') }}</label>
                                    <div class="col-md-3">
                                        <input id="tanggal_lahir" type="date"
                                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                            name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                            autocomplete="tanggal_lahir" autofocus>
                                        @error('tanggal_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="agama"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Agama:') }}</label>
                                    <div class="col-md-3">
                                        <select id="agama" class="form-control @error('agama') is-invalid @enderror"
                                            name="agama" required autocomplete="agama" autofocus>
                                            <option value="belum_memilih">Belum memilih</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                        @error('agama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label for="jenis_kelamin"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Jenis Kelamin:') }}</label>
                                    <div class="col-md-3">
                                        <select id="jenis_kelamin"
                                            class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                            name="jenis_kelamin" required autocomplete="jenis_kelamin" autofocus required>
                                            <option value="Belum_memilih">Belum Memilih</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        @error('jenis_kelamin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="provinsi"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Provinsi:') }}</label>
                                <div class="col-md-3">
                                    <select id="provinsi" class="form-control @error('provinsi') is-invalid @enderror"
                                        name="provinsi" required autocomplete="provinsi" autofocus>
                                        <option value="belum_memilih">Belum memilih</option>
                                        <option value="Aceh">Nanggroe Aceh Darussalam</option>
                                        <option value="Sumatra Utara">Sumatra Utara</option>
                                        <option value="Sumatra Barat">Sumatra Barat</option>
                                        <option value="Riau">Riau</option>
                                        <option value="Jambi">Jambi</option>
                                        <option value="Sumatera Selatan">Sumatera Selatan</option>
                                        <option value="Bengkulu">Bengkulu</option>
                                        <option value="Lampung">Lampung</option>
                                        <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                        <option value="Jawa Timur">Jawa Timur</option>
                                        <option value="DKI Yogyakarta">DKI Yogyakarta</option>
                                        <option value="Banten">Banten</option>
                                        <option value="Bali">Bali</option>
                                        <option value="NTB">Nusa Tenggara Barat</option>
                                        <option value="NTT">Nusa Tenggara Timur</option>
                                        <option value="Sulawesi Utara">Sulawesi Utara</option>
                                        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                        <option value="Sulawesi Barat">Sulawesi Barat</option>
                                        <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                        <option value="Gorontalo">Gorontalo</option>
                                        <option value="Maluku">Maluku</option>
                                        <option value="Maluku Utara">Maluku Utara</option>
                                        <option value="Papua">Papua</option>
                                        <option value="Papua Barat">Papua Barat</option>
                                    </select>
                                    @error('provinsi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label for="kab_kota"
                                class="col-md-3 col-form-label text-md-end">{{ __('Kab/Kota:') }}</label>
                            <div class="col-md-3">
                                <select id="kab_kota" class="form-control @error('kab_kota') is-invalid @enderror"
                                    name="kab_kota" required autocomplete="provinsi" autofocus>
                                    <option value="belum_memilih">Belum memilih</option>
                                </select>

                                @error('kab_kota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                                </div>

                                <div class="row mb-3">
                                    <label for="alamat"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Alamat Lengkap:') }}</label>
                                    <div class="col-md-9">
                                        <textarea id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                            value="{{ old('alamat') }}" required autocomplete="alamat" autofocus required></textarea>
                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="kode_pos"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Kode Pos:') }}</label>
                                    <div class="col-md-9">
                                        <input id="kode_pos" type="text"
                                            class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos"
                                            value="{{ old('kode_pos') }}" required autocomplete="kode_pos" autofocus
                                            onblur="validateKodePos()" required>
                                        @error('kode_pos')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="file_image"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Upload foto diri:') }}</label>
                                    <div class="col-md-9">
                                        <input id="file_image" type="file"
                                            class="form-control @error('file_image') is-invalid @enderror" name="file_image"
                                            value="{{ old('file_image') }}" required autocomplete="file_image" autofocus
                                            onblur="validateKodePos()" required>
                                        @error('file_image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary" id="next1">Lanjut</button>
                            </div>

                            <!-- Slide 2 -->
                            <div class="slide" id="slide2" style="display: none;">
                                <!-- Konten Slide 2 -->
                                <center><Strong>
                                        <font size="6px">Riwayat Pendidikan</font>
                                    </strong></center>
                                <br>
                                <div id="riwayat-pendidikan-container">
                                    <div class="row mb-3">
                                        <label for="jenjang" class="col-md-4 col-form-label text-md-end">{{ __('Jenjang:') }}</label>
                                        <div class="col-md-6">
                                            <select id="jenjang" class="form-control" name="jenjang[]" required>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="Sarjana">Sarjana</option>
                                                <!-- Tambahkan lebih banyak opsi jenjang sesuai kebutuhan -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="universitas"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Nama Sekolah:') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control jenjang" name="sekolah[]" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="gelar"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Gelar Depan :') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control gelar" name="gelar[]" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="gelar"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Gelar Belakang :') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control gelar" name="gelar_b[]" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="bidang_studi"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Bidang Studi:') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control bidang_studi" name="bidang_studi[]"
                                                required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tanggal_mulai"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Mulai:') }}</label>
                                        <div class="col-md-3">
                                            <input type="date" class="form-control tanggal_mulai"
                                                name="tanggal_mulai[]" required>
                                        </div>
                                        <label for="tanggal_akhir"
                                            class="col-md-2 col-form-label text-md-end">{{ __('Tanggal Akhir:') }}</label>
                                        <div class="col-md-2">
                                            <input type="date" class="form-control tanggal_akhir"
                                                name="tanggal_akhir[]" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="deskripsi"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Deskripsi:') }}</label>
                                        <div class="col-md-6">
                                            <textarea class="form-control deskripsi" name="deskripsi[]" required></textarea>
                                        </div>
                                    </div>
                                </div>


                                <br>
                               
                               
                                <button type="button" class="btn btn-primary" id="prev2">Kembali</button>
                                <button type="button" id="tambah-riwayat" class="btn btn-primary">Tambah Riwayat
                                    Pendidikan</button>
                                <button type="button" class="btn btn-primary" id="next2">Lanjut</button>
                              
                            </div>

                            <!-- Slide 3 -->
                            <div class="slide" id="slide3" style="display: none;">
                                <!-- Konten Slide 3 -->
                                <!-- Sertifikat -->
                                <center><Strong>
                                        <font size="6px">Portofolio</font>
                                    </strong></center>
                                <br>
                                <!-- Sertifikat -->
                                <div class="row mb-3">
                                    <label for="sertifikat"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Sertifikat (Up to 3 files):') }}</label>
                                    <div class="col-md-6">
                                        <input id="sertifikat" type="file" class="form-control" name="sertifikat[]"
                                            accept=".pdf, .doc, .docx, .jpg, .png" multiple required>
                                        <small class="text-muted">You can upload up to 3 files.</small>
                                        <ul id="sertifikat-list"></ul>
                                    </div>
                                </div>

                                <!-- Dokumen Pendukung -->
                                <div class="row mb-3">
                                    <label for="dokumen_pendukung"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Dokumen Pendukung :') }}</label>
                                    <div class="col-md-6">
                                        <input id="dokumen_pendukung" type="file" class="form-control"
                                            name="dokumen_pendukung[]" accept=".pdf, .doc, .docx, .jpg, .png" multiple
                                            required>

                                        <ul id="dokumen-pendukung-list"></ul>
                                    </div>
                                </div>

                                <!-- File Portofolio -->
                                <div class="row mb-3">
                                    <label for="file_portofolio"
                                        class="col-md-4 col-form-label text-md-end">{{ __('File Portofolio :') }}</label>
                                    <div class="col-md-6">
                                        <input id="file_portofolio" type="file" class="form-control"
                                            name="file_portofolio[]" accept=".pdf, .doc, .docx, .jpg, .png" multiple
                                            required>

                                        <ul id="file-portofolio-list"></ul>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary" id="prev3">Kembali</button>
                                <button type="button" class="btn btn-primary" id="next3">Lanjut</button>
                            </div>
                            <!-- Slide 4 -->
                            <div class="slide" id="slide4" style="display: none;">
                                <!-- Konten Slide 4 -->
                                <center><Strong>
                                        <font size="6px">Riwayat Pekerjaan</font>
                                    </strong></center>
                                <br>
                               
                                <!-- File Riwayat Kerja form taro dibawah sini -->


                                <button type="button" class="btn btn-primary" id="prev4">Kembali</button>
                                <button type="submit" class="btn btn-primary" id="next4">Lanjut</button>
                            </div>

                            <!-- Slide 4 -->
                            <div class="slide" id="slide5" style="display: none;">
                                <!-- Konten Slide 5 -->
                                <center><Strong>
                                        <font size="6px">Pengalaman</font>
                                    </strong></center>
                                <br>
                                   <p>test</p>
                                <!-- File Riwayat Kerja form taro dibawah sini -->


                                <button type="button" class="btn btn-primary" id="prev5">Kembali</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/index.js') }}"></script>
    <script>
        document.getElementById('tambah-riwayat').addEventListener('click', function() {
            var container = document.getElementById('riwayat-pendidikan-container');
            var newRow = document.createElement('div');
            newRow.className = 'row mb-3 riwayat-pendidikan'; // Tambahkan kelas 'riwayat-pendidikan'
            newRow.innerHTML = `
<label for="universitas" class="col-md-4 col-form-label text-md-end">{{ __('Jenjang:') }}</label>
<div class="col-md-6">
    <select class="form-control" name="jenjang[]" required>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="Sarjana">Sarjana</option>
            <!-- Tambahkan lebih banyak opsi jenjang sesuai kebutuhan -->
        </select>
</div>
<label for="gelar" class="col-md-4 col-form-label text-md-end">{{ __('Nama Sekolah:') }}</label>
<div class="col-md-6">
    <input type="text" class="form-control gelar" name="sekolah[]" required>
</div>
<label for="gelar" class="col-md-4 col-form-label text-md-end">{{ __('Gelar Depam:') }}</label>
<div class="col-md-6">
    <input type="text" class="form-control gelar" name="gelar[]" required>
</div>
<label for="gelar_b" class="col-md-4 col-form-label text-md-end">{{ __('Gelar Belakang:') }}</label>
<div class="col-md-6">
    <input type="text" class="form-control gelar_b" name="gelar_b[]" required>
</div>
<label for="bidang_studi" class="col-md-4 col-form-label text-md-end">{{ __('Bidang Studi:') }}</label>
<div class="col-md-6">
    <input type="text" class="form-control bidang_studi" name="bidang_studi[]" required>
</div>
<label for="tanggal_mulai" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Mulai:') }}</label>
<div class="col-md-2">
    <input type="date" class="form-control tanggal_mulai" name="tanggal_mulai[]" required>
</div>
<label for="tanggal_akhir" class="col-md-2 col-form-label text-md-end">{{ __('Tanggal Akhir:') }}</label>
<div class="col-md-2">
    <input type="date" class="form-control tanggal_akhir" name="tanggal_akhir[]" required>
</div>
<label for="deskripsi" class="col-md-4 col-form-label text-md-end">{{ __('Deskripsi:') }}</label>
<div class="col-md-6">
    <textarea class="form-control deskripsi" name="deskripsi[]" required></textarea>
</div>
<div class="col-md-2">
    <button type="button" class="btn btn-danger hapus-riwayat">Hapus</button>
</div>
`;
            container.appendChild(newRow);
        });

        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('hapus-riwayat')) {
                e.target.closest('.riwayat-pendidikan').remove(); // Hapus elemen riwayat-pendidikan
            }
        });

        document.getElementById('simpan').addEventListener('click', function() {
            var riwayatPendidikan = [];
            var riwayatElements = document.querySelectorAll('.riwayat-pendidikan');

            riwayatElements.forEach(function(riwayatElement) {
                var jenjang = riwayatElement.querySelector('.jenjang').value;
                var sekolah = riwayatElement.querySelector('.sekolah').value;
                var gelar = riwayatElement.querySelector('.gelar').value;
                var gelar_b = riwayatElement.querySelector('.gelar_b').value;
                var bidang_studi = riwayatElement.querySelector('.bidang_studi').value;
                var tanggal_mulai = riwayatElement.querySelector('.tanggal_mulai').value;
                var tanggal_akhir = riwayatElement.querySelector('.tanggal_akhir').value;
                var deskripsi = riwayatElement.querySelector('.deskripsi').value;

                riwayatPendidikan.push({
                    universitas: universitas,
                    gelar: gelar,
                    gelar_b: gelar_b,
                    bidang_studi: bidang_studi,
                    tanggal_mulai: tanggal_mulai,
                    tanggal_akhir: tanggal_akhir,
                    deskripsi: deskripsi
                });
            });

            // Kirim data riwayat pendidikan ke server, misalnya menggunakan fetch API atau XMLHttpRequest
            fetch('/insert_cv', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        riwayat_pendidikan: riwayatPendidikan
                    })
                })
                .then(response => response.json())
                .then(data => {
                    // Tanggapi respons dari server di sini
                    console.log(data);
                });
        });

        //
    </script>

@endsection
