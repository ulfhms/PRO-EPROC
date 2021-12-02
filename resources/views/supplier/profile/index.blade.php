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
        <img src="{{ asset('storage/'.$profile->logo_supplier) }}" alt="" class="img-thumbnail">
      </div>
      <div class="col">
        <h3 class="">
          {{ $profile->nama_supplier }}
          <a href="{{ route('supplier.editProfile', auth()->id()) }}" class="btn btn-sm bg-warning"><i class="far fa-edit"></i></a>
        </h3>
        <p class="card-text">Supplier</p>
        </div>
    </div>
    <div class="row pt-4">
        <table class="table table-hover">
            <tbody>
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
                <th>No Rekening</th>
                <td>{{ $profile->nama_bank }} - {{ $profile->no_rek }}</td>
              </tr>
              <tr>
                <th>Bidang Usaha</th>
                <td>{{ $profile->nama_bingus }}</td>
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