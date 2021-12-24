@extends('layouts/main-layout')
@section('title','Peserta Evaluasi')
@section('content')
@include('dpal/pengadaanBarang/navbarPengadaan')
<table class="table mt-4">
  <thead>
    <tr class="text-center">
      <th scope="col">No</th>
      <th scope="col">Peserta</th>
      <th scope="col">NPWP</th>
      <th scope="col">Harga Penawaran</th>
      <th scope="col">Evaluasi</th>
    </tr>
  </thead>
  <tbody  class="text-center">
    @php ($no=1)
    
    @foreach ($pengsups as $sups)        
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td><a href="{{ route('dpal.pengadaanBarang.detailPesertaPengadaan', $sups->supplier->id) }}">{{ $sups->supplier->nama_supplier }}</a></td>
      <td>{{ $sups->supplier->npwp }}</td>
      <td>Rp {{ number_format($sups->harga_penawaran) }},-</td>
      <td class="text-center">
        <a href="{{ route('dpal.pengadaanBarang.editHasilEvaluasi',$sups->id) }}" class="btn btn-sm btn-primary"><i class="far fa-edit"></a></i>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection