@extends('layouts/supplier/main-layout')
@section('title', 'Status')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Paket</th>
      <th scope="col">Tahap</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a href="{{ route('supplier.status.detailProses') }}">Pengadaan Komputer dan Serve untuk Laboratorium Komputer</a></td>
      <td><a href="#" class="badge badge-primary text-decoration-none">Proses</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><a href="{{ route('supplier.status.detailAcc') }}">Pengadaan Komputer dan Serve untuk Laboratorium Komputer</a></td>
      <td><a href="#" class="badge badge-success text-decoration-none">Acc</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><a href="{{ route('supplier.status.detailTolak') }}">Pengadaan Komputer dan Serve untuk Laboratorium Komputer</a></td>
      <td><a href="#" class="badge badge-danger text-decoration-none">Tolak</a></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><a href="{{ route('supplier.status.detailValidasi') }}">Pengadaan Komputer dan Serve untuk Laboratorium Komputer</a></td>
      <td><a href="#" class="badge badge-secondary text-decoration-none">Validasi</a></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><a href="">Pengadaan Komputer dan Serve untuk Laboratorium Komputer</a></td>
      <td><a href="#" class="badge badge-info text-decoration-none">Selesai</a></td>
    </tr>
  </tbody>
</table>
@endsection