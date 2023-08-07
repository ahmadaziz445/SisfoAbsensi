<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('Mahasiswa/absensekarang');});

Route::get('Mahasiswa', function () {return view('Mahasiswa/index');});
Route::get('DataMahasiswa', function () {return view('Mahasiswa/data');});
Route::get('SilabusMahasiswa', function () {return view('Mahasiswa/silabus');});
Route::get('PengumumanMahasiswa', function () {return view('Mahasiswa/pengumuman');});
Route::get('AbsenSekarang', function () {return view('Mahasiswa/absensekarang');});

Route::get('Admin', function () {return view('Admin/index');});