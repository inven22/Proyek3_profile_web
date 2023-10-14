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
    const gelar_b = document.querySelectorAll('.gelar_b');
    const bidangStudi = document.querySelectorAll('.bidang_studi');
    const tanggalMulai = document.querySelectorAll('.tanggal_mulai');
    const tanggalAkhir = document.querySelectorAll('.tanggal_akhir');
    const deskripsi = document.querySelectorAll('.deskripsi');

    for (let i = 0; i < universitas.length; i++) {
        if (
            !universitas[i].value ||
            !gelar[i].value ||
            !gelar_b[i].value ||
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

document.getElementById('next3').addEventListener('click', function() {
    // Pindah ke Slide 4
    document.getElementById('slide3').style.display = 'none';
    document.getElementById('slide4').style.display = 'block';
    currentSlide = 4;

});




// Menambahkan event listener untuk tombol "Kembali" di Slide 4
document.getElementById('prev4').addEventListener('click', function() {
    // Kembali ke Slide 3
    document.getElementById('slide4').style.display = 'none';
    document.getElementById('slide3').style.display = 'block';
    currentSlide = 3;
});

// Menambahkan event listener untuk tombol "Lanjut" di Slide 3
document.getElementById('next4').addEventListener('click', function() {
    // Pindah ke Slide 4
    document.getElementById('slide4').style.display = 'none';
    document.getElementById('slide5').style.display = 'block';
    currentSlide = 5;
});


// Menambahkan event listener untuk tombol "Kembali" di Slide 4
document.getElementById('prev5').addEventListener('click', function() {
    // Kembali ke Slide 3
    document.getElementById('slide5').style.display = 'none';
    document.getElementById('slide4').style.display = 'block';
    currentSlide = 3;
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

// DROPDOWN KOTA-----------------------------------------------------------------------------------------------------------------------------------------------------------------------
document.getElementById('provinsi').addEventListener('change', function(){
    // Mendapatkan nilai provinsi yang dipilih
    const selectedProvinsi = this.value;

    // Mendapatkan elemen dropdown kabupaten/kota
    const kabupatenDropdown = document.getElementById('kab_kota');

    // Mengosongkan dropdown kabupaten/kota
    kabupatenDropdown.innerHTML = '<option value="belum_memilih">Belum memilih</option>';

    // Menambahkan opsi kabupaten/kota berdasarkan provinsi yang dipilih
    if (selectedProvinsi === 'Jawa Barat') {
        // Jika provinsi Jawa Barat dipilih
        const kabupatenKotaJawaBarat = ['Kota Bandung', 'Banjar', 'Bekasi', 'Bogor', 'Cimahi', 'Cirebon', 'Depok', 'Sukabumi', 'Tasikmalaya'];
        kabupatenKotaJawaBarat.forEach(function(kab_kota) {
            const option = document.createElement('option');
            option.value = kab_kota;
            option.text = kab_kota;
            kabupatenDropdown.appendChild(option);
        });
    } else if (selectedProvinsi === 'Jawa Tengah') {
        // Jika provinsi Jawa Tengah dipilih
        const kabupatenKotaJawaTengah = ['magelang', 'Pekalongan', 'Salatiga', 'Semarang', 'Surakarta', 'Tegal'];
        kabupatenKotaJawaTengah.forEach(function(kab_kota) {
            const option = document.createElement('option');
            option.value = kab_kota;
            option.text = kab_kota;
            kabupatenDropdown.appendChild(option);
        });
    } else if (selectedProvinsi === 'Jawa Timur') {
        const kabupatenKotaJawaTimur = ['Batu', 'Blitar', 'Kediri', 'Madiun', 'Malang', 'Mojokerto', 'Pasuruan', 'Probolinggo', 'Surabaya'];
        kabupatenKotaJawaTimur.forEach(function(kab_kota){
            const option = document.createElement('option');
            option.value = kab_kota;
            option.text = kab_kota;
            kabupatenDropdown.appendChild(option);
        });
    };
});


