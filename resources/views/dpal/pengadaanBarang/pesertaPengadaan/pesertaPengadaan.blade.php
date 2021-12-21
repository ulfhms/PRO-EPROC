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
        <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#submit">
          Submit
        </button>
        @elseif($sups->status_supplier === 'tolak')   
        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#tolak">
          Tolak
        </button>
        @elseif($sups->status_supplier === 'evaluasi')   
        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#evaluasi">
          Evaluasi
        </button>
        @endif
      </td>
      <td>
        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fas fa-times"></i>
        </button>
        <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="exampleModalLabel">Tolak Penawaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <ul class="list-group">
            <li class="list-group-item">Pengadaan :Pengadaan Server untuk Laboratorium Komputer</li>
            <li class="list-group-item">Supplier : CV Merah Putih</li>
            <li class="list-group-item">Harga Penwaran : 	Rp 70.000.000</li>
          </ul>
          <label for="exampleFormControlTextarea1" class="form-label fw-bold mt-3">Alasan Penolakan</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="tolak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <td>CV Merah Putih</td>
            </tr>
            <tr>
              <th scope="row">NPWP</th>
              <td>01.234.567.8-123.000</td>
            </tr>
            <tr>
              <th scope="row">Harga Penawaran</th>
              <td>Rp 70.000.000</td>
            </tr>
            <tr>
              <th scope="row">Alasan Penolakan</th>
              <td>Kriteria tidak memenuhi syarat</td>
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

<div class="modal fade" id="submit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <td>CV Kartika Raya</td>
            </tr>
            <tr>
              <th scope="row">NPWP</th>
              <td>01.234.567.8-123.000</td>
            </tr>
            <tr>
              <th scope="row">Harga Penawaran</th>
              <td>Rp 70.000.000</td>
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

<div class="modal fade" id="evaluasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <td>CV Medali</td>
            </tr>
            <tr>
              <th scope="row">NPWP</th>
              <td>01.234.567.8-123.002</td>
            </tr>
            <tr>
              <th scope="row">Harga Penawaran</th>
              <td>Rp 65.000.000</td>
            </tr>
            <tr>
              <th scope="row">Status</th>
              <td>Supplier telah masuk dalam kategori evaluasi</td>
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
@endsection