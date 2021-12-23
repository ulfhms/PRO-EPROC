@extends('layouts/main-layout')
@section('title')
    {{ $pengsups->supplier->nama_supplier }}
@endsection
@section('content')
<div class=" bg-warning p-2 fw-bold text-white text-center fs-5">
  <span class="">Evaluasi</span>
</div>
<table class="table table-hover table-borderless">
  <tbody>
    {{-- <tr>
      <th scope="row">Kode</th>
      <td>PBA-001</td>
    </tr> --}}
    <tr>
      <th scope="row">Nama Pengadaan</th>
      <td>{{ $pengsups->pengadaan->budjet->nama_kegiatan }}</td>
    </tr>
    <tr>
      <th scope="row">Tahap</th>
      <td><button class="btn btn-sm btn-warning">{{ ucwords($pengsups->status_supplier) }}</button></td>
    </tr>
    <tr>
      <th scope="row">Nama Supplier</th>
      <td>{{ $pengsups->supplier->nama_supplier }}</td>
    </tr>
    <tr>
      <th scope="row">Unit Kerja Pengusul</th>
      <td>{{ ucwords($pengsups->pengadaan->budjet->unit_kerja_pengusul) }}</td>
    </tr>
    <tr>
      <th scope="row">Harga Penawaran</th>
      <td>Rp {{ number_format($pengsups->harga_penawaran) }},-</td>
    </tr>
    <tr>
      <th scope="row">Harga Terkoreksi</th>
      <td>Rp {{ number_format($pengsups->harga_terkoreksi) }},-</td>
    </tr>
    <tr>
      <th scope="row">Hasil Penawaran DPAL ke Supplier</th>
      <td>{!! $pengsups->dpal_ke_supplier !!}</td>
    </tr>
    <tr>
      <th scope="row">Hasil Penawaran Supplier ke DPAL</th>
      <td>{!! $pengsups->supplier_ke_dpal !!}</td>
    </tr>
    <form action="{{ route('dpal.pengadaanBarang.formDpalKeSupplier', $pengsups->id) }}" method="post">
      @csrf
      @method('patch')
      <tr>
        <th scope="row">Evaluasi ke Supplier</th>
        <td>
          <textarea class="form-control" id="editor1" rows="6" name="dpal_ke_supplier"></textarea>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="d-flex justify-content-end">
    <button class="btn btn-sm btn-primary">Simpan</button>
  </div>
    </form>
@endsection