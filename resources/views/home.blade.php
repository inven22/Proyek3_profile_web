@extends('layouts.tem')
<title>Home</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
<style>


/* Tambahkan gaya CSS sesuai kebutuhan */
#welcome-text {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

#get-started-button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
}

#get-started-button:hover {
    background-color: #0056b3;
}
</style>

<center><div id="welcome-text"><h2><font color="black">Tidak Ada Waktu yang Tepat, Kecuali Sekarang
    Buat CVmu Hari Ini!</font></h2></div>
<a href="add_cv" id="get-started-button">Get Started</a>
</center>
{{-- Selanjutnya, Anda dapat menambahkan konten lain sesuai kebutuhan Anda. --}}
@endsection
