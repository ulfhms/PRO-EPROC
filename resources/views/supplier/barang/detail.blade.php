@extends('layouts/supplier/main-layout')
@section('title', 'Komputer')
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
@endsection