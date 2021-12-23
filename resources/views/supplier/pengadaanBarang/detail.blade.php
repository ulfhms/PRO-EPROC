@extends('layouts/main-layout')
@section('title')
    {{ucwords($pengadaan->pengadaan->budjet->nama_kegiatan)}}
@endsection
@section('content')
<table class="table table-borderless">
  <tbody>
    <tr>
      <th class="text-center">
        <img src="{{ asset('') }}" class="img-fluid" alt="">
      </th>
      <td>
              <h4 class="fw-bold text-primary">Detail Paket Pengadaan</h4>
              <h4> </h4>
        </td>
    </tr>
    <tr>
      <th scope="row" colspan="3" class="text-primary"><h5></h5></th>
    </tr>
    <tr>
      <th>Nama Pengadaan</th>
      <td>{{ucwords($pengadaan->pengadaan->budjet->nama_kegiatan)}}</td>
    </tr>
    <tr>
      <th>Status</th>
      <td>
        @if ($pengadaan->status_supplier === 'submitted')
          <button class="btn btn-sm btn-secondary">{{ ucwords($pengadaan->status_supplier) }}</button>   
        @elseif ($pengadaan->status_supplier === 'evaluasi')
          <button class="btn btn-sm btn-warning">{{ ucwords($pengadaan->status_supplier) }}</button>
        @elseif ($pengadaan->status_supplier === 'acc')
          <button class="btn btn-sm btn-primary">{{ ucwords($pengadaan->status_supplier) }}</button>
        @elseif ($pengadaan->status_supplier === 'validasi')
          <button class="btn btn-sm btn-primary">{{ ucwords($pengadaan->status_supplier) }}</button>
        @elseif ($pengadaan->status_supplier === 'selesai')
          <button class="btn btn-sm btn-primary">{{ ucwords($pengadaan->status_supplier) }}</button>
        @elseif ($pengadaan->status_supplier === 'tolak')   
          <button class="btn btn-sm btn-danger">{{ ucwords($pengadaan->status_supplier) }}</button>
        @endif
      </td>
    </tr>
    @if ($pengadaan->status_supplier === 'tolak')
      <tr>
        <th>Alasan Penolakan</th>
        <td>{!! $pengadaan->alasan_penolakan !!}</td>
      </tr>
    @endif
    <tr>
      <th>Harga Penawaran</th>
      <td>Rp. {{ number_format($pengadaan->harga_penawaran) }},-</td>
    </tr>
    @if ($pengadaan->harga_terkoreksi === null)
    <tr>
      <th>Harga Terkoreksi</th>
      <td>Belum dimasukkan</td>
    </tr>
    @else        
    <tr>
      <th>Harga Terkoreksi</th>
      <td>Rp. {{ number_format($pengadaan->harga_terkoreksi  ) }},-</td>
    </tr>
    @endif
    @if ($pengadaan->status_supplier === 'evaluasi')
    <tr>
      <th>Harga Terkoreksi</th>
      <td>Rp. {{ number_format($pengadaan->harga_terkoreksi) }},-</td>
    </tr>
    @endif
    @if ($pengadaan->bukti_tf !== null)
    <tr>
      <th>Bukti Transfer</th>
      <td><img src="{{ asset('storage/'.$pengadaan->bukti_tf) }}" alt="" width="700px"></td>
    </tr>
    <tr>
      <th></th>
      <td>
        <form action="{{ route('dpal.pengadaanBarang.checkBuktiTf',$pengadaan->id) }}" method="post">
          @csrf
          @method('patch')
          <p>Apakah sudah lunas?</p>
          <div class="form-check d-flex">
            <div class="me-5">
              <input class="form-check-input" type="radio" name="status_supplier" id="BelumLunas" value="belum_lunas">
              <label class="form-check-label" for="BelumLunas">
                Belum Lunas
              </label>
            </div>
            <div>
              <input class="form-check-input" type="radio" name="status_supplier" id="lunas" value="selesai">
              <label class="form-check-label" for="lunas">
                Lunas
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
        </form>
      </td>
    </tr>
    @endif
    <tr>
      <th>File Proposal</th>
      <td scope="row" colspan="3" class="text-primary"><a href="/download/{{ $pengadaan->proposal }}">Proposal</a></td>
    </tr>
  </tbody>
</table>
@endsection