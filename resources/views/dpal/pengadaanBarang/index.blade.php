@extends('layouts/dpal/main-layout')
@section('title','Pengadaan Barang / Alat')
@section('content')
<div class="row">
  <div class="col-sm-12 col-lg-12">
    <h6 class="bg-warning rounded p-2 text-center fw-bold">Pengadaan Barang / Alat</h6>
  </div>
</div>
{{-- <div class="row mb-2">
  <div class="col-sm-12 col-lg-12 d-flex justify-content-end">
    <a href="{{ route('dpal.pengadaanBarang.create') }}" class="btn btn-sm btn-primary rounded mt-1 text-center fw-bold text-white text-decoration-none">Tambah</a>
  </div>
</div> --}}

<div class="row mb-2">
  <div class="col-sm-12 col-lg-12 d-flex justify-content-end">
    <a href="{{ route('dpal.pengadaanBarang.create') }}" class="btn btn-sm btn-primary rounded mt-1 text-center fw-bold text-white text-decoration-none">Detail</a>
  </div>
</div>
<table class="table overflow-auto table-responsive">
  <thead>
    <tr>
      <th scope="col">CHECK</th>
      <th scope="col">KODE</th>
      <th scope="col">NAMA PAKET</th>
      <th scope="col">UNIT KERJA PENGUSUL</th>
      <th scope="col">STATUS</th>
      <th scope="col">HPS</th>
      <th scope="col">PESERTA</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
        <div class="form-check text-center">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        </div>
      </th>
      <th scope="row">PBA - 0001</th>
      <td><a href="{{ route('dpal.pengadaanBarang.pengumumanPengadaan') }}">Pengadaan Komputer dan Serve untuk Laboratorium Komputer</a></td>
      <td>Fakultas Psikologi dan Ilmu Pendidikan</td>
      <td> <a href="#" class="btn badge bg-primary">ON</a></td>
      <td>Rp. 100.000.000,-</td>
      <td class="text-center">5</td>
      {{-- <td><a href="{{ route('dpal.pengadaanBarang.editTahap') }}" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a></td> --}}
    </tr>
    <tr>
      <th scope="row">
        <div class="form-check text-center">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        </div>
      </th>
      <th scope="row">PBA - 0002</th>
      <td><a href="">Pengadaan Mesin CNC untuk Laboratorium Mesin</a></td>
      <td>Fakultas sains dan teknologi</td>
      <td> <a href="#" class="btn badge bg-danger">OFF</a></td>
      <td>Rp. 600.000.000,-</td>
      <td class="text-center">3</td>
      {{-- <td><a href="#" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a></td> --}}
    </tr>
    <tr>
      <th scope="row">
        <div class="form-check text-center">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        </div>
      </th>
      <th scope="row">PBA - 0003</th>
      <td><a href="">Pengadaan Printer untuk Laboratorium Komputer</a></td>
      <td>Fakultas sains dan teknologi</td>
      <td> <a href="#" class="btn badge bg-primary">On</a></td>
      <td>Rp. 600.000.000,-</td>
      <td class="text-center">7</td>
      {{-- <td><a href="#" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a></td> --}}
    </tr>
    <tr>
      <th scope="row">
        <div class="form-check text-center">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        </div>
      </th>
      <th scope="row">PBA - 0004</th>
      <td><a href="">Pengadaan Kursi untuk Rapat</a></td>
      <td>Fakultas sains dan teknologi</td>
      <td><a href="{{ route('dpal.pengadaanBarang.detailTahap') }}" class="btn badge bg-danger">OFF</a></td>
      <td>Rp. 600.000.000,-</td>
      <td class="text-center">5</td>
      {{-- <td><a href="#" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a></td> --}}
    </tr>
  </tbody>
</table>
@endsection