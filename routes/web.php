<?php

use App\Http\Controllers\AccContorller;
use App\Http\Controllers\BadanUsahaController;
use App\Http\Controllers\PengadaanBarangController;
use App\Http\Controllers\PeroranganController;
use App\Http\Controllers\SupplierBarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SupplierStatusController;
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

Route::prefix('supplier')->group(function (){
    Route::get('/profile', [SupplierController::class, 'index'])->name('supplier.profile');
    Route::get('/editProfile', [SupplierController::class, 'editProfile'])->name('supplier.editProfile');
});

Route::prefix('supplier/barang')->group(function (){
    Route::get('/index', [SupplierBarangController::class, 'index'])->name('supplier.barang.index');
    Route::get('/detail', [SupplierBarangController::class, 'detail'])->name('supplier.barang.detail');
    Route::get('/create', [SupplierBarangController::class, 'create'])->name('supplier.barang.create');
    Route::get('/edit', [SupplierBarangController::class, 'edit'])->name('supplier.barang.edit');
});

Route::prefix('supplier/status')->group(function (){
    Route::get('/index', [SupplierStatusController::class, 'index'])->name('supplier.status.index');
    Route::get('/detailProses', [SupplierStatusController::class, 'detailProses'])->name('supplier.status.detailProses');
    Route::get('/detailAcc', [SupplierStatusController::class, 'detailAcc'])->name('supplier.status.detailAcc');
    Route::get('/detailTolak', [SupplierStatusController::class, 'detailTolak'])->name('supplier.status.detailTolak');
    Route::get('/detailValidasi', [SupplierStatusController::class, 'detailValidasi'])->name('supplier.status.detailValidasi');
});

// Route::prefix('supplier/status/acc')->group(function (){
//     Route::get('/index', [AccContorller::class, 'index'])->name('supplier.status.acc.index');
//     Route::get('/detail', [AccContorller::class, 'detail'])->name('supplier.status.acc.detail');
// });

Route::prefix('warek/pengadaanBarang')->group(function (){
    Route::get('/index', [PengadaanBarangController::class, 'index'])->name('warek.pengadaanBarang.index');
    Route::get('/editTahap', [PengadaanBarangController::class, 'editTahap'])->name('warek.pengadaanBarang.editTahap');
    Route::get('/detailTahap', [PengadaanBarangController::class, 'detailTahap'])->name('warek.pengadaanBarang.detailTahap');
    Route::get('/pengumumanPengadaan', [PengadaanBarangController::class, 'pengumumanPengadaan'])->name('warek.pengadaanBarang.pengumumanPengadaan');
    Route::get('/pesertaPengadaan', [PengadaanBarangController::class, 'pesertaPengadaan'])->name('warek.pengadaanBarang.pesertaPengadaan');
    Route::get('/detailPesertaPengadaan', [PengadaanBarangController::class, 'detailPesertaPengadaan'])->name('warek.pengadaanBarang.detailPesertaPengadaan');
    Route::get('/hasilEvaluasi', [PengadaanBarangController::class, 'hasilEvaluasi'])->name('warek.pengadaanBarang.hasilEvaluasi');
    Route::get('/pemenang', [PengadaanBarangController::class, 'pemenang'])->name('warek.pengadaanBarang.pemenang');
});

Route::prefix('warek/badanUsaha')->group(function (){
    Route::get('/index', [BadanUsahaController::class, 'index'])->name('warek.badanUsaha.index');
    Route::get('/detailBadanUsaha', [BadanUsahaController::class, 'detailBadanUsaha'])->name('warek.badanUsaha.detailBadanUsaha');
});

Route::prefix('warek/perorangan')->group(function (){
    Route::get('/index', [PeroranganController::class, 'index'])->name('warek.perorangan.index');
    Route::get('/detailPerorangan', [PeroranganController::class, 'detailPerorangan'])->name('warek.perorangan.detailPerorangan');
});

