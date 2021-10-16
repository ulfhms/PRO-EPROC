@extends('layouts/supplier/main-layout')
@section('title', 'Daftar Barang')
@section('content')
    <h5 class="btn btn-sm btn-warning fw-bold fs-5">Daftar Barang</h5>
    <div class="d-flex justify-content-end mb-2">
        <a href="#" class="btn btn-sm btn-primary">Tambah</a>
    </div>
    <div class="d-flex justify-content-between flex-wrap">
        <div class="card mb-3" style="width: 10rem;">
            <img src="{{ asset('image/kursi.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="card-text fs-6">Stok : 999</span><br>
                <span class="card-title fw-bold">Kursi Kantor Direksi 8899</span><br>
                <span class="card-text text-primary">Rp 399.000</span>
                <div class="d-flex justify-content-between mt-2">
                    <a href="{{ route('supplier.barang.detail') }}" class="btn btn-sm btn-primary">Detail</a>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="width: 10rem;">
            <img src="{{ asset('image/kursi.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="card-text fs-6">Stok : 999</span><br>
                <span class="card-title fw-bold">Kursi Kantor Direksi 8899</span><br>
                <span class="card-text text-primary">Rp 399.000</span>
                <div class="d-flex justify-content-between mt-2">
                    <a href="#" class="btn btn-sm btn-primary">Detail</a>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="width: 10rem;">
            <img src="{{ asset('image/kursi.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="card-text fs-6">Stok : 999</span><br>
                <span class="card-title fw-bold">Kursi Kantor Direksi 8899</span><br>
                <span class="card-text text-primary">Rp 399.000</span>
                <div class="d-flex justify-content-between mt-2">
                    <a href="#" class="btn btn-sm btn-primary">Detail</a>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="width: 10rem;">
            <img src="{{ asset('image/kursi.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="card-text fs-6">Stok : 999</span><br>
                <span class="card-title fw-bold">Kursi Kantor Direksi 8899</span><br>
                <span class="card-text text-primary">Rp 399.000</span>
                <div class="d-flex justify-content-between mt-2">
                    <a href="#" class="btn btn-sm btn-primary">Detail</a>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="width: 10rem;">
            <img src="{{ asset('image/kursi.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="card-text fs-6">Stok : 999</span><br>
                <span class="card-title fw-bold">Kursi Kantor Direksi 8899</span><br>
                <span class="card-text text-primary">Rp 399.000</span>
                <div class="d-flex justify-content-between mt-2">
                    <a href="#" class="btn btn-sm btn-primary">Detail</a>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="width: 10rem;">
            <img src="{{ asset('image/kursi.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="card-text fs-6">Stok : 999</span><br>
                <span class="card-title fw-bold">Kursi Kantor Direksi 8899</span><br>
                <span class="card-text text-primary">Rp 399.000</span>
                <div class="d-flex justify-content-between mt-2">
                    <a href="#" class="btn btn-sm btn-primary">Detail</a>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection