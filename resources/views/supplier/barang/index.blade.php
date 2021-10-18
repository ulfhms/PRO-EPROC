@extends('layouts/supplier/main-layout')
@section('title', 'Daftar Barang')
@section('content')
    <h5 class="btn btn-sm btn-warning fw-bold fs-5">Daftar Barang</h5>
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('supplier.barang.create') }}" class="btn btn-sm btn-primary">Tambah</a>
    </div>
    <div class="d-flex justify-content-between flex-wrap">
        <div class="card mb-3" style="width: 10rem;">
            <img src="{{ asset('image/Komputer.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="card-text fs-6">Stok : 999</span><br>
                <a href="{{ route('supplier.barang.detail') }}" class="card-title fw-bold text-decoration-none text-dark">Komputer </a><br>
                <span class="card-text text-primary">Rp 5.000.000</span>
                <div class="d-flex justify-content-between mt-2">
                    <a href="{{ route('supplier.barang.edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="width: 10rem;">
            <img src="{{ asset('image/Komputer.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="card-text fs-6">Stok : 999</span><br>
                <a href="{{ route('supplier.barang.detail') }}" class="card-title fw-bold text-decoration-none text-dark">Komputer </a><br>
                <span class="card-text text-primary">Rp 5.000.000</span>
                <div class="d-flex justify-content-between mt-2">
                    <a href="{{ route('supplier.barang.edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="width: 10rem;">
            <img src="{{ asset('image/Komputer.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="card-text fs-6">Stok : 999</span><br>
                <a href="{{ route('supplier.barang.detail') }}" class="card-title fw-bold text-decoration-none text-dark">Komputer </a><br>
                <span class="card-text text-primary">Rp 5.000.000</span>
                <div class="d-flex justify-content-between mt-2">
                    <a href="{{ route('supplier.barang.edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="width: 10rem;">
            <img src="{{ asset('image/Komputer.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="card-text fs-6">Stok : 999</span><br>
                <a href="{{ route('supplier.barang.detail') }}" class="card-title fw-bold text-decoration-none text-dark">Komputer </a><br>
                <span class="card-text text-primary">Rp 5.000.000</span>
                <div class="d-flex justify-content-between mt-2">
                    <a href="{{ route('supplier.barang.edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="width: 10rem;">
            <img src="{{ asset('image/Komputer.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="card-text fs-6">Stok : 999</span><br>
                <a href="{{ route('supplier.barang.detail') }}" class="card-title fw-bold text-decoration-none text-dark">Komputer </a><br>
                <span class="card-text text-primary">Rp 5.000.000</span>
                <div class="d-flex justify-content-between mt-2">
                    <a href="{{ route('supplier.barang.edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="width: 10rem;">
            <img src="{{ asset('image/Komputer.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="card-text fs-6">Stok : 999</span><br>
                <a href="{{ route('supplier.barang.detail') }}" class="card-title fw-bold text-decoration-none text-dark">Komputer </a><br>
                <span class="card-text text-primary">Rp 5.000.000</span>
                <div class="d-flex justify-content-between mt-2">
                    <a href="{{ route('supplier.barang.edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="width: 10rem;">
            <img src="{{ asset('image/Komputer.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="card-text fs-6">Stok : 999</span><br>
                <a href="{{ route('supplier.barang.detail') }}" class="card-title fw-bold text-decoration-none text-dark">Komputer </a><br>
                <span class="card-text text-primary">Rp 5.000.000</span>
                <div class="d-flex justify-content-between mt-2">
                    <a href="{{ route('supplier.barang.edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="width: 10rem;">
            <img src="{{ asset('image/Komputer.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="card-text fs-6">Stok : 999</span><br>
                <a href="{{ route('supplier.barang.detail') }}" class="card-title fw-bold text-decoration-none text-dark">Komputer </a><br>
                <span class="card-text text-primary">Rp 5.000.000</span>
                <div class="d-flex justify-content-between mt-2">
                    <a href="{{ route('supplier.barang.edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="width: 10rem;">
            <img src="{{ asset('image/Komputer.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="card-text fs-6">Stok : 999</span><br>
                <a href="{{ route('supplier.barang.detail') }}" class="card-title fw-bold text-decoration-none text-dark">Komputer </a><br>
                <span class="card-text text-primary">Rp 5.000.000</span>
                <div class="d-flex justify-content-between mt-2">
                    <a href="{{ route('supplier.barang.edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
    </div>


{{-- modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title text-white" id="exampleModalLabel">Hapus Barang</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <b>Hapus Barang : </b>Komputer
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
@endsection