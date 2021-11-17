@extends('layouts/main-layout')
@section('title', 'Pengadaan Kursi Kantor untuk Laboratorium Komputer')
@section('content')
<table class="table">
  <tbody>
    <tr>
      <th scope="row">Kode</th>
      <td class="fw-bold">PBA-0001</td>
    </tr>
    <tr>
      <th scope="row">Status</th>
      <td><div class="badge badge-warning text-decoration-none">Evaluasi</div></td>
    </tr>
    <tr>
      <th scope="row">Nama Paket</th>
      <td>Pengadaan Komputer dan Serve untuk Laboratorium Komputer</td>
    </tr>
    <tr>
      <th scope="row">Barang</th>
      <td>Komputer</td>
    </tr>
    <tr>
      <th scope="row">Jumlah</th>
      <td>10</td>
    </tr>
    <tr>
      <th scope="row">Harga Penawaran</th>
      <td>Rp 50.000.000,-</td>
    </tr>
    <tr class="table-info">
      <th> Hasil Evaluasi</th>
      <td>Bisakah ditawar lagi seharga Rp. 5.000.000</td>
    </tr>
    <tr>
      <th scope="row">Harga Terkoreksi:</th>
      <td>
          <input type="Price" class="form-control" id="exampleInputPrice" aria-describedby="priceHelp!" placeholder="Anda bisa mengisi kolom ini untuk harga negosiasi">
      </td>
    </tr>
    <tr>
      <th>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Beri Respon</label>
          <td>
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
          </td>
        </div>
      </th>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>
        <button class="btn btn-sm btn-primary">Simpan</button>
      </td>
    </tr>
  </tbody>
</table>
@endsection
