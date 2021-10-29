@extends('layouts/dpal/main-layout')
@section('title', 'CV Merah Putih')
@section('content')
<div class=" bg-primary p-2 fw-bold text-white text-center fs-5">
  <span class="">Evaluasi</span>
</div>
<table class="table table-hover table-borderless">
  <tbody>
    <tr>
      <th scope="row">Kode</th>
      <td>PBA-001</td>
    </tr>
    <tr>
      <th scope="row">Nama Paket</th>
      <td>Pengadaan Komputer dan Serve untuk Laboratorium Komputer</td>
    </tr>
    <tr>
      <th scope="row">Tahap</th>
      <td><div class="btn btn-sm btn-primary">Evaluasi</div></td>
    </tr>
    <tr>
      <th scope="row">Nama</th>
      <td>CV Merah Putih</td>
    </tr>
    <tr>
      <th scope="row">Unit Kerja Pengusul</th>
      <td>Fakultas Psikologi dan Ilmu Pendidikan</td>
    </tr>
    <tr>
      <th scope="row">Harga Penawaran</th>
      <td>Rp 70.000.000</td>
    </tr>
    <tr>
      <th scope="row">Harga Terkoreksi</th>
      <td>Rp 65.000.000</td>
    </tr>
    <tr>
      <th scope="row">Selisih</th>
      <td>Rp 5.000.000</td>
    </tr>
  </tbody>
</table>
<div class="mb-3 ms-2">
  <label for="exampleFormControlTextarea1" class="form-label fw-bold">Evaluasi</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
</div>
<div class="d-flex justify-content-end">
  <button class="btn btn-sm btn-primary">Simpan</button>
</div>
@endsection