@extends('layouts.tem')
<title>Tambah CV</title>
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Pengisian Data</title>
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <style>
            .step-card {
                max-width: 730px;
                margin: 23px auto;
                padding: 23px;
                border-radius: 10px;
                box-shadow: none;
                /* Menghilangkan shadow pada form */
            }

            .slide-left {
                transform: translateX(-100%);
            }



            .form-group {
                margin-bottom: 20px;
                /* Jarak antar input fields */
            }

            .btn {
                margin-right: 10px;
                /* Jarak antar tombol */
            }
        </style>

<div class="container">
    <h1 class="text-center my-4">Form Pengisian Data</h1>
    <div class="card step-card">
        <div class="card-body">
            <form id="formSlide1">
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="nama_lengkap" required>
                </div>
                <div class="form-group">
                    <label for="nama_panggilan">Nama Panggilan:</label>
                    <input type="text" class="form-control" id="nama_panggilan" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tempat_lahir">Tempat Lahir:</label>
                        <input type="text" class="form-control" id="tempat_lahir" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input type="date" class="form-control" id="tanggal_lahir" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="agama">Agama:</label>
                        <select class="form-control" id="agama" required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                        <select class="form-control" id="jenis_kelamin" required>
                            <option value="#"></option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" required></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="provinsi">Provinsi:</label>
                        <input type="text" class="form-control" id="provinsi" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kab_kota">Kab/Kota:</label>
                        <input type="text" class="form-control" id="kab_kota" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kode_pos">Kode Pos:</label>
                    <input type="text" class="form-control" id="kode_pos" required>
                </div>
                <button type="button" class="btn btn-primary" id="btnLangkah1">Lanjut</button>
            </form>
        </div>
    </div>
</div>




       

        <!-- ... (slide-slide lainnya) ... -->

        </div>

        <!-- ... (kode JavaScript lainnya) ... -->
        <script>
            let currentStep = 1;
            const totalSteps = 2; // Sesuaikan jumlah total langkah

            const stepCards = document.querySelectorAll('.step-card');
            const dataPengguna = {}; // Objek untuk menyimpan data pengguna

            function showStep(stepNumber) {
                stepCards.forEach((card, index) => {
                    if (index === stepNumber - 1) {
                        card.style.display = 'block';
                        card.classList.remove('slide-left');
                    } else {
                        card.style.display = 'none';
                        card.classList.add('slide-left');
                    }
                });
            }

            document.getElementById('btnLangkah1').addEventListener('click', function() {
                // Mengambil nilai dari input pada slide 1
                dataPengguna.nama_lengkap = document.getElementById('nama_lengkap').value;
                dataPengguna.jenis_kelamin = document.getElementById('jenis_kelamin').value;
                dataPengguna.tempat_lahir = document.getElementById('tempat_lahir').value;
                dataPengguna.tanggal_lahir = document.getElementById('tanggal_lahir').value;
                dataPengguna.agama = document.getElementById('agama').value;
                dataPengguna.alamat = document.getElementById('alamat').value;
                dataPengguna.provinsi = document.getElementById('provinsi').value;
                dataPengguna.kab_kota = document.getElementById('kab_kota').value;
                dataPengguna.kode_pos = document.getElementById('kode_pos').value;

                // Validasi data pada slide 1 sebelum melanjutkan
                if (dataPengguna.nama_lengkap && dataPengguna.jenis_kelamin && dataPengguna.tempat_lahir && dataPengguna
                    .tanggal_lahir && dataPengguna.agama && dataPengguna.alamat && dataPengguna.provinsi && dataPengguna
                    .kab_kota && dataPengguna.kode_pos) {
                    currentStep = 2;
                    showStep(currentStep);
                } else {
                    alert('Harap lengkapi semua data pada langkah ini sebelum melanjutkan.');
                }
            });

            document.getElementById('btnLangkah2').addEventListener('click', function() {
                // Mengambil nilai dari input pada slide 2
                dataPengguna.universitas = document.getElementById('universitas').value;
                dataPengguna.gelar = document.getElementById('gelar').value;
                dataPengguna.bidang_studi = document.getElementById('bidang_studi').value;
                dataPengguna.tanggal_mulai = document.getElementById('tanggal_mulai').value;
                dataPengguna.tanggal_akhir = document.getElementById('tanggal_akhir').value;
                dataPengguna.deskripsi = document.getElementById('deskripsi').value;

                // Validasi data pada slide 2 sebelum melanjutkan
                if (dataPengguna.universitas && dataPengguna.gelar && dataPengguna.bidang_studi && dataPengguna
                    .tanggal_mulai && dataPengguna.tanggal_akhir && dataPengguna.deskripsi) {
                    // Menampilkan data yang sudah diisi
                    alert('Data yang diisi:\nNama Lengkap: ' + dataPengguna.nama_lengkap +
                        '\nJenis Kelamin: ' + dataPengguna.jenis_kelamin +
                        '\nTempat Lahir: ' + dataPengguna.tempat_lahir +
                        '\nTanggal Lahir: ' + dataPengguna.tanggal_lahir +
                        '\nAgama: ' + dataPengguna.agama +
                        '\nAlamat: ' + dataPengguna.alamat +
                        '\nProvinsi: ' + dataPengguna.provinsi +
                        '\nKab/Kota: ' + dataPengguna.kab_kota +
                        '\nKode Pos: ' + dataPengguna.kode_pos +
                        '\nUniversitas: ' + dataPengguna.universitas +
                        '\nGelar: ' + dataPengguna.gelar +
                        '\nBidang Studi: ' + dataPengguna.bidang_studi +
                        '\nTanggal Mulai: ' + dataPengguna.tanggal_mulai +
                        '\nTanggal Akhir: ' + dataPengguna.tanggal_akhir +
                        '\nDeskripsi: ' + dataPengguna.deskripsi);
                } else {
                    alert('Harap lengkapi semua data pada langkah ini sebelum melanjutkan.');
                }
            });

            document.getElementById('btnKembali1').addEventListener('click', function() {
                if (currentStep > 1) {
                    currentStep--;
                    showStep(currentStep);
                }
            });

            // ... (Tambahkan event listener untuk tombol "Kembali" dan langkah-langkah lainnya) ...
        </script>





    </body>

    </html>
@endsection
