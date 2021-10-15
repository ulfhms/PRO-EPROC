@extends('layouts/warek/main-layout')
@section('title','Pengadaan Barang / Alat')
@section('content')
<div class="row">
  <div class="col-sm-12 col-lg-3">
    <h6 class="bg-warning rounded p-2 text-center fw-bold">Pengadaan Barang / Alat</h6>
  </div>
</div>
<table class="table overflow-auto table-responsive">
  <thead>
    <tr>
      <th scope="col">KODE</th>
      <th scope="col">NAMA PAKET</th>
      <th scope="col">UNIT KERJA PENGUSUL</th>
      <th scope="col">TAHAP</th>
      <th scope="col">HPS</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">PBA - 0001</th>
      <td><a href="{{ route('warek.pengadaanBarang.pengumumanPengadaan') }}">Pengadaan Komputer dan Serve untuk Laboratorium Komputer</a></td>
      <td>Fakultas Psikologi dan Ilmu Pendidikan</td>
      <td> <a href="#" class="btn badge bg-primary">Proses</a></td>
      <td>Rp. 100.000.000,-</td>
      <td><a href="{{ route('warek.pengadaanBarang.editTahap') }}" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a></td>
    </tr>
    <tr>
      <th scope="row">PBA - 0002</th>
      <td><a href="">Pengadaan Mesin CNC untuk Laboratorium Mesin</a></td>
      <td>Fakultas sains dan teknologi</td>
      <td><a href="#" class="btn badge bg-success">Selesai</a></td>
      <td>Rp. 600.000.000,-</td>
      <td><a href="#" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a></td>
    </tr>
  </tbody>
</table>
@endsection