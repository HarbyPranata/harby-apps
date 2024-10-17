<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HarbyyyController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;

// Route::get('/', function () {
// 	return 'Selamat Datang harby prnt!';
// }
// );

// Route::get('/pegawai/{param1}', function (string $param1) {
//     return 'ID pegawai: '.$param1;
// });

Route::get('/jabatan_struktural/store', function () {
    return 'Silahkan pilih jabatan';
})->name('jabstruk.store');

Route::get('/time', function () {
    $currentTime = date('d-m-Y H:i:s');
    return "Waktu saat ini adalah: $currentTime";
});

// routes/web.php

Route::get('/calculate/{param1?}/{param2?}', function (string $param1='', string $param2='') {
    $param1 = request('param1', 0);
    $param2 = request('param2', 0);

    if ($param1 == 0 && $param2 == 0) {
        return "Silahkan masuk parameter";
    } elseif ($param1 == 0) {
        return $param2;
    } elseif ($param2 == 1) {
        return $param1;
    } else {
        return $param1 * $param2;
    }
});

// Route::get('/param/{param1?}/{param2?}', function (string $param1='', string $param2='') {
//     return "Silahkan masuk parameter";
//     if ($param1 == 0) {
//         return 'Parameter 1: '.$param2;
//     } elseif ($param2 == 0) {
//         return 'Parameter 2: '.$param1;
//     } elseif ($param1 != 0 && $param2 != 0) {
//         $result = $param1 * $param2;
//         return 'Hasil perkalian: '.$result;
//     } else {
//         return "Silahkan masuk parameter";
//     }
// });

Route::get('/pegawai/{param1}', [PegawaiController::class,'show']); //after

Route::get('/informasi', [TestingController::class,'informasi']);

Route::get('/enkripsi/{param1}', [TestingController::class,'enkripsi']);

Route::get('/random/{param1}/{param2}', [TestingController::class,'random']);

// /routes/web.php
Route::get('/redirect', [HarbyyyController::class,'index']);
Route::get('/name/{param1}/{param2}', [HarbyyyController::class,'store']);
Route::get('/data/{param1}', [HarbyyyController::class,'show']);
Route::get('/update/{param1}', [HarbyyyController::class,'update']);
Route::get('/delete/{param1}', [HarbyyyController::class,'delete']);

Route::get('/redirect', [HomeController::class,'index']);
Route::get('/home', [HomeController::class,'index']);

Route::post('/home/signup', [HomeController::class,'signup']);

Route::get('/auth', [AuthController::class,'index'])->name('halaman-login');
Route::post('/auth/login', [AuthController::class,'login']);

Route::get('/home/{param1}', [HomeController::class,'redirectTo']);

Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::get('Pelanggan', [PelangganController::class,'index'])->name('pelanggan.list');
Route::get('Pelanggan/create',[PelangganController::class,'create'])->name('pelanggan.create');
Route::post('Pelanggan/store',[PelangganController::class,'store'])->name('pelanggan.store');


