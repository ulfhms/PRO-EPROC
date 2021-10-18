@extends('layouts/supplier/main-layout')
@section('title', 'Daftar Ter-Acc')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Barang</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a href="">Kursi Kantor Direksi 8899</a></td>
      <td>7</td>
      <td>
        <a href=""><i class="far fa-edit bg-warning p-1 text-dark rounded"></i></a>
      </td>
    </tr>
  </tbody>
</table>
@endsection