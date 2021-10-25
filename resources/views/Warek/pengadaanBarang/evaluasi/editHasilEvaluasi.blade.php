@extends('layouts/warek/main-layout')
@section('title', 'CV Merah Putih')
@section('content')

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
      <td><div class="btn btn-sm btn-primary">ON</div></td>
    </tr>
    <tr>
      <th scope="row">Nama</th>
      <td>CV Merah Putih</td>
    </tr>
    <tr>
      <th scope="row">Unit Kerja Pengusul</th>
      <td>Fakultas Psikologi dan Ilmu Pendidikan</td>
    </tr>
  </tbody>
</table>
<div class="mb-3 ms-1">
  <label for="exampleFormControlTextarea1" class="form-label fw-bold">Evaluasi</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
</div>
<div class="d-flex justify-content-end">
  <button class="btn btn-sm btn-primary">Simpan</button>
</div>
@endsection