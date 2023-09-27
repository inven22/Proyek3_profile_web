<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\cvController;
use App\Http\Controllers\slide1controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('auth/google', [App\Http\Controllers\LoginWithGoogleController::class,'redirectToGoogle']);
Route::get('auth/google/callback', [App\Http\Controllers\LoginWithGoogleController::class,'handleGoogleCallback']);
route::get('/home',[HomeController::Class,'index']);
route::get('/kelola_cv',[cvController::Class,'index']);

Route::get('add_cv',[slide1controller::Class,'tampil']); // Menampilkan formulir
Route::post('/insert_buku', [App\Http\Controllers\slide1controller::class,'store']);
