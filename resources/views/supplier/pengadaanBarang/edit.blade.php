@extends('layouts/main-layout')
@section('title', 'Edit Pengadaan')
@section('content')
<h5 class="bg-warning p-2 rounded text-center">Edit {{ ucwords($pengadaan->pengadaan->budjet->nama_kegiatan) }}</h5>

<div class="container">
  <form action="{{ route('supplier.pengadaanBarang.updateSubmit', $pengadaan->id) }}" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
  <div class="row row-cols-2">
    <div class="col">
      <label  class="mb-3">Kode dan Nama Pengadaan: </label>
      <div>
        <select class="form-select" aria-label="Default select example">
          <option selected disabled>{{ $pengadaan->pengadaan->budjet->nama_kegiatan }}</option>
        </select>
      </div>
    </div>
    <div class="col">
      <label  class="mb-3">Harga Penawaran: </label>
      <div>
        <input type="number" class="form-control" id="exampleInputPrice" name="harga_penawaran" aria-describedby="priceHelp" value="{{ $pengadaan->harga_penawaran }}"><br>
      </div>
    </div>
    <div class="col">
      <label for="formFileSm" class="form-label">File Proposal: </label>
      <div>
        <input class="form-control form-control-sm" id="formFileSm" type="file">
      </div>
    </div>
    <div class="col">
      <label  class="mb-3">Harga Terkoreksi: </label>
      @if ($pengadaan->status_supplier === 'submitted')
      <div>
        <input type="number" readonly class="form-control" id="exampleInputPrice" aria-describedby="priceHelp!">
      </div>
      @elseif($pengadaan->status_supplier === 'evaluasi')
      <div>
        <input type="number" class="form-control" id="exampleInputPrice" aria-describedby="priceHelp!">
      </div>
      @endif
    </div>

</div>

<div class="container">
  <div class="row">
    <div class="d-flex flex-row-reverse bd-highlight">
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</div>
</form>
@endsection
