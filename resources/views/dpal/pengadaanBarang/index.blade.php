@extends('layouts/main-layout')
@section('title','Pengadaan Barang / Alat')
@section('content')
<div class="row">
  <div class="col-sm-12 col-lg-12">
    <h6 class="bg-warning rounded p-2 text-center fw-bold">Pengadaan Barang / Alat</h6>
  </div>
</div>
{{-- <div class="row mb-2">
  <div class="col-sm-12 col-lg-12 d-flex justify-content-end">
    <a href="{{ route('dpal.pengadaanBarang.create') }}" class="btn btn-sm btn-primary rounded mt-1 text-center fw-bold text-white text-decoration-none">Tambah</a>
  </div>
</div> --}}

<div class="row mb-2">
  <div class="col-sm-12 col-lg-12 d-flex justify-content-end">
    @if ($user = Auth::user())
        @if ($user->hasRole('dpal'))
        <a href="{{ route('dpal.pengadaanBarang.create') }}" class="btn btn-sm btn-primary rounded me-2 mt-1 text-center fw-bold text-white text-decoration-none">Tambah</a>
        @endif
      @endif
    <a href="{{ route('dpal.pengadaanBarang.detail') }}" class="btn btn-sm btn-primary rounded mt-1 text-center fw-bold text-white text-decoration-none">Detail</a>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">CHECK</th>
      {{-- <th scope="col">KODE</th> --}}
      <th scope="col">NAMA PAKET</th>
      <th scope="col">UNIT KERJA PENGUSUL</th>
      <th scope="col">STATUS</th>
      <th scope="col">HPS</th>
      {{-- <th scope="col">PESERTA</th> --}}
      @if ($user = Auth::user())
        @if ($user->hasRole('dpal'))
      <th scope="col">OPSI</th>
        @endif
      @endif
    </tr>
  </thead>
  <tbody>
    @foreach ($pengadaans as $pengadaan)    
    <tr>
      <th scope="row">
        <div class="form-check text-center">
          <input class="form-check-input" type="checkbox" name="pilih[]" value="{{ $pengadaan->id }}" id="flexCheckDefault">
        </div>
      </th>
      {{-- <th scope="row">PBA - 0001</th> --}}
      <td><a href="{{ route('dpal.pengadaanBarang.pengumumanPengadaan', $pengadaan->id) }}">{{ $pengadaan->budjet->nama_kegiatan }}</a></td>
      <td>{{ ucwords($pengadaan->budjet->unit_kerja_pengusul) }}</td>
      <td> <a href="#" class="btn badge {{ $pengadaan->status_pengadaan === 1? 'btn-primary' : 'btn-danger' }}">{{ $pengadaan->status_pengadaan===1? 'ON':'OFF' }}</a></td>
      <td>Rp.{{ number_format($pengadaan->budjet->anggaran) }},-</td>
      {{-- <td class="text-center">
            <a href="{{ route('dpal.pengadaanBarang.pengumumanPengadaan', $pengadaan->id) }}"></a>
      </td> --}}
      @if ($user = Auth::user())
        @if ($user->hasRole('dpal'))
        <td><a href="{{ route('dpal.pengadaanBarang.edit',$pengadaan->id )}}" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a></td>
        @endif
      @endif
      {{-- <td><a href="{{ route('dpal.pengadaanBarang.editTahap') }}" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a></td> --}}
    </tr>
    @endforeach
  </tbody>
</table>
@endsection