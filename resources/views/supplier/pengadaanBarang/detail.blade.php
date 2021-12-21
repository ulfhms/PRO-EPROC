@extends('layouts/main-layout')
@section('title')
    {{ucwords($pengadaan->pengadaan->budjet->nama_kegiatan)}}
@endsection
@section('content')
<table class="table table-borderless">
  <tbody>
    <tr>
      <th class="text-center">
        <img src="{{ asset('') }}" class="img-fluid" alt="">
      </th>
      <td>
              <h4 class="fw-bold text-primary">Detail Paket Pengadaan</h4>
              <h4> </h4>
        </td>
    </tr>
    <tr>
      <th scope="row" colspan="3" class="text-primary"><h5></h5></th>
    </tr>
    <tr>
      <th>Nama Pengadaan</th>
      <td>{{ucwords($pengadaan->pengadaan->budjet->nama_kegiatan)}}</td>
    </tr>
    <tr>
      <th>Status</th>
      <td>
        @if ($pengadaan->status_supplier === 'submitted')
          <button class="btn btn-sm btn-secondary">{{ ucwords($pengadaan->status_supplier) }}</button>   
        @elseif ($pengadaan->status_supplier === 'evaluasi')
          <button class="btn btn-sm btn-warning">{{ ucwords($pengadaan->status_supplier) }}</button>
        @elseif ($pengadaan->status_supplier === 'tolak')   
          <button class="btn btn-sm btn-danger">{{ ucwords($pengadaan->status_supplier) }}</button>
        @endif
      </td>
    </tr>
    <tr>
      <th>Harga Penawaran</th>
      <td>Rp. {{ number_format($pengadaan->harga_penawaran) }},-</td>
    </tr>
    <tr>
      <th>File Proposal</th>
      <td scope="row" colspan="3" class="text-primary"><a href="/download/{{ $pengadaan->proposal }}">Proposal</a></td>
    </tr>
  </tbody>
</table>
@endsection