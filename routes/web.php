<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gurucontroller;
use App\Http\Controllers\laporancontroller;
use App\Http\Controllers\siswacontroller;
use App\Http\Controllers\pelanggarancontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('layout/admin');
});

Route::get('/datasiswa', function () {
    return view('datasiswa');
});

Route::get('/jenispelanggaran', function () {
    return view('jenispelanggaran');
});

Route::get('/dataguru', function () {
    return view('dataguru');
});


Route::get('datasiswa',[siswacontroller::class,'index']);

Route::get('siswa/add_data',[siswacontroller::class,'create']);

Route::post('siswa/add_data',[siswacontroller::class,'store']);

Route::delete('siswa/destroy/{id}',[siswacontroller::class,'destroy']);

Route::get('siswa/detail/{id}',[siswacontroller::class,'show']);

Route::get('/editsiswa/update/{id}',[siswacontroller::class,'edit']);

Route::patch('/editsiswa/update/{id}',[siswacontroller::class,'update']);



Route::get('jenispelanggaran',[pelanggarancontroller::class,'index']);

Route::get('pelanggaran/add_data',[pelanggarancontroller::class,'create']);

Route::post('pelanggaran/add_data',[pelanggarancontroller::class,'store']);

Route::delete('pelanggaran/destroy/{id}',[pelanggarancontroller::class,'destroy']);

Route::get('pelanggaran/detail/{id}',[pelanggarancontroller::class,'show']);

Route::get('/editpelanggaran/update/{id}',[pelanggarancontroller::class,'edit']);

Route::patch('/editpelanggaran/update/{id}',[pelanggarancontroller::class,'update']);


Route::get('dataguru',[gurucontroller::class,'index']);

Route::get('guru/add_data',[gurucontroller::class,'create']);

Route::post('guru/add_data',[gurucontroller::class,'store']);

Route::delete('guru/destroy/{id}',[gurucontroller::class,'destroy']);

Route::get('guru/detail/{id}',[gurucontroller::class,'show']);

Route::get('/editguru/update/{id}',[gurucontroller::class,'edit']);

Route::patch('/editguru/update/{id}',[gurucontroller::class,'update']);


Route::get('datalaporan',[laporancontroller::class,'index']);

Route::get('laporan/add_data',[laporancontroller::class,'create']);

Route::post('laporan/add_data',[laporancontroller::class,'store']);

Route::delete('laporan/destroy/{id}',[laporancontroller::class,'destroy']);

Route::get('laporan/detail/{id}',[laporancontroller::class,'show']);

Route::get('/editlaporan/update/{id}',[laporancontroller::class,'edit']);

Route::patch('/editlaporan/update/{id}',[laporancontroller::class,'update']);