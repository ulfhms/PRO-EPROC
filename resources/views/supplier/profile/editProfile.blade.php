@extends('layouts/main-layout')
@section('title', 'Edit Profile')
@section('content')
<form action="{{ route('supplier.updateProfile', $profile->user_id) }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="m-2">
    <div class="bg-warning p-1 fw-bold mb-3">Edit Profile Perusahaan</div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">Nama</label>
      <input type="text" class="form-control @error('nama_supplier') is-invalid @enderror" id="" placeholder="Masukkan nama supplier" name="nama_supplier" value="{{ old('nama_supplier') ?? $profile->nama_supplier }}">
      @error('nama_supplier')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">NPWP</label>
      <input type="text" class="form-control @error('npwp') is-invalid @enderror" id="" placeholder="Masukkan NPWP" name="npwp" value="{{ old('npwp') ?? $profile->npwp }}">
      @error('npwp')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">Telepon</label>
      <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="" placeholder="Masukkan Telepon" name="telepon" value="{{ old('telepon') ?? $profile->telepon }}">
      @error('telepon')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    {{-- <div class="mb-3">
      <label for="" class="form-label fw-bold">Email</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror" id="" placeholder="Masukkan email" name="email" value="{{ old('email') ?? $profile->email }}">
      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div> --}}
    <div class="mb-3">
      <label for="" class="form-label fw-bold">Nara Hubung</label>
      <input type="text" class="form-control @error('narahubung') is-invalid @enderror" id="" placeholder="Masukkan Nara Hubung" name="narahubung" value="{{ old('narahubung') ?? $profile->narahubung }}">
      @error('narahubung')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">No Rekening</label>
      <input type="number" class="form-control @error('no_rek') is-invalid @enderror" id="" placeholder="Masukkan No Rekening" name="no_rek" value="{{ old('no_rek') ?? $profile->no_rek }}">
      @error('no_rek')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    <div class="mb-3">    
      <label for="" class="form-label fw-bold">Bank</label>
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="bank">
        <option disabled selected>Pilih bank</option>
        @foreach ($banks as $bank)
        <option value="{{ $bank->id }}" 
          @if ($bank->id === $profile->bank_id)
              selected
          @endif
          >{{ ucwords($bank->nama_bank) }}</option>
        @endforeach
        {{-- <option value="2">Pengadaan Barang Elektikal</option>
        <option value="3">Jasa Konsultasi Bagunan</option>
        <option value="4">Pengadaan Barang Alat IT</option> --}}
      </select>
    </div>
    <div class="mb-3">    
      <label for="" class="form-label fw-bold">Bidang Usaha</label>
      <select class="form-select form-select-sm " aria-label=".form-select-sm example" name="bidangusaha">
        <option disabled selected>Pilih Bidang Usaha</option>
        @foreach ($bingus as $item)
        <option value="{{ $item->id }}" 
          @if ($item->id === $profile->bidangusaha_id)
              selected
          @endif
          >{{ ucwords($item->nama_bingus) }}</option>
        @endforeach
        {{-- <option value="2">Pengadaan Barang Elektikal</option>
        <option value="3">Jasa Konsultasi Bagunan</option>
        <option value="4">Pengadaan Barang Alat IT</option> --}}
      </select>
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">Alamat</label>
      <textarea class="form-control @error('alamat') is-invalid @enderror" id="" rows="3" name="alamat">{{ old('alamat') ?? $profile->alamat }}</textarea>
      @error('alamat')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="formFileSm" class="form-label fw-bold">Foto</label>
      <input class="form-control form-control-sm @error('logo_supplier') is-invalid @enderror" id="formFileSm" type="file" name="logo_supplier">
      @error('logo_supplier')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    <div class="d-flex justify-content-end">
      <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
    </div>
  </div>
</form>
@endsection
