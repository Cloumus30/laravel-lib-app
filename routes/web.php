<?php

use App\Http\Controllers\bukuController;
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

Route::get('/buku',[bukuController::class,'semuaBuku']);
Route::get('/buku/{id}',[bukuController::class,'satuBuku']);

Route::post('/buku-tambah',[bukuController::class,'tambahBuku']);
Route::post('/buku-update/{id}',[bukuController::class,'updateBuku']);
Route::delete('/buku-hapus/{id}',[bukuController::class, 'hapusBuku']);
