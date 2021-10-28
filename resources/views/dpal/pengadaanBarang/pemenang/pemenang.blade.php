@extends('layouts/warek/main-layout')
@section('title', 'Pemenang')
@section('content')
@include('dpal/pengadaanBarang/navbarPengadaan')
<div class="mt-4">
  <div class="row">
    <div class="col-2">
        <img src="{{ asset('logo/ikea.svg') }}" alt="">
    </div>
    <div class="col">
        <h3 class="">CV Merah Putih</h3>
        <p class="card-text">Supplier</p>
    </div>
  </div>
  <div class="row pt-4">
    <table class="table table-hover">
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Kode</td>
            <td>Sup-1</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Nama Perusahaan</td>
            <td>CV Merah Putih</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>NPWP</td>
            <td>01.234.567.8-123.000</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Alamat</td>
            <td>Jl.Simpang Kanan Sidoarjo</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Telepon</td>
            <td>0895642343678</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Nara Hubung</td>
            <td>Bapak Budi</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Bidang Usaha</td>
            <td>Komputer</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>No Rekening</td>
            <td>9823947</td>
          </tr>
          <tr class="table-info">
            <th scope="row">9</th>
            <td>Nilai Kontrak</td>
            <td>Rp. 50.000.000</td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>File</td>
            <td><a href="">Cetak Berita Acara</a></td>
          </tr>
        </tbody>
      </table>
  </div>
  <div class="accordion mt-2" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
          Hasil Evaluasi : CV Merah Putih
        </button>
      </h2>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
        <div class="accordion-body">
          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center mt-3">
    <a href="{{ route('dpal.pengadaanBarang.pesertaPengadaan') }}" class="btn btn-sm btn-warning">Kembali</a>
  </div>
</div>
@endsection