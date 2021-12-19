@extends('layouts/main-layout')
@section('title','Tambah Pengadaan Barang')
@section('content')
<form action="{{ route('dpal.pengadaanBarang.store') }}" method="POST">
  @csrf
  <div class="bg-primary text-center text-white fw-bold p-2 mb-3">Tambah Pengadaan Barang</div>
  <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="nama_kegiatan">
    <option value="" selected>Pilih pengadaan barang yang ada</option>
    @foreach ($budjets as $budjet)
      <option value="{{ $budjet->id }}">{{ ucwords($budjet->nama_kegiatan) }} | {{  ucwords($budjet->unit_kerja_pengusul) }}</option>
    @endforeach
  </select>
  <input type="hidden" name="status_pengadaan" value="ON">
  <div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-sm btn-primary mt-3">Simpan</button>
  </div>
</form>
@endsection