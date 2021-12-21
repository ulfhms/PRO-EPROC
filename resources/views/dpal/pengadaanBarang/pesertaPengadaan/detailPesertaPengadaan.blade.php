@extends('layouts/main-layout')
@section('title')
{{ ucwords($pengsup->supplier->nama_supplier) }}
@endsection
{{-- @section('title', 'CV Murah Hati') --}}
@section('content')
<div class="m-2">
  {{-- @include('dpal/pengadaanBarang/pesertaPengadaan/navbar') --}}
  <div class="row">
    <div class="col-2">
        <img src="{{ asset('logo/ikea.svg') }}" alt="">
    </div>
    <div class="col">
        <h3 class="">{{ ucwords($pengsup->supplier->nama_supplier) }}</h3>
        <p class="card-text">{{ ucwords($user->name)  }}</p>
    </div>
  </div>
  <div class="row pt-4">
    <table class="table table-hover">
        <tbody>
          {{-- <tr>
            <th scope="row">1</th>
            <td>Kode</td>
            <td>Sup-1</td>
          </tr> --}}
          <tr>
            <th scope="row">2</th>
            <td>Nama Perusahaan</td>
            <td>{{ ucwords($pengsup->supplier->nama_supplier) }}</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>NPWP</td>
            <td>{{ ucwords($pengsup->supplier->npwp) }}</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Alamat</td>
            <td>{{ ucwords($pengsup->supplier->alamat) }}</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Telepon</td>
            <td>{{ ucwords($pengsup->supplier->telepon) }}</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Nara Hubung</td>
            <td>{{ ucwords($pengsup->supplier->narahubung) }}</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Bidang Usaha</td>
            <td>{{ ucwords($supplier->bidangusaha['nama_bingus']) }}</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>No Rekening</td>
            <td>({{ ucwords($pengsup->supplier->bank->nama_bank) }}) {{ ucwords($pengsup->supplier->no_rek) }}</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Pengadaan</td>
            <td>{{ $pengsup->pengadaan->budjet->nama_kegiatan }}</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Proposal</td>
            <td><a href="/download/{{ $pengsup->proposal }}">File</a></td>
          </tr>
        </tbody>
      </table>
  </div>
  <div class="row">
    <div class="col text-center mb-5">
      <div class="fw-bold p-2text-dark fs-6 bg-warning text-decoration-underline">Produk</div>
    </div>
  </div>
</div>
@endsection