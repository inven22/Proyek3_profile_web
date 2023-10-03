let currentSlide = 1;

// Menambahkan event listener untuk tombol "Lanjut" di Slide 1
document.getElementById('next1').addEventListener('click', function() {
    // Lakukan validasi atau pengolahan data jika diperlukan
    const namaLengkap = document.getElementById('nama_lengkap').value;
    const namaPanggilan = document.getElementById('nama_panggilan').value;
    const tempatLahir = document.getElementById('tempat_lahir').value;
    const tanggalLahir = document.getElementById('tanggal_lahir').value;
    const agama = document.getElementById('agama').value;
    const jenisKelamin = document.getElementById('jenis_kelamin').value;
    const alamat = document.getElementById('alamat').value;
    const provinsi = document.getElementById('provinsi').value;
    const kabKota = document.getElementById('kab_kota').value;
    const kodePos = document.getElementById('kode_pos').value;

    if (
        !namaLengkap ||
        !namaPanggilan ||
        !tempatLahir ||
        !tanggalLahir ||
        !agama ||
        !jenisKelamin ||
        !alamat ||
        !provinsi ||
        !kabKota ||
        !kodePos
    ) {
        // Isi bidang-bidang yang kosong dengan nilai default atau pesan kesalahan
        alert('Harap isi semua bidang pada Slide 1 sebelum melanjutkan.');
        return;
    }
    // Pindah ke Slide 2
    document.getElementById('slide1').style.display = 'none';
    document.getElementById('slide2').style.display = 'block';
    currentSlide = 2;
});

// Menambahkan event listener untuk tombol "Kembali" di Slide 2
document.getElementById('prev2').addEventListener('click', function() {
    // Kembali ke Slide 1
    document.getElementById('slide2').style.display = 'none';
    document.getElementById('slide1').style.display = 'block';
    currentSlide = 1;
});

// Menambahkan event listener untuk tombol "Lanjut" di Slide 2
document.getElementById('next2').addEventListener('click', function() {
    // Lakukan validasi atau pengolahan data jika diperlukan
    const universitas = document.querySelectorAll('.universitas');
    const gelar = document.querySelectorAll('.gelar');
    const bidangStudi = document.querySelectorAll('.bidang_studi');
    const tanggalMulai = document.querySelectorAll('.tanggal_mulai');
    const tanggalAkhir = document.querySelectorAll('.tanggal_akhir');
    const deskripsi = document.querySelectorAll('.deskripsi');

    for (let i = 0; i < universitas.length; i++) {
        if (
            !universitas[i].value ||
            !gelar[i].value ||
            !bidangStudi[i].value ||
            !tanggalMulai[i].value ||
            !tanggalAkhir[i].value ||
            !deskripsi[i].value
        ) {
            // Isi bidang-bidang yang kosong dengan nilai default atau pesan kesalahan
            alert('Harap isi semua bidang pada Slide 2 (Riwayat Pendidikan) sebelum melanjutkan.');
            return;
        }
    }
    // Pindah ke Slide 3
    document.getElementById('slide2').style.display = 'none';
    document.getElementById('slide3').style.display = 'block';
    currentSlide = 3;
});

// Menambahkan event listener untuk tombol "Kembali" di Slide 3
document.getElementById('prev3').addEventListener('click', function() {
    // Kembali ke Slide 2
    document.getElementById('slide3').style.display = 'none';
    document.getElementById('slide2').style.display = 'block';
    currentSlide = 2;
});

function validateKodePos() {
    var kodePosInput = document.getElementById('kode_pos');
    var kodePosValue = kodePosInput.value;

    // Check if the input is not empty and contains only numeric characters
    if (!kodePosValue || isNaN(kodePosValue)) {
        alert('Kode Pos harus berupa angka.');
        kodePosInput.value = ''; // Clear the input field
        kodePosInput.focus(); // Set focus back to the input field
    }
}

// JavaScript to update the selected file list when files are chosen
const sertifikatInput = document.getElementById('sertifikat');
const dokumenPendukungInput = document.getElementById('dokumen_pendukung');
const filePortofolioInput = document.getElementById('file_portofolio');

sertifikatInput.addEventListener('change', function() {
    updateFileList('sertifikat-list', sertifikatInput);
});
dokumenPendukungInput.addEventListener('change', function() {
    updateFileList('dokumen-pendukung-list', dokumenPendukungInput);
});
filePortofolioInput.addEventListener('change', function() {
    updateFileList('file-portofolio-list', filePortofolioInput);
});

function updateFileList(listId, inputElement) {
    const fileList = document.getElementById(listId);
    fileList.innerHTML = ''; // Clear previous entries

    const files = inputElement.files;
    for (let i = 0; i < files.length; i++) {
        const listItem = document.createElement('li');
        listItem.textContent = files[i].name;
        fileList.appendChild(listItem);
    }
}

document.getElementById('tambah-riwayat').addEventListener('click', function() {
    var container = document.getElementById('riwayat-pendidikan-container');
    var newRow = document.createElement('div');
    newRow.className = 'row mb-3 riwayat-pendidikan'; // Tambahkan kelas 'riwayat-pendidikan'
    newRow.innerHTML = `
<label for="universitas" class="col-md-4 col-form-label text-md-end">{{ __('Jenjang:') }}</label>
<div class="col-md-6">
    <input type="text" class="form-control universitas" name="jenjang[]" required>
</div>
<label for="gelar" class="col-md-4 col-form-label text-md-end">{{ __('Nama Sekolah:') }}</label>
<div class="col-md-6">
    <input type="text" class="form-control gelar" name="sekolah[]" required>
</div>
<label for="gelar" class="col-md-4 col-form-label text-md-end">{{ __('Gelar:') }}</label>
<div class="col-md-6">
    <input type="text" class="form-control gelar" name="gelar[]" required>
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
        var bidang_studi = riwayatElement.querySelector('.bidang_studi').value;
        var tanggal_mulai = riwayatElement.querySelector('.tanggal_mulai').value;
        var tanggal_akhir = riwayatElement.querySelector('.tanggal_akhir').value;
        var deskripsi = riwayatElement.querySelector('.deskripsi').value;

        riwayatPendidikan.push({
            universitas: universitas,
            gelar: gelar,
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