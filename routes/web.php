<?php

use App\Http\Controllers\AccContorller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BadanUsahaController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BidangUsahaController;
use App\Http\Controllers\dpalBadanUsaha;
use App\Http\Controllers\dpalBadanUsahaController;
use App\Http\Controllers\dpalPeroranganController;
use App\Http\Controllers\EbudjetingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengadaanBarangController;
use App\Http\Controllers\PeroranganController;
use App\Http\Controllers\SupplierBarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SupplierPengadaanController;
use App\Http\Controllers\SupplierStatusController;
use App\Http\Controllers\ViewFileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::prefix('home')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/about', [HomeController::class, 'about'])->name('home.about');
    Route::get('/tataCara', [HomeController::class, 'tataCara'])->name('home.tataCara');
    Route::get('/faq', [HomeController::class, 'faq'])->name('home.faq');
// });

// Route::prefix('auth')->group(function(){
//     Route::get('/login', [AuthController::class, 'login'])->name('login');
//     Route::post('/proses_login', [AuthController::class, 'proses_login'])->name('auth.proses_login');
//     Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
//     Route::get('/registrasi', [AuthController::class, 'registrasi'])->name('auth.registrasi');
//     Route::post('/prosesRegistrasi', [AuthController::class, 'prosesRegistrasi'])->name('auth.prosesRegistrasi');
//     Route::get('/forget', [AuthController::class, 'forget'])->name('auth.forget');
// });

// auth
    Route::group(['middleware' => ['role:supplier']], function (){
        Route::prefix('supplier')->group(function (){
            Route::get('/profile', [SupplierController::class, 'index'])->name('supplier.profile');
            Route::get('{id}/editProfile', [SupplierController::class, 'editProfile'])->name('supplier.editProfile');
            Route::patch('{id}/updateProfile', [SupplierController::class, 'updateProfile'])->name('supplier.updateProfile');
        });
        
        Route::prefix('supplier/pengandaanBarang')->group(function (){
            Route::get('/index', [SupplierPengadaanController::class, 'index'])->name('supplier.pengadaanBarang.index');
            Route::get('{id}/detail', [SupplierPengadaanController::class, 'detail'])->name('supplier.pengadaanBarang.detail');
            Route::get('/create', [SupplierPengadaanController::class, 'create'])->name('supplier.pengadaanBarang.create');
            Route::post('/store', [SupplierPengadaanController::class, 'store'])->name('supplier.pengadaanBarang.store');
            Route::get('{id}/edit', [SupplierPengadaanController::class, 'edit'])->name('supplier.pengadaanBarang.edit');
            Route::patch('{id}/updateSubmit', [SupplierPengadaanController::class, 'updateSubmit'])->name('supplier.pengadaanBarang.updateSubmit');
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
    });
    Route::group(['middleware' => ['role:dpal']], function (){
        Route::prefix('dpal/pengadaanBarang')->group(function (){
            Route::get('/index', [PengadaanBarangController::class, 'index'])->name('dpal.pengadaanBarang.index');
            Route::get('/create', [PengadaanBarangController::class, 'create'])->name('dpal.pengadaanBarang.create');
            Route::post('/store', [PengadaanBarangController::class, 'store'])->name('dpal.pengadaanBarang.store');
            Route::get('/detail', [PengadaanBarangController::class, 'detail'])->name('dpal.pengadaanBarang.detail');
            Route::get('{id}/edit', [PengadaanBarangController::class, 'edit'])->name('dpal.pengadaanBarang.edit');
            Route::patch('{id}/update', [PengadaanBarangController::class, 'update'])->name('dpal.pengadaanBarang.update');
            Route::get('/detailTahap/{id}', [PengadaanBarangController::class, 'detailTahap'])->name('dpal.pengadaanBarang.detailTahap');
            Route::get('/pengumumanPengadaan/{id}', [PengadaanBarangController::class, 'pengumumanPengadaan'])->name('dpal.pengadaanBarang.pengumumanPengadaan');
            Route::get('/pesertaPengadaan/{id}', [PengadaanBarangController::class, 'pesertaPengadaan'])->name('dpal.pengadaanBarang.pesertaPengadaan');
            Route::patch('/formTolak/{id}', [PengadaanBarangController::class, 'formTolak'])->name('dpal.pengadaanBarang.formTolak');
            Route::patch('/formEvaluasi/{id}', [PengadaanBarangController::class, 'formEvaluasi'])->name('dpal.pengadaanBarang.formEvaluasi');
            Route::get('/pesertaEvaluasi/{id}', [PengadaanBarangController::class, 'pesertaEvaluasi'])->name('dpal.pengadaanBarang.pesertaEvaluasi');
            Route::get('/editHasilEvaluasi/{id}', [PengadaanBarangController::class, 'editHasilEvaluasi'])->name('dpal.pengadaanBarang.editHasilEvaluasi');
            Route::patch('/formDpalKeSupplier/{id}', [PengadaanBarangController::class, 'formDpalKeSupplier'])->name('dpal.pengadaanBarang.formDpalKeSupplier');
            Route::get('/detailPesertaPengadaan/{id}', [PengadaanBarangController::class, 'detailPesertaPengadaan'])->name('dpal.pengadaanBarang.detailPesertaPengadaan');
            Route::get('/detailProdukPesertaPengadaan/{id}', [PengadaanBarangController::class, 'detailProdukPesertaPengadaan'])->name('dpal.pengadaanBarang.detailProdukPesertaPengadaan');
            Route::get('/hasilEvaluasi/{id}', [PengadaanBarangController::class, 'hasilEvaluasi'])->name('dpal.pengadaanBarang.hasilEvaluasi');
            Route::patch('/formPemenang/{id}', [PengadaanBarangController::class, 'formPemenang'])->name('dpal.pengadaanBarang.formPemenang');
            Route::get('/pemenang/{id}', [PengadaanBarangController::class, 'pemenang'])->name('dpal.pengadaanBarang.pemenang');
        });
                    // Route::get('/download/{filename}', [ViewFileController::class,'download']);


        Route::prefix('dpal/badanUsaha')->group(function (){
            Route::get('/index', [dpalBadanUsahaController::class, 'index'])->name('dpal.badanUsaha.index');
            Route::get('/detailBadanUsaha', [dpalBadanUsahaController::class, 'detailBadanUsaha'])->name('dpal.badanUsaha.detailBadanUsaha');
        });
        
        Route::prefix('dpal/perorangan')->group(function (){
            Route::get('/index', [dpalPeroranganController::class, 'index'])->name('dpal.perorangan.index');
            Route::get('/detailPerorangan', [dpalPeroranganController::class, 'detailPerorangan'])->name('dpal.perorangan.detailPerorangan');
        });

        Route::prefix('dpal/bidangUsaha')->group(function(){
            Route::get('/index', [BidangUsahaController::class, 'index'])->name('bingus.index');
            Route::get('/create', [BidangUsahaController::class, 'create'])->name('bingus.create');
            Route::post('/store', [BidangUsahaController::class, 'store'])->name('bingus.store');
            Route::get('/{id}/edit', [BidangUsahaController::class, 'edit'])->name('bingus.edit');
            Route::patch('/{id}/update', [BidangUsahaController::class, 'update'])->name('bingus.update');
            Route::delete('/{id}/destroy', [BidangUsahaController::class, 'destroy'])->name('bingus.delete');
        });

        Route::resource('bank',BankController::class)->names([
            'index' => 'bank.index',
            'create' => 'bank.create',
            'store' => 'bank.store',
            'edit' => 'bank.edit',
            'update' => 'bank.update',
            'destroy' => 'bank.destroy',
        ]);

        Route::prefix('dpal/ebudjeting')->group(function(){
            Route::get('/index', [EbudjetingController::class, 'index'])->name('dpal.ebudjeting.index');
            Route::get('/create', [EbudjetingController::class, 'create'])->name('dpal.ebudjeting.create');
            Route::post('/store', [EbudjetingController::class, 'store'])->name('dpal.ebudjeting.store');
            Route::get('{id}/show', [EbudjetingController::class, 'show'])->name('dpal.ebudjeting.show');
            Route::get('{id}/edit', [EbudjetingController::class, 'edit'])->name('dpal.ebudjeting.edit');
            Route::patch('{id}/update', [EbudjetingController::class, 'update'])->name('dpal.ebudjeting.update');
            Route::delete('{id}/destroy', [EbudjetingController::class, 'destroy'])->name('dpal.ebudjeting.destroy');
        });
    });
    Route::group(['middleware' => ['role:warek']], function (){
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
        
        
        
        Route::prefix('warek/badanUsaha')->group(function (){
            Route::get('/index', [BadanUsahaController::class, 'index'])->name('warek.badanUsaha.index');
            Route::get('/detailBadanUsaha', [BadanUsahaController::class, 'detailBadanUsaha'])->name('warek.badanUsaha.detailBadanUsaha');
        });
        
        Route::prefix('warek/perorangan')->group(function (){
            Route::get('/index', [PeroranganController::class, 'index'])->name('warek.perorangan.index');
            Route::get('/detailPerorangan', [PeroranganController::class, 'detailPerorangan'])->name('warek.perorangan.detailPerorangan');
        });
    });

    Route::get('/download/pengadaanBarang/proposal/{filename}', [ViewFileController::class,'download']);




// Route::prefix('supplier/status/acc')->group(function (){
//     Route::get('/index', [AccContorller::class, 'index'])->name('supplier.status.acc.index');
//     Route::get('/detail', [AccContorller::class, 'detail'])->name('supplier.status.acc.detail');
// });




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
