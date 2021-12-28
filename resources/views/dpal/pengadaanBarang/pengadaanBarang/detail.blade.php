@extends('layouts/main-layout')
@section('title','Detail Beberapa Pengadaan')
@section('content')
<div class="container">
  {{-- @foreach ($data as $pengsup)   --}}
  {{-- <span class="text-success fw-bold fs-5">{{ $pengsup['supplier']['nama_supplier'] }}</span> --}}
  <table class="table table-bordered table-sm">
    <thead class="text-center bg-primary text-white">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Pengadaan</th>
      </tr>
    </thead>
    <tbody>
      {{-- @foreach ($pengsup['kegiatan'] as $item)       --}}
      <tr>
        <th scope="row" class="text-center">1</th>
        {{-- <td>{{ $item->nama_kegiatan }}</td> --}}
      </tr>
      {{-- @endforeach --}}
    </tbody>
  </table>
  {{-- @endforeach --}}
</div>
@endsection