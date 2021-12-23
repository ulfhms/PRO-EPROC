@extends('layouts/main-layout')
@section('title','Peserta')
@section('content')
@include('dpal/pengadaanBarang/navbarPengadaan')
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Peserta</th>
      <th scope="col">NPWP</th>
      <th scope="col">Harga Penawaran</th>
      <th scope="col">Status</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    @php ($no=1)
    @foreach ($pengsups as $sups)        
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td><a href="{{ route('dpal.pengadaanBarang.detailPesertaPengadaan',$sups->supplier->id) }}">{{ $sups->supplier->nama_supplier }}</a></td>
      <td>{{ $sups->supplier->npwp }}</td>
      <td>Rp {{ number_format($sups->harga_penawaran) }},-</td>
      <td>
        
        @if ($sups->status_supplier === 'submitted')
        <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#submit{{ $sups->id }}">
          Submitted
        </button>
        @elseif($sups->status_supplier === 'tolak')   
        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#tolak{{ $sups->id }}">
          Tolak
        </button>
        @elseif($sups->status_supplier === 'acc')   
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#tolak{{ $sups->id }}">
          Acc
        </button>
        @elseif($sups->status_supplier === 'validasi')   
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#tolak{{ $sups->id }}">
          Validasi
        </button>
        @elseif($sups->status_supplier === 'selesai')   
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#tolak{{ $sups->id }}">
          Selesai
        </button>
        @elseif($sups->status_supplier === 'belum_lunas')   
        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#tolak{{ $sups->id }}">
          Belum Lunas
        </button>
        @elseif($sups->status_supplier === 'evaluasi')   
        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#evaluasi{{ $sups->id }}">
          Evaluasi
        </button>
        @endif
      </td>
      <td>
        @php (
            $kondisi = $sups->status_supplier==='tolak'||$sups->status_supplier === 'evaluasi'||$sups->status_supplier === 'acc'||$sups->status_supplier === 'validasi'||$sups->status_supplier === 'selesai'||$sups->status_supplier === 'belum_lunas')
        @if ($kondisi)
          <button type="button" class="btn btn-sm btn-primary">
            Telah di proses
          </button>
        @else
          <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#formTolak{{ $sups->id }}">
            <i class="fas fa-times"></i>
          </button>
          <form action="{{ route('dpal.pengadaanBarang.formEvaluasi', $sups->id) }}" method="post">
            @method('patch')
            @csrf
            <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
          </form>      
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<!-- Button trigger modal -->

{{-- form penolakan --}}
@foreach ($pengsups as $sups)    
<!-- Modal -->
<div class="modal fade" id="formTolak{{ $sups->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="exampleModalLabel">Tolak Penawaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('dpal.pengadaanBarang.formTolak', $sups->id) }}" method="post">
        @csrf
        @method('patch')
      <div class="modal-body">
        <div class="mb-3">
          <ul class="list-group">
            <li class="list-group-item">Pengadaan : {{ $sups->pengadaan->budjet->nama_kegiatan }}</li>
            <li class="list-group-item">Supplier : {{ $sups->supplier->nama_supplier }}</li>
            <li class="list-group-item">Harga Penawaran : 	Rp {{ number_format($sups->harga_penawaran) }},-</li>
          </ul>
          <label for="exampleFormControlTextarea1" class="form-label fw-bold mt-3">Alasan Penolakan</label>
          <textarea class="form-control" id="editor1" rows="5" name="alasan_penolakan"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endforeach


@foreach ($pengsups as $sups)    
<!-- Modal tolak-->
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
              <th scope="row">Alasan Penolakan</th>
              <td>{{ $sups->alasan_penolakan }}</td>
            </tr>

          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach

@foreach ($pengsups as $sups)
    {{-- Modal Submit --}}
<div class="modal fade" id="submit{{ $sups->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-secondary text-white">
        <h5 class="modal-title" id="exampleModalLabel">Submit</h5>
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
              <th scope="row">Status</th>
              <td>Supplier telah mengikuti pengadaan</td>
            </tr>

          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach


@foreach ($pengsups as $sups)
{{-- Modal evaluasi --}}
<div class="modal fade" id="evaluasi{{ $sups->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-warning text-white">
        <h5 class="modal-title" id="exampleModalLabel">Evaluasi</h5>
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
              <td>Rp {{ $sups->harga_penawaran }}</td>
            </tr>
            <tr>
              <th scope="row">Status</th>
              <td>{{ ucwords($sups->status_supplier) }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection