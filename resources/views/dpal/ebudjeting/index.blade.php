@extends('layouts/main-layout')
@section('title','E-Budjeting')
@section('content')
<h5 class="bg-warning p-2 rounded col-lg-6 col-12">
  Penyusunan Rencana Kegiatan dan Anggaran
</h5>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kegiatan</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a href="{{ route('dpal.perorangan.detailPerorangan') }}">Budi Hartono</a></td>
      <td>Pengadaan Barang Alat Kesehatan</td>
    </tr>
  </tbody>
</table>
@endsection