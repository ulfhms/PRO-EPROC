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
    <tr>
      <th scope="row">1</th>
      <td><a href="{{ route('dpal.pengadaanBarang.detailPesertaPengadaan') }}">CV Merah Putih</a></td>
      <td>01.234.567.8-123.000</td>
      <td>Rp 70.000.000</td>
      <td>
        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#tolak">
          Tolak
        </button>
      </td>
      <td>
        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fas fa-times"></i>
        </button>
        <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>CV Kartika Raya</td>
      <td>01.234.567.8-123.001</td>
      <td>Rp 75.000.000</td>
      <td>
        <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#submit">
          Submit
        </button>
      </td>
      <td>
        <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
        <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >CV Medali</td>
      <td>01.234.567.8-123.002</td>
      <td>Rp 65.000.000</td>
      <td>
        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#evaluasi">
          Evaluasi
        </button>
      </td>
      <td>
        <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
        <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td >CV Permata</td>
      <td>01.234.567.8-123.003</td>
      <td>Rp 60.000.000</td>
      <td>
        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#tolak">
          Tolak
        </button>
      </td>
      <td>
        <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
        <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td >CV Murah Hati</td>
      <td>01.234.567.8-123.004</td>
      <td>Rp 50.000.000</td>
      <td>
        <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#tolak">
          Submit
        </button>
      </td>
      <td>
        <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
        <a href="#" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
      </td>
    </tr>
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