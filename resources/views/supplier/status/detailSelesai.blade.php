@extends('layouts/supplier/main-layout')
@section('title', 'Pengadaan Kursi Kantor untuk Laboratorium Komputer')
@section('content')
<table class="table">
  <div class="card">
    <div class="card-header bg-info">
      Detail Status
    </div>
    <div class="card-body">
      <h5 class="card-title badge badge-info text-decoration-none">Selesai</h5>
      <p class="card-text"><strong>Selamat, proses pengajuan pengadaan Anda telah selesai dan disetujui oleh DPAL UMSIDA. Terima kasih atas kerjasama dan partisipasi Anda. </strong></p>
    </div>
  </div>
  <tbody>
    <tr>
      <th scope="row">Kode</th>
      <td class="fw-bold">PBA-0001</td>
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
      <td>Rp 5.000.000,-</td>
    </tr>
    <tr>
      <th scope="row">Harga Terkoreksi</th>
      <td>Rp 4.500.000,-</td>
    </tr>
    <tr>
      <th scope="row">Selisih</th>
      <td>Rp.500.000 /item</td>
    </tr>
    <tr>
      <th scope="row">Total Pembayaran</th>
      <td><strong>Rp. 45.000.000</strong></td>
    </tr>
    <tr>
      <th scope="row">Bukti Transaksi</th>
      <td>
        <img src="{{ asset('image/struk.jpg') }}" alt="">
      </td>
    </tr>
  </tbody>
</table>
<div scope="row" class="d-flex flex-row-reverse bd-highlight">
  <button class="btn btn-sm btn-primary p-2 bd-highlight"><a href="{{ route('supplier.status.index') }}" style="color:white; text-decoration:none">Selesai</button>
</div>
@endsection
