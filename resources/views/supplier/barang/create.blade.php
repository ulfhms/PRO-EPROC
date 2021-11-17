@extends('layouts/main-layout')
@section('title', 'Tambah Barang')
@section('content')

<h5 class="bg-warning p-2 rounded text-center">Tambah Paket Pengadaan</h5>
<br>

<div class="container">
  <div class="row row-cols-2">
    <div class="col">
      <label  class="mb-3">Kode dan Nama Pengadaan: </label>
      <div>
        <select class="form-select" aria-label="Default select example">
          <option selected>PBA-0001 Pengadaan Komputer dan Sever untuk Laboratorium Komputer</option>
          <option value="1">PABA-0002 Pengadaan Mesin CNC untuk Laboratorium Mesin</option>
          <option value="2">---</option>
          <option value="3">--</option>
        </select>
      </div>
    </div>
    <div class="col">
      <label  class="mb-3">Harga Penawaran: </label>
      <div>
        <input type="Price" class="form-control" id="exampleInputPrice" aria-describedby="priceHelp"><br>
      </div>
    </div>
    <div class="col">
      <label for="formFileSm" class="form-label">File Proposal: </label>
      <div>
        <input class="form-control form-control-sm" id="formFileSm" type="file">
      </div>
    </div>
    <div class="col">
      <label  class="mb-3">Harga Terkoreksi: </label>
      <div>
        <fieldset disabled>
        <input type="Price" class="form-control" id="exampleInputPrice" aria-describedby="priceHelp" placeholder="Kolom hanya bisa diisi saat harga sudah disepakati!">
      </div>
    </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="d-flex flex-row-reverse bd-highlight">
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</div>
@endsection
