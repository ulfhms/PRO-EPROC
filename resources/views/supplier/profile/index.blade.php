@extends('layouts/main-layout')
@section('title', 'Profile')
@section('content')
@include('layouts.alert')
<div class="card ">
  <p class="card-header fw-bold">Profil Supplier</p>
  <div class="card-body">
    <div class="row">
      <div class="col-2">
        <img src="{{ asset('storage/'.$profile->logo_supplier) }}" alt="" class="img-fluid" width="150px">
      </div>
      <div class="col">
        <h3 class="">
          {{ $profile->nama_supplier ?? 'Tambah Nama' }}
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
                <th>Email</th>
                <td>{{ $profile->user->email }}</td>
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
                <td>{{ $profile->bank->nama_bank }} - {{ $profile->no_rek }}</td>
              </tr>
              <tr>
                <th>Bidang Usaha</th>
                <td>{{ $profile->bidangusaha['nama_bingus'] }}</td>
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