@extends('layouts/main-layout')
@section('title', 'Edit Pengadaan')
@section('content')
<h5 class="bg-warning p-2 rounded text-center">Edit Pengadaan</h5>

<div class="container">
  <table class="table">
    <tbody>
      {{-- <tr>
        <th scope="row">Kode</th>
        <td class="fw-bold">PBA-0001</td>
      </tr> --}}
      <tr>
        <th scope="row">Status</th>
        <td><div class="badge badge-warning text-decoration-none">{{ ucwords($pengadaan->status_supplier) }}</div></td>
      </tr>
      <tr>
        <th scope="row">Nama Paket</th>
        <td>{{ $pengadaan->pengadaan->budjet->nama_kegiatan }}</td>
      </tr>
      {{-- <tr>
        <th scope="row">Barang</th>
        <td>Komputer</td>
      </tr>
      <tr>
        <th scope="row">Jumlah</th>
        <td>10</td>
      </tr> --}}
      <tr>
        <th scope="row">Harga Penawaran</th>
        <td>Rp {{ number_format($pengadaan->harga_penawaran) }},-</td>
      </tr>
      <tr class="table-info">
        <th>Hasil Evaluasi</th>
        <td>{!! $pengadaan->dpal_ke_supplier ?? 'Belum ada evaluasi' !!}</td>
      </tr>
      <form action="{{ route('supplier.pengadaanBarang.updateSubmit', $pengadaan->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <tr>
          <th scope="row">Harga Terkoreksi:</th>
          <td>
              @if ($pengadaan->status_supplier === 'submitted')
              <input type="number" class="form-control" id="exampleInputPrice" name="harga_terkoreksi" readonly aria-describedby="priceHelp!" placeholder="Anda bisa mengisi kolom ini untuk harga negosiasi">
              @elseif($pengadaan->status_supplier === 'evaluasi')
              <input type="number" class="form-control" id="exampleInputPrice" name="harga_terkoreksi" aria-describedby="priceHelp!" placeholder="Anda bisa mengisi kolom ini untuk harga negosiasi" value="{{ $pengadaan->harga_terkoreksi }}">
              @endif
          </td>
        </tr>
        <tr>
          <th>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Beri Respon</label>
              <td>
                 <textarea class="form-control" id="editor1" rows="10" name="supplier_ke_dpal">{!! $pengadaan->supplier_ke_dpal !!}</textarea>
              </td>
            </div>
          </th>
        </tr>
        <tr>
          <th>Proposal</th>
          <td><input class="form-control form-control-sm" id="formFileSm" type="file" name="proposal"></td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>
            <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
          </td>
        </tr>
      </form>
    </tbody>
  </table>
@endsection
