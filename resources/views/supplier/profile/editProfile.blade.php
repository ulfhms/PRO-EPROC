@extends('layouts/main-layout')
@section('title', 'Edit Profile')
@section('content')
<div class="m-2">
  <div class="bg-warning p-1 fw-bold mb-3">Edit Profile Perusahaan</div>
  <div class="mb-3">
    <label for="" class="form-label fw-bold">Nama</label>
    <input type="text" class="form-control" id="" placeholder="Masukkan nama perusahaan">
  </div>
  <div class="mb-3">
    <label for="" class="form-label fw-bold">NPWP</label>
    <input type="text" class="form-control" id="" placeholder="Masukkan NPWP">
  </div>
  <div class="mb-3">
    <label for="" class="form-label fw-bold">Telepon</label>
    <input type="text" class="form-control" id="" placeholder="Masukkan Telepon">
  </div>
  <div class="mb-3">
    <label for="" class="form-label fw-bold">Nara Hubung</label>
    <input type="text" class="form-control" id="" placeholder="Masukkan Nara Hubung">
  </div>
  <div class="mb-3">
    <label for="" class="form-label fw-bold">No Rekening</label>
    <input type="number" class="form-control" id="" placeholder="Masukkan No Rekening">
  </div>
  <div class="mb-3">    
    <label for="" class="form-label fw-bold">Bidang Usaha</label>
    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
      <option selected>Pilih Bidang Usaha</option>
      <option value="1">Pengadaan Barang Alat Kesehatan</option>
      <option value="2">Pengadaan Barang Elektikal</option>
      <option value="3">Jasa Konsultasi Bagunan</option>
      <option value="4">Pengadaan Barang Alat IT</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label fw-bold">Alamat</label>
    <textarea class="form-control" id="" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <label for="formFileSm" class="form-label fw-bold">Foto</label>
    <input class="form-control form-control-sm" id="formFileSm" type="file">
  </div>
  <div class="d-flex justify-content-end">
    <a href="#" class="btn btn-sm btn-primary">Simpan</a>
  </div>
</div>
@endsection
