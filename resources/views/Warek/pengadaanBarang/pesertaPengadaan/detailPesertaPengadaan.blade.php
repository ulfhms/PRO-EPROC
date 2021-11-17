@extends('layouts/main-layout')
@section('title', 'CV Murah Hati')
@section('content')
<div class="m-2">
  @include('warek/pengadaanBarang/pesertaPengadaan/navbar')
  <div class="row">
    <div class="col-2">
        <img src="{{ asset('logo/ikea.svg') }}" alt="">
    </div>
    <div class="col">
        <h3 class="">CV Merah Putih</h3>
        <p class="card-text">Supplier</p>
    </div>
  </div>
  <div class="row pt-4">
    <table class="table table-hover">
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Kode</td>
            <td>Sup-1</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Nama Perusahaan</td>
            <td>CV Merah Putih</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>NPWP</td>
            <td>01.234.567.8-123.000</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Alamat</td>
            <td>Jl.Simpang Kanan Sidoarjo</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Telepon</td>
            <td>0895642343678</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Nara Hubung</td>
            <td>Bapak Budi</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Bidang Usaha</td>
            <td>Komputer</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>No Rekening</td>
            <td>9823947</td>
          </tr>
        </tbody>
      </table>
  </div>
  <div class="d-flex justify-content-center">
    <a href="{{ route('warek.pengadaanBarang.pesertaPengadaan') }}" class="btn btn-sm btn-warning">Kembali</a>
  </div>
</div>
@endsection