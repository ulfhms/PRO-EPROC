@extends('layouts/supplier/main-layout')
@section('title', 'Pengadaan Kursi Kantor untuk Laboratorium Komputer')
@section('content')
<table class="table">
  <tbody>
    <tr>
      <th scope="row">Kode</th>
      <td class="fw-bold">PBA-0001</td>
    </tr>
    <tr>
      <th scope="row">Status</th>
      <td><div class="badge badge-success text-decoration-none">Acc</div></td>
    </tr>
    <tr>
      <th scope="row">Nama Paket</th>
      <td>Pengadaan Komputer dan Serve untuk Laboratorium Komputer</td>
    </tr>
    <tr>
      <th scope="row">Barang</th>
      <td>Komputer</td>
    </tr>
    <tr>
      <th scope="row">Jumlah</th>
      <td>10</td>
    </tr>
    <tr>
      <th scope="row">Harga Penawaran</th>
      <td>Rp 50.000.000,-</td>
    </tr>
    <tr>
      <th scope="row">Harga Terkoreksi</th>
      <td>Rp 45.000.000,-</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>
        <button class="btn btn-sm btn-primary">Simpan</button>
      </td>
    </tr>
  </tbody>
</table>
@endsection
