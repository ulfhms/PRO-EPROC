@extends('layouts/main-layout')
@section('title', 'Edit Profile')
@section('content')
<form action="{{ route('supplier.updateProfile', $profile->id) }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('patch')
  <div class="m-2">
    <div class="bg-warning p-1 fw-bold mb-3">Edit Profile Perusahaan</div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">Nama</label>
      <input type="text" class="form-control" id="" placeholder="Masukkan nama perusahaan" name="name" value="{{ old('name') ?? $profile->name }}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">NPWP</label>
      <input type="text" class="form-control" id="" placeholder="Masukkan NPWP" name="npwp" value="{{ old('npwp') ?? $profile->npwp }}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">Telepon</label>
      <input type="text" class="form-control" id="" placeholder="Masukkan Telepon" name="telepon" value="{{ old('telepon') ?? $profile->telepon }}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">Email</label>
      <input type="text" class="form-control" id="" placeholder="Masukkan email" name="email" value="{{ old('email') ?? $profile->email }}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">Nara Hubung</label>
      <input type="text" class="form-control" id="" placeholder="Masukkan Nara Hubung" name="narahubung" value="{{ old('narahubung') ?? $profile->narahubung }}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">No Rekening</label>
      <input type="number" class="form-control" id="" placeholder="Masukkan No Rekening" name="no_rek" value="{{ old('no_rek') ?? $profile->no_rek }}">
    </div>
    <div class="mb-3">    
      <label for="" class="form-label fw-bold">Bidang Usaha</label>
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="bank">
        <option selected>Pilih bank</option>
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
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="bidangusaha">
        <option selected>Pilih Bidang Usaha</option>
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
      <textarea class="form-control" id="" rows="3" name="alamat">{{ old('alamat') ?? $profile->alamat }}</textarea>
    </div>
    <div class="mb-3">
      <label for="formFileSm" class="form-label fw-bold">Foto</label>
      <input class="form-control form-control-sm" id="formFileSm" type="file" name="image">
    </div>
    <div class="d-flex justify-content-end">
      <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
    </div>
  </div>
</form>
@endsection
