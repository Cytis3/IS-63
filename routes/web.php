<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contoh1', function () {
    return view('lp3i');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('user.index');
Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'create'])->name('user.index');
