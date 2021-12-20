@extends('layouts/main-layout')
@section('title', 'Tambah Barang')
@section('content')

<h5 class="bg-warning p-2 rounded text-center">Tambah Paket Pengadaan</h5>
<br>
<form action="{{ route('supplier.pengadaanBarang.store') }}" method="post" enctype="multipart/form-data"> 
  @csrf
<div class="container">
  <div class="row row-cols-2">
    <div class="col">
      <label  class="mb-3">Kode dan Nama Pengadaan: </label>
      <div>
        <select class="form-select" name="pengadaan_id" aria-label="Default select example">
          <option selected disabled >Pilih Pengadaan</option>
          @foreach ($pengadaans as $pengadaan)
          <option value="{{ $pengadaan->id }}">{{ ucwords($pengadaan->budjet->nama_kegiatan) }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="col">
      <label  class="mb-3">Harga Penawaran: </label>
      <div>
        <input type="number" name="harga_penawaran" class="form-control" id="exampleInputPrice" aria-describedby="priceHelp"><br>
      </div>
    </div>
    <div class="col">
      <label for="formFileSm" class="form-label">File Proposal: </label>
      <div>
        <input class="form-control form-control-sm" id="formFileSm" type="file" name="proposal">
      </div>
    </div>
    <div class="col">
      <label  class="mb-3">Harga Terkoreksi: </label>
      <div>
        <fieldset disabled>
        <input type="number" name="harga_terkoreksi" class="form-control" id="exampleInputPrice" aria-describedby="priceHelp" placeholder="Kolom hanya bisa diisi saat harga sudah disepakati!">
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
</form>

@endsection
