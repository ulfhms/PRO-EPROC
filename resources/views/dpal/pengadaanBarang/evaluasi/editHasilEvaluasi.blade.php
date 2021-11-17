@extends('layouts/main-layout')
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
      <td>Rp 67.000.000</td>
    </tr>
    <tr>
      <th scope="row">Hasil Penawaran</th>
      <td>Untuk penawaran hanya bisa sampai Rp.67.000.000,-</td>
    </tr>
    <tr>
      <th scope="row">Evaluasi ke Supplier</th>
      <td>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
      </td>
    </tr>
  </tbody>
</table>
<div class="d-flex justify-content-end">
  <button class="btn btn-sm btn-primary">Simpan</button>
</div>
@endsection