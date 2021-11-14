@extends('layouts/supplier/main-layout')
@section('title', 'Pengadaan Kursi Kantor untuk Laboratorium Komputer')
@section('content')

<div class="card">
    <div class="card-header">
      Detail Status
    </div>
    <div class="card-body">
      <h5 class="card-title badge badge-secondary text-decoration-none">Submitted</h5>
      <p class="card-text">Formulir dan data partisipasi Anda telah diserahkan ke DPAL Universitas Muhammadiyah Sidoarjo.<br> Untuk proses selanjutnya, silahkan menunggu.</p>
      
      <table class="table table-borderless">
        <tbody>
          <tr>
            <th class="text-center">
              <h5 class="text-start fw-bold text-primary">Detail Paket Pengadaan</h5>
            </th>
            </tr>
            <tr>
              <th scope="row" colspan="3" class="text-primary"><h5></h5></th>
            </tr>
            <tr>
              <th>Nama Pengadaan</th>
              <td>Pengadaan Komputer bla bla</td>
            </tr>
            <tr>
              <th>Harga Penawaran</th>
              <td>Rp. 5.000.000 /unit</td>
            </tr>
            <tr>
              <th>File Proposal</th>
              <td scope="row" colspan="3" class="text-primary"><a href="{{asset('product/beasiswa.pdf')}}">file name</a></td>
            </tr>
        </tbody>
      </table>
      <div scope="row" class="d-flex flex-row-reverse bd-highlight">
        <button class="btn btn-sm btn-primary p-2 bd-highlight"><a href="{{ route('supplier.status.index') }}" style="color:white; text-decoration:none">Mengerti</button>
      </div>
    </div>
  </div>

@endsection
