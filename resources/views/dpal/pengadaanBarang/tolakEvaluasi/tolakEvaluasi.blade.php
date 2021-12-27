@extends('layouts/main-layout')
@section('title', 'Tolak Evaluasi')
@section('content')
@include('layouts/alert')
@include('dpal/pengadaanBarang/navbarPengadaan')
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Peserta</th>
      <th scope="col">Harga Penawaran</th>
      <th scope="col">Harga Terkoreksi</th>
      <th scope="col">Alasan Penolakan</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @php ($no=1)
    @foreach ($pengsups as $sups)        
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td><a href="{{ route('dpal.pengadaanBarang.detailPesertaPengadaan',$sups->supplier->id) }}">{{ $sups->supplier->nama_supplier }}</a></td>
      <td>Rp {{ number_format($sups->harga_penawaran) }},-</td>
      <td>Rp {{ number_format($sups->harga_terkoreksi) }},-</td>
      <td>
          @if($sups->alasan_penolakan === null)
            Belum terisi
          @else
            Sudah terisi
          @endif
      </td>
      <td> 
        <button type="button" class="badge badge-danger" data-bs-toggle="modal" data-bs-target="#tolak{{ $sups->id }}">
          Tolak
        </button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<!-- Modal tolak-->
@foreach ($pengsups as $sups)    
<div class="modal fade" id="tolak{{ $sups->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="exampleModalLabel">Tawaran Ditolak</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table">
          <tbody>
            <tr>
              <th scope="row">Supplier</th>
              <td>{{ $sups->supplier->nama_supplier }}</td>
            </tr>
            <tr>
              <th scope="row">NPWP</th>
              <td>{{ $sups->supplier->npwp }}</td>
            </tr>
            <tr>
              <th scope="row">Harga Penawaran</th>
              <td>Rp {{ number_format($sups->harga_penawaran) }},-</td>
            </tr>
            <tr>
              <th scope="row">Harga Terkoreksi</th>
              <td>Rp {{ number_format($sups->harga_terkoreksi) }},-</td>
            </tr>
            @if ($sups->alasan_penolakan === null)
            @if ($user = Auth::user())
              @if ($user->hasRole('dpal'))
              <tr>
                <th scope="row">Alasan Penolakan</th>
                <td>
                  <form action="{{ route('dpal.pengadaanBarang.formTolakEvaluasi', $sups->id) }}" method="post">
                    @csrf
                    @method('patch')
                      <textarea class="form-control @error('alasan_penolakan') is-invalid @enderror" id="editor1" rows="5" name="alasan_penolakan"></textarea>
                      @error('alasan_penolakan')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                </form>
                </td>
              </tr>
              @endif
            @endif
            @else
            <tr>
              <th scope="row">Alasan Penolakan</th>
              <td>{!! $sups->alasan_penolakan !!}</td>
            </tr>
            @endif

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
