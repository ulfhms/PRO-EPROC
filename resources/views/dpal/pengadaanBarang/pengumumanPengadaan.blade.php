@extends('layouts/main-layout')
@section('title')
  {{ ucwords($pengadaan->budjet->nama_kegiatan) }}
@endsection
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
      <td>{{ ucwords($pengadaan->budjet->nama_kegiatan) }}</td>
    </tr>
    <tr>
      <th scope="row">Sumber Dana</th>
      <td>Universitas Muhammadiyah Sidoarjo</td>
    </tr>
    <tr>
      <th scope="row">Tanggal Pengusulan</th>
      <td>{{ date('d-M-Y',strtotime($pengadaan->budjet->waktu_mulai)) }}</td>
    </tr>
    <tr>
      <th scope="row">Tanggal Penetapan Sistem Pengadaan</th>
      <td>{{ date('d-M-Y',strtotime($pengadaan->budjet->waktu_mulai)) }}</td>
    </tr>
    <tr>
      <th scope="row">Tanggal Pengumuman Pengadaan</th>
      <td>{{ date('d-M-Y',strtotime($pengadaan->budjet->waktu_mulai)) }}</td>
    </tr>
    <tr>
      <th scope="row">Tanggal Pengumuman Pemenang</th>
      <td>28 September 2020</td>
    </tr>
    <tr>
      <th scope="row">Unit Kerja Pengusul</th>
      <td>{{ ucwords($pengadaan->budjet->unit_kerja_pengusul) }}</td>
    </tr>
    <tr>
      <th scope="row">Tahun Anggaran</th>
      <td>2020/2021</td>
    </tr>
    <tr>
      <th scope="row">Nilai HPS</th>
      <td>Rp. {{ number_format($pengadaan->budjet->anggaran) }},-</td>
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
      <th scope="row">Status</th>
      <td>
        @if ($pengadaan->status_pengadaan === 1)
          <button class="btn btn-sm btn-primary">ON</button>
        @elseif ($pengadaan->status_pengadaan === 0)
          <button class="btn btn-sm btn-danger">OFF</button>
        @endif
      </td>
    </tr>
    <tr>
      <th scope="row">Status Proses</th>
      <td>
        @if ($pengadaan->status_proses === 'proses')
          <button class="btn btn-sm btn-primary">Proses</button>
        @elseif ($pengadaan->status_proses === 'validasi')
          <button class="btn btn-sm btn-primary">Validasi</button>
        @elseif ($pengadaan->status_proses === 'selesai')
          <button class="btn btn-sm btn-primary">Selesai</button>
        @endif
      </td>
    </tr>
  </tbody>
</table>
@endsection