@extends('layouts/warek/main-layout')
@section('title','Tambah Pengadaan Barang')
@section('content')
<div class="bg-primary text-center text-white fw-bold p-2 mb-3">Tambah Pengadaan Barang</div>
<select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Pilih pengadaan barang yang ada</option>
  <option value="1">PBA - 0001 Pengadaan Komputer dan Serve untuk Laboratorium Komputer</option>
  <option value="2">PBA - 0002 Pengadaan Mesin CNC untuk Laboratorium Mesin</option>
  <option value="3">...</option>
</select>
@endsection