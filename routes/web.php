<?php

use App\Http\Controllers\SupplierBarangController;
use App\Http\Controllers\SupplierController;
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
});

Route::prefix('supplier/barang')->group(function (){
    Route::get('/profile', [SupplierBarangController::class, 'index'])->name('supplier.barang.profile');
});
