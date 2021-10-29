@extends('layouts/dpal/main-layout')
@section('title', 'Pengadaan Komputer dan Serve untuk Laboratorium Komputer')
@section('content')
<h5 class="bg-warning p-2 rounded col-12">Edit Tahap : Pengadaan Komputer dan Serve untuk Laboratorium Komputer</h5>
<table class="table mt-4 ">
  <tbody>
    <tr>
      <th scope="row">Sistem Pengadaan</th>
      <td>Lelang / Tender Sederhana</td>
    </tr>
    <tr>
      <th scope="row">Kode</th>
      <td>PBO-0001</td>
    </tr>
    <tr>
      <th scope="row">Nama Paket</th>
      <td>Pengadaan Komputer dan Server untuk Laboratorium Komputer</td>
    </tr>
    <tr>
      <th scope="row">Sumber Dana</th>
      <td>Universitas Muhammadiyah Sidoarjo</td>
    </tr>
    <tr>
      <th scope="row">Tanggal Pengusulan</th>
      <td>28 September 2020</td>
    </tr>
    <tr>
      <th scope="row">Unit Kerja Pengusul</th>
      <td>Fakultas Psikologi dan Ilmu Pendidikan</td>
    </tr>
    <tr>
      <th scope="row">Tahun Anggaran</th>
      <td>2020/2021</td>
    </tr>
    <tr>
      <th scope="row">Nilai HPS</th>
      <td>Rp. 100.000.000,-</td>
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
    <tr>
      <th scope="row">Peserta</th>
      <td><a href="">5 Peserta</a></td>
    </tr>
    <tr>
      <th scope="row">Tahap</th>
      <td>
        <select class="form-select" aria-label="Default select example">
          <option selected>Pilih</option>
          <option value="1">Acc</option>
          <option value="2">Revisi</option>
          <option value="3">Tolak</option>
        </select>
      </td>
    </tr>
    <tr>
      <th scope="row">Beri Pesan</th>
      <td>
        <div class="mb-3">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td><a href="{{ route('dpal.pengadaanBarang.index') }}" class="btn btn-sm btn-primary">Simpan</a></td>
    </tr>
  </tbody>
</table>
@endsection
