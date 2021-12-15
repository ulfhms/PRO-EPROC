@extends('layouts/main-layout')
@section('title','Jasa Konsultasi Perorangan')
@section('content')
<h5 class="bg-warning p-2 rounded col-lg-6 col-12">Daftar Penyedia Terseleksi (DPT)</h5>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Bidang Usaha</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a href="{{ route('dpal.perorangan.detailPerorangan') }}">Budi Hartono</a></td>
      <td>Pengadaan Barang Alat Kesehatan</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Melia Wati</td>
      <td>Pengadaan Barang Elektikal</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Joko Susilo</td>
      <td>Jasa Konstruksi Bangunan</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Siti Munawaroh</td>
      <td>Jasa Konstruksi Bangunan</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Junaidi</td>
      <td>Jasa Konstruksi Bangunan</td>
    </tr>
  </tbody>
</table>
@endsection