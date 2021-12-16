@extends('layouts/main-layout')
@section('title','Detail E-Budjeting')
@section('content')
<table class="table">
  <tbody>   
    <tr>
      <th scope="row">Nama Kegiatan</th>
      <td>{{ ucwords($budjet->nama_kegiatan) }}</td>
    </tr>
    <tr>
      <th scope="row">Status</th>
      <td>{{ ucwords($budjet->status) }}</td>
    </tr>
    <tr>
      <th scope="row">Unit Kerja Pengusul</th>
      <td>{{ ucwords($budjet->unit_kerja_pengusul) }}</td>
    </tr>
    <tr>
      <th scope="row">Anggaran</th>
      <td>Rp {{ number_format($budjet->anggaran) }},-</td>
    </tr>
    <tr>
      <th scope="row">Rencana Belanja</th>
      <td>Rp {{ number_format($budjet->rencana_belanja) }},-</td>
    </tr>
    <tr>
      <th scope="row">Sisa Anggaran</th>
      <td>Rp {{ number_format($budjet->sisa_anggaran) }},-</td>
    </tr>
    <tr>
      <th scope="row">Waktu Mulai</th>
      <td>{{ $budjet->waktu_mulai }}</td>
    </tr>
    <tr>
      <th scope="row">Waktu Selesai</th>
      <td>{{ $budjet->waktu_selesai }}</td>
    </tr>
    
    <tr>
      <th scope="row">Uraian</th>
      <td>{!! $budjet->uraian !!}</td>
    </tr>
    
  </tbody>
@endsection
