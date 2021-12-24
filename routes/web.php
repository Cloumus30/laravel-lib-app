<?php

use App\Http\Controllers\bukuController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\penerbitController;
use App\Http\Controllers\penulisController;
use App\Http\Controllers\superAdminController;
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

Route::get('/', function () {
    return view('welcome');
});
// Buku get Routes
Route::get('/buku',[bukuController::class,'semuaBuku']);
Route::get('/buku/{id}',[bukuController::class,'satuBuku']);

// SuperAdmin get Routes
Route::get('/super-admin/librarian',[superAdminController::class,'semuaUser']);
Route::get('/super-admin/nonaktif-librarian/{id}',[superAdminController::class,'nonActiveLibrarian']);
Route::get('/super-admin/aktif-librarian/{id}',[superAdminController::class,'activeLibrarian']);

// Penerbit get Routes
Route::get('/penerbit', [penerbitController::class,'semuaPenerbit']);
Route::get('/penerbit/{id}', [penerbitController::class, 'satuPenerbit']);

// Kategori get Routes
Route::get('/kategori-buku',[kategoriController::class, 'semuaKategori']);
Route::get('/kategori-buku/{id}',[kategoriController::class, 'satuKategori']);

// Penulis get Routes
Route::get('/penulis',[penulisController::class,'semuaPenulis']);
Route::get('/penulis/{id}',[penulisController::class,'satuPenulis']);



// #############--------------------####################------------------------#########################
// Buku post Routes
Route::post('/buku-tambah',[bukuController::class,'tambahBuku']);
Route::post('/buku-update/{id}',[bukuController::class,'updateBuku']);
Route::delete('/buku-hapus/{id}',[bukuController::class, 'hapusBuku']);

// SuperAdmin post Routes
Route::post('/super-admin/librarian-tambah',[superAdminController::class, 'tambahLibrarian']);
Route::post('/super-admin/librarian-update/{id}',[superAdminController::class,'updateLibrarian']);
Route::delete('/super-admin/librarian-hapus/{id}',[superAdminController::class, 'hapusLibrarian']);

// Penerbit Post Routes
Route::post('/penerbit-tambah',[penerbitController::class, 'tambahPenerbit']);
Route::post('/penerbit-update/{id}',[penerbitController::class, 'updatePenerbit']);

// Kategori Post Routes
Route::post('/kategori-buku-tambah',[kategoriController::class, 'tambahKategori']);
Route::post('/kategori-buku-update/{id}',[kategoriController::class, 'updateKategori']);

// Penulis Post Routes
Route::post('/penulis-tambah',[penulisController::class, 'tambahPenulis']);
Route::post('/penulis-update/{id}',[penulisController::class, 'updatePenulis']);
