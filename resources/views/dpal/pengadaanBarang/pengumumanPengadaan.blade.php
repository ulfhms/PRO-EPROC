@extends('layouts/main-layout')
@section('title', 'Pengadaan Komputer dan Serve untuk Laboratorium Komputer')
@section('content')
{{-- navbar --}}
@include('dpal/pengadaanBarang/navbarPengadaan')
<table class="table mt-4 table-responsive">
  <tbody>
    <tr>
      <th scope="row">Sistem Pengadaan</th>
      <td>Lelang / Tender Sederhana</td>
    </tr>
    {{-- <tr>
      <th scope="row">Kode</th>
      <td>PBO-0001</td>
    </tr> --}}
    <tr>
      <th scope="row">Nama Paket</th>
      <td>{{ ucwords($pengsup->pengadaan->budjet->nama_kegiatan) }}</td>
    </tr>
    <tr>
      <th scope="row">Sumber Dana</th>
      <td>Universitas Muhammadiyah Sidoarjo</td>
    </tr>
    <tr>
      <th scope="row">Tanggal Pengusulan</th>
      <td>{{ date('d-M-Y',strtotime($pengsup->pengadaan->budjet->waktu_mulai)) }}</td>
    </tr>
    <tr>
      <th scope="row">Tanggal Penetapan Sistem Pengadaan</th>
      <td>{{ date('d-M-Y',strtotime($pengsup->pengadaan->budjet->waktu_mulai)) }}</td>
    </tr>
    <tr>
      <th scope="row">Tanggal Pengumuman Pengadaan</th>
      <td>{{ date('d-M-Y',strtotime($pengsup->pengadaan->budjet->waktu_mulai)) }}</td>
    </tr>
    <tr>
      <th scope="row">Tanggal Pengumuman Pemenang</th>
      <td>28 September 2020</td>
    </tr>
    <tr>
      <th scope="row">Unit Kerja Pengusul</th>
      <td>{{ ucwords($pengsup->pengadaan->budjet->unit_kerja_pengusul) }}</td>
    </tr>
    <tr>
      <th scope="row">Tahun Anggaran</th>
      <td>2020/2021</td>
    </tr>
    <tr>
      <th scope="row">Nilai HPS</th>
      <td>Rp. {{ number_format($pengsup->pengadaan->budjet->anggaran) }},-</td>
    </tr>
    <tr>
      <th scope="row">Jenis Kontrak</th>
      <td>
        <table>
          <tbody>
            <tr>
            <th scope="row">Cara Pembayaran</th>
            <td>: 30%</td>
            </tr>
            <tr>
            <th scope="row">Lokasi Pekerjaan</th>
            <td>: GKB 1</td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    {{-- <tr>
      <th scope="row">Peserta</th>
      <td><a href="">5 Peserta</a></td>
    </tr> --}}
  </tbody>
</table>
@endsection