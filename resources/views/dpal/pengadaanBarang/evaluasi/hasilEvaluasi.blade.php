@extends('layouts/main-layout')
@section('title', 'Hasil Evaluasi')
@section('content')
@include('dpal/pengadaanBarang/navbarPengadaan')
@if ($pengadaan->tgl_pengumuman_pemenang === null)    
<div class="card">
  <h5 class="card-header bg-success text-white mt-3">Pilih Supplier yang di ACC</h5>
  <form action="{{ route('dpal.pengadaanBarang.formPemenang',$pengadaan->id) }}" method="post">
    @method('patch')
    @csrf
    <div class="card-body">
      <select class="js-example-basic-multiple form-control @error('pemenang') is-invalid @enderror" aria-label="multiple select example" name="pemenang[]" multiple="multiple">
        @foreach ($pengsups as $sups)
        <option value="{{ $sups->supplier_id }}">{{ $sups->supplier->nama_supplier }}</option>
        @endforeach
      </select>
      @error('pemenang')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
      <div class="d-flex justify-content-end mt-2">
        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
      </div>
    </div>
  </form>
</div>
@endif
@foreach ($pengsups as $sups)      
<div class="accordion mt-4" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Hasil Evaluasi : {{ $sups->supplier->nama_supplier }}
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <table class="table">
          <tbody>
            {{-- <tr>
              <th scope="row">Kode</th>
              <td>Sup-1</td>
            </tr> --}}
            <tr>
              <th scope="row">NPWP</th>
              <td>{{ $sups->supplier->npwp }}</td>
            </tr>
            <tr>
              <th scope="row">Status</th>
              <td>
                @if ($sups->status_supplier === 'submitted')
                <span class="badge badge-secondary">
                  Submitted
                </span>
                @elseif($sups->status_supplier === 'tolak')   
                <span class="badge badge-danger">
                  Tolak
                </span>
                @elseif($sups->status_supplier === 'acc')   
                <span class="badge badge-primary">
                  Acc
                </span>
                @elseif($sups->status_supplier === 'validasi')   
                <span class="badge badge-primary">
                  Validasi
                </span>
                @elseif($sups->status_supplier === 'selesai')   
                <span class="badge badge-primary">
                  Lunas
                </span>
                @elseif($sups->status_supplier === 'belum_lunas')   
                <span class="badge badge-danger">
                  Belum Lunas
                </span>
                @elseif($sups->status_supplier === 'evaluasi')   
                <span class="badge badge-warning">
                  Evaluasi
                </span>
                @endif
              </td>
            </tr>
            <tr>
              <th scope="row">Alamat</th>
              <td>{{ $sups->supplier->alamat }}</td>
            </tr>
            <tr>
              <th scope="row">Telepon</th>
              <td>{{ $sups->supplier->telepon }}</td>
            </tr>
            <tr>
              <th scope="row">Nara Hubung</th>
              <td>{{ $sups->supplier->narahubung }}</td>
            </tr>
            <tr>
              <th scope="row">Bidang Usaha</th>
              <td>{{ $sups->supplier->bidangusaha['nama_bingus'] }}</td>
            </tr>
            <tr>
              <th scope="row">No Rekening</th>
              <td>({{ $sups->supplier->bank->nama_bank }}) {{ $sups->supplier->no_rek }}</td>
            </tr>
            <tr>
              <th scope="row">Harga Penawaran</th>
              <td>Rp {{ number_format($sups->harga_penawaran) }} ,-</td>
            </tr>
            <tr>
              <th scope="row">Harga Terkoreksi</th>
              <td>Rp {{ number_format($sups->harga_terkoreksi) }} ,-</td>
            </tr>
            <tr>
              <th scope="row">Harga Selisih</th>
              <td>Rp {{ number_format($sups->harga_penawaran - $sups->harga_terkoreksi) }} ,-</td>
            </tr>
            <tr>
              <th scope="row">Riwayat Hasil Penawaran Supplier</th>
              <td>{!! $sups->dpal_ke_supplier ?? 'Tidak ada penawaran' !!}</td>
            </tr>
            <tr>
              <th scope="row">Riwayat Evaluasi ke Supplier</th>
              <td>{!! $sups->dpal_ke_supplier ?? 'Tidak ada penawaran'!!}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection