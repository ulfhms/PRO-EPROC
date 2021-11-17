@extends('layouts/main-layout')
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
      <td><div class="badge badge-success text-decoration-none">ACC</div></td>
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
      <th scope="row">Jumlah Item</th>
      <td>10</td>
    </tr>
    <tr>
      <th scope="row">Harga Penawaran</th>
      <td>Rp 5.000.000,-</td>
    </tr>
    <tr>
      <th scope="row">Harga Terkoreksi</th>
      <td>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan harga yang sudah disepakati bersama DPAL UMSIDA. Bisa menjadi harga akhir kesepakatan">
      </td>
    </tr>
    <tr>
      <th scope="row">Selisih</th>
      <td>-----</td>
    </tr>
    <tr>
      <th scope="row">Total Pembayaran</th>
      <td>Jumlah dari harga semua item berdasarkan Harga Terkoreksi.</td>
    </tr>
  </tbody>
</table>
<div scope="row" class="d-flex flex-row-reverse bd-highlight">
  <button class="btn btn-sm btn-primary p-2 bd-highlight"><a href="{{ route('supplier.status.index') }}" style="color:white; text-decoration:none">Simpan</button>
</div>
@endsection
