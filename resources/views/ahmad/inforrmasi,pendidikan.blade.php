@extends('layouts.tem')
<title>Tambah Cv</title>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Cv') }}</div>

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

                        <form method="POST" action="{{ URL::to('/insert_cv') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="nama_lengkap"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Lengkap:') }}</label>

                                <div class="col-md-6">
                                    <input id="nama_lengkap" type="text"
                                        class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap"
                                        value="{{ old('nama_lengkap') }}" required autocomplete="nama_lengkap" autofocus
                                        required>

                                    @error('nama_lengkap')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nama_panggilan"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Panggilan:') }}</label>

                                <div class="col-md-6">
                                    <input id="nama_panggilan" type="text"
                                        class="form-control @error('nama_panggilan') is-invalid @enderror"
                                        name="nama_panggilan" value="{{ old('nama_panggilan') }}" required
                                        autocomplete="nama_panggilan" autofocus>

                                    @error('nama_panggilan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="tempat_lahir"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tempat Lahir:') }}</label>

                                <div class="col-md-6">
                                    <input id="tempat_lahir" type="text"
                                        class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir"
                                        value="{{ old('tempat_lahir') }}" required autocomplete="tempat_lahir" autofocus
                                        required>

                                    @error('tempat_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="tanggal_lahir"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Lahir:') }}</label>

                                <div class="col-md-6">
                                    <input id="tanggal_lahir" type="date"
                                        class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                        name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required
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
                                    class="col-md-4 col-form-label text-md-end">{{ __('Agama:') }}</label>

                                <div class="col-md-6">
                                    <select id="agama" class="form-control @error('agama') is-invalid @enderror"
                                        name="agama" required autocomplete="agama" autofocus>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <!-- Add more religion options as needed -->
                                    </select>

                                    @error('agama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jenis_kelamin"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin:') }}</label>

                                <div class="col-md-6">
                                    <select id="jenis_kelamin"
                                        class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                        name="jenis_kelamin" required autocomplete="jenis_kelamin" autofocus required>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        <!-- Add more gender options as needed -->
                                    </select>

                                    @error('jenis_kelamin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat:') }}</label>

                                <div class="col-md-6">
                                    <textarea id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                        value="{{ old('alamat') }}" required autocomplete="alamat" autofocus required></textarea>

                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="provinsi"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Provinsi:') }}</label>

                                <div class="col-md-6">
                                    <input id="provinsi" type="text"
                                        class="form-control @error('provinsi') is-invalid @enderror" name="provinsi"
                                        value="{{ old('provinsi') }}" required autocomplete="provinsi" autofocus
                                        required>

                                    @error('provinsi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="kab_kota"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kabupaten/Kota:') }}</label>

                                <div class="col-md-6">
                                    <input id="kab_kota" type="text"
                                        class="form-control @error('kab_kota') is-invalid @enderror" name="kab_kota"
                                        value="{{ old('kab_kota') }}" required autocomplete="kab_kota" autofocus>

                                    @error('kab_kota')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="kode_pos"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kode Pos:') }}</label>

                                <div class="col-md-6">
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

                            <!-- Continue with similar modifications for other fields -->



                            <br>
                            <center>
                                <div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </center>
                        </form>
                        </body>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
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
    </script>



@endsection
