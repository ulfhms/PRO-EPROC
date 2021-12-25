@extends('layouts/main-layout')
@section('title')
    {{ucwords($pengsup->pengadaan->budjet->nama_kegiatan)}}
@endsection
@section('content')
@php
$kondisi = $pengsup->status_supplier === 'evaluasi'|| $pengsup->status_supplier === 'acc'|| $pengsup->status_supplier === 'validasi'||$pengsup->status_supplier === 'selesai'|| $pengsup->status_supplier === 'belum_lunas'
@endphp
<table class="table">
  <tbody>
    {{-- <tr>
      <th scope="row">Kode</th>
      <td class="fw-bold">PBA-0001</td>
    </tr> --}}
    <tr>
      <th scope="row">Nama Pengadaan</th>
      <td>{{ucwords($pengsup->pengadaan->budjet->nama_kegiatan)}}</td>
    </tr>
    <tr>
      <th scope="row">Status</th>
      <td>
        @if ($pengsup->status_supplier === 'submitted')
          <button class="btn btn-sm btn-secondary">{{ ucwords($pengsup->status_supplier) }}</button>   
        @elseif ($pengsup->status_supplier === 'evaluasi')
          <button class="btn btn-sm btn-warning">{{ ucwords($pengsup->status_supplier) }}</button>
        @elseif ($pengsup->status_supplier === 'acc')
          <button class="btn btn-sm btn-primary">{{ ucwords($pengsup->status_supplier) }}</button>
        @elseif ($pengsup->status_supplier === 'validasi')
          <button class="btn btn-sm btn-primary">{{ ucwords($pengsup->status_supplier) }}</button>
        @elseif ($pengsup->status_supplier === 'selesai')
          <button class="btn btn-sm btn-primary">Selesai</button>
        @elseif ($pengsup->status_supplier === 'belum_lunas')   
          <button class="btn btn-sm btn-danger">Belum Lunas</button>
        @elseif ($pengsup->status_supplier === 'tolak')   
          <button class="btn btn-sm btn-danger">{{ ucwords($pengsup->status_supplier) }}</button>
        @endif
      </td>
    </tr>
    {{-- <tr>
      <th scope="row">Barang</th>
      <td>Komputer</td>
    </tr> --}}
    {{-- <tr>
      <th scope="row">Jumlah</th>
      <td>10</td>
    </tr> --}}
    <tr>
      <th scope="row">Harga Penawaran</th>
      <td>Rp {{ number_format($pengsup->harga_penawaran) }},-</td>
    </tr>
    @if ($kondisi)        
    <tr>
      <th scope="row">Harga Terkoreksi</th>
      <td>Rp {{ number_format($pengsup->harga_terkoreksi) }},-</td>
    </tr>
    <tr class="">
      <th> Hasil Evaluasi</th>
      <td>{!! $pengsup->dpal_ke_supplier ?? 'Belum ada Penawaran' !!}</td>
    </tr>
    <tr class="">
      <th>Hasil Respon</th>
      <td>{!! $pengsup->supplier_ke_dpal ?? 'Belum ada Penawaran' !!}</td>
    </tr>
    @endif
    @if ($pengsup->status_supplier === 'evaluasi')        
      <form action="{{ route('supplier.pengadaanBarang.updateSubmit', $pengsup->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <tr>
          <th scope="row">Harga Terkoreksi:</th>
          <td>
              @if ($pengsup->status_supplier === 'submitted')
              <input type="number" class="form-control" id="exampleInputPrice" name="harga_terkoreksi" readonly aria-describedby="priceHelp!" placeholder="Anda bisa mengisi kolom ini untuk harga negosiasi">
              @elseif($pengsup->status_supplier === 'evaluasi')
              <input type="number" class="form-control" id="exampleInputPrice" name="harga_terkoreksi" aria-describedby="priceHelp!" placeholder="Anda bisa mengisi kolom ini untuk harga negosiasi" value="{{ $pengsup->harga_terkoreksi }}">
              @endif
          </td>
        </tr>
        <tr>
          <th>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Beri Respon</label>
              <td>
                 <textarea class="form-control" id="editor1" rows="10" name="supplier_ke_dpal">{!! $pengsup->supplier_ke_dpal !!}</textarea>
              </td>
            </div>
          </th>
        </tr>
        {{-- <tr>
          <th>Proposal</th>
          <td><input class="form-control form-control-sm" id="formFileSm" type="file" name="proposal"></td>
        </tr> --}}
        <tr>
          <th scope="row"></th>
          <td>
            <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
          </td>
        </tr>
      </form>
    @endif
    @if ($pengsup->status_supplier === 'tolak')
    <tr>
      <th>Alasan Penolakan</th>
      <td>{!! $pengsup->alasan_penolakan !!}</td>
    </tr>
    @endif
    @if ($pengsup->bukti_tf !== null)
    <tr>
      <th>Nominal Transfer</th>
      <td>Rp {{ number_format($pengsup->nominal_tf) }} ,-</td>
    </tr>
    <tr>
      <th>Bukti Transfer</th>
      <td><img src="{{ asset('storage/'.$pengsup->bukti_tf) }}" alt="" width="700px"></td>
    </tr>
      @if ($pengsup->status_supplier === 'validasi')        
      <tr>
        <th>Apakah sudah lunas?</th>
        <td>
          <form action="{{ route('supplier.pengadaanBarang.checkBuktiTf',$pengsup->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="form-check d-flex">
              <div class="me-5">
                <input class="form-check-input @error('status_supplier') is-invalid @enderror" type="radio" name="status_supplier" id="BelumLunas" value="belum_lunas">
                <label class="form-check-label" for="BelumLunas">
                  Belum Lunas
                </label>
              </div>
              <div>
                <input class="form-check-input @error('status_supplier') is-invalid @enderror" type="radio" name="status_supplier" id="lunas" value="selesai">
                <label class="form-check-label" for="lunas">
                  Lunas
                </label>
              </div>
            </div>
            <label for="exampleFormControlTextarea1" class="form-label fw-bold mt-3">Alasan belum lunas</label> <small>Hanya diisi ketika belum lunas</small>
            <textarea class="form-control @error('alasan_gagal') is-invalid @enderror" id="editor1" rows="5" name="alasan_gagal"></textarea>
            @error('alasan_gagal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror    
        </td>
      </tr>
      <tr>
        <th></th>
        <td>
          <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
        </form>
      </td>
      </tr>
      @endif
    @endif
  </tbody>
</table>
{{-- <table class="table table-borderless">
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
</table> --}}
@endsection