@extends('layouts/dpal/main-layout')
@section('title','Peserta')
@section('content')
@include('dpal/pengadaanBarang/navbarPengadaan')
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Peserta</th>
      <th scope="col">NPWP</th>
      <th scope="col">Harga Penawaran</th>
      <th scope="col">Harga Terkoreksi</th>
      <th scope="col">Selisih</th>
      <th scope="col">Evaluasi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a href="{{ route('dpal.pengadaanBarang.detailPesertaPengadaan') }}">CV Merah Putih</a></td>
      <td>01.234.567.8-123.000</td>
      <td>Rp 70.000.000</td>
      <td>Rp 65.000.000</td>
      <td>Rp 5.000.000</td>
      <td class="text-center">
        <a href="{{ route('dpal.pengadaanBarang.editHasilEvaluasi') }}" class="btn btn-sm btn-primary"><i class="far fa-edit"></a></i>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>CV Kartika Raya</td>
      <td>01.234.567.8-123.001</td>
      <td>Rp 75.000.000</td>
      <td>Rp 70.000.000</td>
      <td>Rp 5.000.000</td>
      <td class="text-center"><a href="#" class="btn btn-sm btn-primary"><i class="far fa-edit"></a></i></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >CV Medali</td>
      <td>01.234.567.8-123.002</td>
      <td>Rp 65.000.000</td>
      <td>Rp 60.000.000</td>
      <td>Rp 5.000.000</td>
      <td class="text-center"><a href="#" class="btn btn-sm btn-primary"><i class="far fa-edit"></a></i></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td >CV Permata</td>
      <td>01.234.567.8-123.003</td>
      <td>Rp 60.000.000</td>
      <td>Rp 55.000.000</td>
      <td>Rp 5.000.000</td>
      <td class="text-center"><a href="#" class="btn btn-sm btn-primary"><i class="far fa-edit"></a></i></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td >CV Murah Hati</td>
      <td>01.234.567.8-123.004</td>
      <td>Rp 50.000.000</td>
      <td>Rp 50.000.000</td>
      <td>Rp 0</td>
      <td class="text-center"><a href="#" class="btn btn-sm btn-primary"><i class="far fa-edit"></a></i></td>
    </tr>
  </tbody>
</table>
@endsection