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
      <td><div class="badge badge-primary text-decoration-none">Validasi</div></td>
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
    <tr>
      <th scope="row"></th>
      <td>
        <button class="btn btn-sm btn-danger"><a href="{{ route('supplier.status.index') }}" style="color:white; text-decoration:none">Gagal</button>
        <button class="btn btn-sm btn-success"><a href="{{ route('supplier.status.detailSelesai') }}" style="color:white; text-decoration:none">Lunas</button>
      </td>
    </tr>
  </tbody>
</table>
@endsection
