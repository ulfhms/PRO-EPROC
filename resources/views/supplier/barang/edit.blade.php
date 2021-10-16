@extends('layouts/supplier/main-layout')
@section('title', 'Edit Barang')
@section('content')
<h5 class="bg-warning p-2 rounded text-center">Edit Barang</h5>
<div class="mb-3">
  <label for="" class="form-label">Nama Produk</label>
  <input type="text" class="form-control" id="" placeholder="Masukkan Nama Produk">
</div>
<div class="mb-3">
  <label for="" class="form-label">Harga</label>
  <input type="number" class="form-control" id="" placeholder="Masukkan Harga Produk">
</div>
<div class="mb-3">
  <label for="" class="form-label">Stok</label>
  <input type="number" class="form-control" id="" placeholder="Masukkan Stok Produk">
</div>
<div class="mb-3">
  <label for="" class="form-label">Deskripsi</label>
  <textarea class="form-control" id="" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="formFileSm" class="form-label">Foto Barang</label>
  <input class="form-control form-control-sm" id="formFileSm" type="file">
</div>
@endsection
