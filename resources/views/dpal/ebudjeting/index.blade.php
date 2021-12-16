@extends('layouts/main-layout')
@section('title','E-Budjeting')
@section('content')
<h5 class="bg-warning p-2 rounded col-lg-6 col-12">
  Penyusunan Rencana Kegiatan dan Anggaran
</h5>
<div class="d-flex justify-content-end mb-2">
  <a href="{{ route('dpal.ebudjeting.create') }}" class="btn btn-sm btn-primary">Tambah</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kegiatan</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @php ($no = 1)
    @foreach ($budjets as $budjet)    
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td><a href="{{ route('dpal.perorangan.detailPerorangan') }}">{{ ucwords($budjet->nama_kegiatan) }}</a></td>
      <td>{{ ucwords($budjet->status) }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection