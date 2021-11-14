<?php

use App\Http\Controllers\AccContorller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BadanUsahaController;
use App\Http\Controllers\dpalBadanUsaha;
use App\Http\Controllers\dpalBadanUsahaController;
use App\Http\Controllers\dpalPeroranganController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengadaanBarangController;
use App\Http\Controllers\PeroranganController;
use App\Http\Controllers\SupplierBarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SupplierStatusController;
use App\Http\Controllers\warekPengadaanBarang;
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

Route::prefix('auth')->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/registrasi', [AuthController::class, 'registrasi'])->name('auth.registrasi');
    Route::get('/forget', [AuthController::class, 'forget'])->name('auth.forget');
});

Route::prefix('home')->group(function(){
    Route::get('/index', [HomeController::class, 'index'])->name('home.index');
    Route::get('/about', [HomeController::class, 'about'])->name('home.about');
    Route::get('/tataCara', [HomeController::class, 'tataCara'])->name('home.tataCara');
    Route::get('/faq', [HomeController::class, 'faq'])->name('home.faq');
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
    Route::get('/detailSelesai', [SupplierStatusController::class, 'detailSelesai'])->name('supplier.status.detailSelesai');
    Route::get('/detailSubmit', [SupplierStatusController::class, 'detailSubmit'])->name('supplier.status.detailSubmit');
});

// Route::prefix('supplier/status/acc')->group(function (){
//     Route::get('/index', [AccContorller::class, 'index'])->name('supplier.status.acc.index');
//     Route::get('/detail', [AccContorller::class, 'detail'])->name('supplier.status.acc.detail');
// });

Route::prefix('warek/pengadaanBarang')->group(function (){
    Route::get('/index', [warekPengadaanBarang::class, 'index'])->name('warek.pengadaanBarang.index');
    Route::get('/create', [warekPengadaanBarang::class, 'create'])->name('warek.pengadaanBarang.create');
    Route::get('/detail', [warekPengadaanBarang::class, 'detail'])->name('warek.pengadaanBarang.detail');
    Route::get('/editTahap', [warekPengadaanBarang::class, 'editTahap'])->name('warek.pengadaanBarang.editTahap');
    Route::get('/detailTahap', [warekPengadaanBarang::class, 'detailTahap'])->name('warek.pengadaanBarang.detailTahap');
    Route::get('/pengumumanPengadaan', [warekPengadaanBarang::class, 'pengumumanPengadaan'])->name('warek.pengadaanBarang.pengumumanPengadaan');
    Route::get('/pesertaPengadaan', [warekPengadaanBarang::class, 'pesertaPengadaan'])->name('warek.pengadaanBarang.pesertaPengadaan');
    Route::get('/pesertaEvaluasi', [warekPengadaanBarang::class, 'pesertaEvaluasi'])->name('warek.pengadaanBarang.pesertaEvaluasi');
    Route::get('/detailPesertaPengadaan', [warekPengadaanBarang::class, 'detailPesertaPengadaan'])->name('warek.pengadaanBarang.detailPesertaPengadaan');
    Route::get('/detailProdukPesertaPengadaan', [warekPengadaanBarang::class, 'detailProdukPesertaPengadaan'])->name('warek.pengadaanBarang.detailProdukPesertaPengadaan');
    Route::get('/hasilEvaluasi', [warekPengadaanBarang::class, 'hasilEvaluasi'])->name('warek.pengadaanBarang.hasilEvaluasi');
    Route::get('/editHasilEvaluasi', [warekPengadaanBarang::class, 'editHasilEvaluasi'])->name('warek.pengadaanBarang.editHasilEvaluasi');
    Route::get('/pemenang', [warekPengadaanBarang::class, 'pemenang'])->name('warek.pengadaanBarang.pemenang');
});

Route::prefix('dpal/pengadaanBarang')->group(function (){
    Route::get('/index', [PengadaanBarangController::class, 'index'])->name('dpal.pengadaanBarang.index');
    Route::get('/create', [PengadaanBarangController::class, 'create'])->name('dpal.pengadaanBarang.create');
    Route::get('/detail', [PengadaanBarangController::class, 'detail'])->name('dpal.pengadaanBarang.detail');
    Route::get('/editTahap', [PengadaanBarangController::class, 'editTahap'])->name('dpal.pengadaanBarang.editTahap');
    Route::get('/detailTahap', [PengadaanBarangController::class, 'detailTahap'])->name('dpal.pengadaanBarang.detailTahap');
    Route::get('/pengumumanPengadaan', [PengadaanBarangController::class, 'pengumumanPengadaan'])->name('dpal.pengadaanBarang.pengumumanPengadaan');
    Route::get('/pesertaPengadaan', [PengadaanBarangController::class, 'pesertaPengadaan'])->name('dpal.pengadaanBarang.pesertaPengadaan');
    Route::get('/pesertaEvaluasi', [PengadaanBarangController::class, 'pesertaEvaluasi'])->name('dpal.pengadaanBarang.pesertaEvaluasi');
    Route::get('/detailPesertaPengadaan', [PengadaanBarangController::class, 'detailPesertaPengadaan'])->name('dpal.pengadaanBarang.detailPesertaPengadaan');
    Route::get('/detailProdukPesertaPengadaan', [PengadaanBarangController::class, 'detailProdukPesertaPengadaan'])->name('dpal.pengadaanBarang.detailProdukPesertaPengadaan');
    Route::get('/hasilEvaluasi', [PengadaanBarangController::class, 'hasilEvaluasi'])->name('dpal.pengadaanBarang.hasilEvaluasi');
    Route::get('/editHasilEvaluasi', [PengadaanBarangController::class, 'editHasilEvaluasi'])->name('dpal.pengadaanBarang.editHasilEvaluasi');
    Route::get('/pemenang', [PengadaanBarangController::class, 'pemenang'])->name('dpal.pengadaanBarang.pemenang');
});


Route::prefix('dpal/badanUsaha')->group(function (){
    Route::get('/index', [dpalBadanUsahaController::class, 'index'])->name('dpal.badanUsaha.index');
    Route::get('/detailBadanUsaha', [dpalBadanUsahaController::class, 'detailBadanUsaha'])->name('dpal.badanUsaha.detailBadanUsaha');
});

Route::prefix('dpal/perorangan')->group(function (){
    Route::get('/index', [dpalPeroranganController::class, 'index'])->name('dpal.perorangan.index');
    Route::get('/detailPerorangan', [dpalPeroranganController::class, 'detailPerorangan'])->name('dpal.perorangan.detailPerorangan');
});

Route::prefix('warek/badanUsaha')->group(function (){
    Route::get('/index', [BadanUsahaController::class, 'index'])->name('warek.badanUsaha.index');
    Route::get('/detailBadanUsaha', [BadanUsahaController::class, 'detailBadanUsaha'])->name('warek.badanUsaha.detailBadanUsaha');
});

Route::prefix('warek/perorangan')->group(function (){
    Route::get('/index', [PeroranganController::class, 'index'])->name('warek.perorangan.index');
    Route::get('/detailPerorangan', [PeroranganController::class, 'detailPerorangan'])->name('warek.perorangan.detailPerorangan');
});

