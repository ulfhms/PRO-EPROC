@extends('layouts/main-layout')
@section('title', 'Edit Pengadaan Barang')
@section('content')
<h5 class="bg-warning p-2 rounded col-12">Edit {{ $pengadaan->budjet->nama_kegiatan }}</h5>
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
      <td>{{ $pengadaan->budjet->nama_kegiatan }}</td>
    </tr>
    <tr>
      <th scope="row">Sumber Dana</th>
      <td>Universitas Muhammadiyah Sidoarjo</td>
    </tr>
    <tr>
      <th scope="row">Tanggal Pengusulan</th>
      <td>{{ date('d-m-Y',strtotime($pengadaan->budjet->waktu_mulai)) }}</td>
    </tr>
    <tr>
      <th scope="row">Unit Kerja Pengusul</th>
      <td>{{ $pengadaan->budjet->unit_kerja_pengusul }}</td>
    </tr>
    <tr>
      <th scope="row">Tahun Anggaran</th>
      <td>2020/2021</td>
    </tr>
    <tr>
      <th scope="row">Nilai HPS</th>
      <td>Rp. {{ $pengadaan->budjet->anggaran }},-</td>
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
      <td>{{ count($pengsups) }} Peserta</td>
    </tr>
    <tr>
      <th scope="row">Status</th>
      <td>
        <form action="{{ route('dpal.pengadaanBarang.update', $pengadaan->id) }}" method="post">
          @csrf
          @method('patch')
          <div class="form-check form-switch">
            <input class="form-check-input" name="status_pengadaan" type="checkbox" id="flexSwitchCheckChecked" {{ $pengadaan->status_pengadaan === 1? 'checked' :'' }}>
          </div>
        </td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>
        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
    </form>
    </tr>
  </tbody>
</table>
@endsection
