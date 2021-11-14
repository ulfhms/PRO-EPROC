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
      <td><div class="badge badge-danger text-decoration-none">Tolak</div></td>
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
    <tr class="table-danger">
    <th>Alasan</th>
    <td>
        Maaf, pengajuan Anda kami tolak karena setelah dikoreksi lebih lanjut, produk ditawarkan kurang efektif untuk memenuhi keperluan kampus.
    </td> 
  </tbody>
</table>
<div scope="row" class="d-flex flex-row-reverse bd-highlight">
    <button class="btn btn-sm btn-primary p-2 bd-highlight"><a href="{{ route('supplier.status.index') }}" style="color:white; text-decoration:none">Mengerti</button>
</div>

@endsection
