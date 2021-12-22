<?php

use App\Http\Controllers\bukuController;
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

Route::post('/buku-tambah',[bukuController::class,'tambahBuku']);
Route::post('/buku-update/{id}',[bukuController::class,'updateBuku']);
Route::delete('/buku-hapus/{id}',[bukuController::class, 'hapusBuku']);

// SuperAdmin post Routes
Route::post('/super-admin/librarian-tambah',[superAdminController::class, 'tambahLibrarian']);
