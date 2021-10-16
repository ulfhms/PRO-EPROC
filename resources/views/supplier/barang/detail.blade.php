@extends('layouts/supplier/main-layout')
@section('title', 'Kursi Kantor')
@section('content')
<table class="table table-borderless">
  <tbody>
    <tr>
      <th class="text-center">
        <img src="{{ asset('image/kursi.jpg') }}" class="img-fluid" alt="">
      </th>
      <td>
              <h4 class="fw-bold text-primary">Kursi Kantor Direksi 8899</h4>
              <h4>Rp.399.000 ,-</h4>
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
      <td colspan="2">                  READY Hitam

        Specification
        - Bahan : Kulit sitensis
        - Sandaran bisa diatur sampai 160 derajat
        - Ada Sandaran kaki
        - Ada Fitur Massage(Getar) Dipunggung
        - Kaki : Besi Chrome
        - Sistem hidrolis (bisa naik dan turun)
        - Rotasi 360 derajat
        - Tinggi Kursi 110-120 Cm
          Tinggi Sandaran 71 Cm
          Tinggi dudukan dari Lantai 50-60 Cm
          Lebar dudukan 50 Cm

        (powerbank putih tidak termasuk, hanya contoh saja)

        untuk pengiriman Jne,sicepat,Jnt Dikirim belum rakit.</td>
    </tr>
  </tbody>
</table>
@endsection