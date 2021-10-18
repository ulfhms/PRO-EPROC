@extends('layouts/supplier/main-layout')
@section('title', 'Komputer')
@section('content')
<table class="table table-borderless">
  <tbody>
    <tr>
      <th class="text-center">
        <img src="{{ asset('image/komputer.jpg') }}" class="img-fluid" alt="">
      </th>
      <td>
              <h4 class="fw-bold text-primary">Komputer</h4>
              <h4>Rp.5.000.000 ,-</h4>
        </td>
    </tr>
    <tr>
      <th scope="row" colspan="3" class="text-primary"><h5>Spesifikasi Produk</h5></th>
    </tr>
    <tr>
      <th>Stok</th>
      <td>999</td>
    </tr>
    <tr>
      <th>Dikirim Dari</th>
      <td>KAB.TANGGERANG - KOSAMBI, BANTEN, ID</td>
    </tr>
    <tr>
      <th scope="row" colspan="3" class="text-primary"><h5>Deskripsi Produk</h5></th>
    </tr>
    <tr>
      <td colspan="2">Intel Core i3,
        Monitor 19 inchi,
        Hardisk 320 Gb,
        M/B ECS</td>
    </tr>
  </tbody>
</table>
@endsection