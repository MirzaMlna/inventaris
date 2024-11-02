<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/admin', [AdminController::class, 'index']);

//routing crud Barang
Route::get('/admin/barang', [AdminController::class, 'barang']); //ini untuk menampilkan data
Route::get('/admin/barang/tambah', [AdminController::class, 'tambah_barang']); //ini untuk menampilkan form tambah
Route::get('/admin/barang/edit/{id}', [AdminController::class, 'edit_barang']); //ini untuk menampilkan form edit
Route::get('/admin/barang/delete/{id}', [AdminController::class, 'delete_barang']); //ini untuk menghapus data
Route::post('/admin/barang/simpan', [AdminController::class, 'simpan_barang']); //ini untuk menyimpan data
Route::post('/admin/barang/update/{id}', [AdminController::class, 'update_barang']); //ini untuk mengupdate data

Route::get('/kasir', function () {
    return view('layouts.master');
});