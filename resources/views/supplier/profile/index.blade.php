@extends('layouts/main-layout')
@section('title', 'Profile')
@section('content')
<div class="d-flex justify-content-end">
</div>
<div class="card ">
  <p class="card-header fw-bold">Profil Supplier</p>
  <div class="card-body">
    <div class="row">
      <div class="col-2">
        <img src="{{ asset('logo/ikea.svg') }}" alt="">
      </div>
      <div class="col">
        <h3 class="">
          {{ $profile->nama }}
          <a href="{{ route('supplier.editProfile') }}" class="btn btn-sm bg-warning"><i class="far fa-edit"></i></a>
        </h3>
        <p class="card-text">{{ ucwords($profile->level) }}</p>
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
              {{-- <tr>
                <th>Nama Perusahaan</th>
                <td>CV Merah Putih</td>
              </tr> --}}
              <tr>
                <th>NPWP</th>
                <td>{{ $profile->npwp }}</td>
              </tr>
              <tr>
                <th>Telepon</th>
                <td>{{ $profile->telepon }}</td>
              </tr>
              <tr>
                <th>Narahubung</th>
                <td>{{ $profile->narahubung }}</td>
              </tr>
              <tr>
                <th>Pemilik Rekening</th>
                <td>{{ $profile->pemilik_rekening }}</td>
              </tr>
              <tr>
                <th>No Rekening</th>
                <td>{{ $profile->bank }} - {{ $profile->no_rek }}</td>
              </tr>
              <tr>
                <th>Bidang Usaha</th>
                <td>Pengadaan Barang Alat IT</td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td>{{ $profile->alamat }}</td>
              </tr>
            </tbody>
          </table>
    </div>
    </div>
  </div>
</div>
@endsection