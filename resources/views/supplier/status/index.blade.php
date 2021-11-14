@extends('layouts/supplier/main-layout')
@section('title', 'Status')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Paket</th>
      <th class="d-flex justify-content-center">Tahap</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a href="{{ route('supplier.status.detailSubmit') }}">Pengadaan Komputer dan Serve untuk Laboratorium Komputer</a></td>
      <td class="text-center"><a href="#" class="badge badge-secondary text-decoration-none">Submited</a></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td><a href="{{ route('supplier.status.detailProses') }}">Pengadaan Komputer dan Serve untuk Laboratorium Komputer</a></td>
      <td class="text-center"><a href="#" class="badge badge-warning text-decoration-none">Evaluasi</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><a href="{{ route('supplier.status.detailAcc') }}">Pengadaan Komputer dan Serve untuk Laboratorium Komputer</a></td>
      <td class="text-center"><a href="#" class="badge badge-success text-decoration-none"> ACC</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><a href="{{ route('supplier.status.detailTolak') }}">Pengadaan Komputer dan Serve untuk Laboratorium Komputer</a></td>
      <td class="text-center"><a href="#" class="badge badge-danger text-decoration-none">Tolak</a></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><a href="{{ route('supplier.status.detailValidasi') }}">Pengadaan Komputer dan Serve untuk Laboratorium Komputer</a></td>
      <td class="text-center"><a href="#" class="badge badge-info text-decoration-none">Validasi</a></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td><a href="{{ route('supplier.status.detailSelesai') }}">Pengadaan Komputer dan Serve untuk Laboratorium Komputer</a></td>
      <td class="text-center"><a href="#" class="badge badge-primary text-decoration-none">Selesai</a></td>
    </tr>
  </tbody>
</table>
@endsection