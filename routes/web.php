<?php

use App\Http\Controllers\Masyarakat_controller;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\Registrasi_controller;
use App\Http\Controllers\TanggapanController;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\Route;

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


Route::get('/',function(){
    return view ('welcome');
});
// Data Masyarakat
Route::get('Dashboard',[Masyarakat_controller::class,'index']);

// Data Registrasi
Route::get('registrasi',[Masyarakat_controller::class,'registrasi']);
Route::post('simpan',[Masyarakat_controller::class,'simpan']); // <-- untuk mengirim data ke server
Route::get('registrasiPetu',[PetugasController::class,'registrasiPetu']);
Route::post('simpanpetu',[PetugasController::class,'simpanpetu']); // <-- untuk mengirim data ke server

// Login
Route::get('login',[Masyarakat_controller::class,'loginadmin']);
Route::post('simpanLogin',[Masyarakat_controller::class,'cekLogin']); // <-- untuk mengirim data ke server
Route::get('loginpetu',[PetugasController::class,'loginpetugas']);
Route::post('simpanLoginPetu',[PetugasController::class,'cekLoginPetu']); // <-- untuk mengirim data ke server
Route::get('logoutpetu',[PetugasController::class,'logoutpetu']);

//Pengaduan
Route::get('Mengadu',[PengaduanController::class,'pengaduan']);
Route::post('simpanPengaduan',[PengaduanController::class,'simpanPengaduan']);

//Tanggapan
Route::get('Nanggepin',[TanggapanController::class,'tanggapan']);
Route::post('simpanTanggapan',[TanggapanController::class,'simpanTanggapan']);

// LoginAdmin
Route::get('loginadmin',[PetugasController::class,'adminLogin']);
Route::post('simpanLoginAdmin',[PetugasController::class,'cekLoginAdmin']); // <-- untuk mengirim data ke server

//DashAdmin
Route::get('DashboardAdmin',[PetugasController::class,'adminDash']);
// Route::get('DashboardAdmin',[PetugasController::class,'adminDash'])->middleware(Admin::class);
//ValdAdmin
Route::get('Validasi',[PetugasController::class,'adminValid']);