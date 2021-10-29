@extends('layouts/dpal/main-layout')
@section('title','CV Malioboro')
@section('content')
<div class="card ">
  <p class="card-header fw-bold">Profile Information</p>
  <div class="card-body">
    <div class="row">
      <div class="col-2">
        <img src="{{ asset('logo/ikea.svg') }}" alt="">
      </div>
      <div class="col">
        <h3 class="">
          CV Malioboro
        </h3>
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
                <td>CV Malioboro</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>NPWP</td>
                <td>01.234.567.8-123.000</td>
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
                <td>No Rekening</td>
                <td>3259876</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Bidang Usaha</td>
                <td>Pengadaan Barang Alat IT</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>Alamat</td>
                <td>Jl.Simpang Kanan Sidoarjo</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>Tanggal Teregistrasi</td>
                <td>20 Oktober 2021</td>
              </tr>
            </tbody>
          </table>
    </div>
    </div>
  </div>
</div>
@endsection
