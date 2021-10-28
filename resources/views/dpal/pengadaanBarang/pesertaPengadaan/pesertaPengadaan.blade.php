@extends('layouts/warek/main-layout')
@section('title','Peserta')
@section('content')
@include('warek/pengadaanBarang/navbarPengadaan')
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Peserta</th>
      <th scope="col">NPWP</th>
      <th scope="col">Harga Penawaran</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a href="{{ route('warek.pengadaanBarang.detailPesertaPengadaan') }}">CV Merah Putih</a></td>
      <td>01.234.567.8-123.000</td>
      <td>Rp 70.000.000</td>
      <td>
        <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
        <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>CV Kartika Raya</td>
      <td>01.234.567.8-123.001</td>
      <td>Rp 75.000.000</td>
      <td>
        <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
        <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >CV Medali</td>
      <td>01.234.567.8-123.002</td>
      <td>Rp 65.000.000</td>
      <td>
        <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
        <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td >CV Permata</td>
      <td>01.234.567.8-123.003</td>
      <td>Rp 60.000.000</td>
      <td>
        <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
        <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td >CV Murah Hati</td>
      <td>01.234.567.8-123.004</td>
      <td>Rp 50.000.000</td>
      <td>
        <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
        <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
      </td>
    </tr>
  </tbody>
</table>
@endsection