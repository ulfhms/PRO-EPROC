@extends('layouts/dpal/main-layout')
@section('title', 'Hasil Evaluasi')
@section('content')
@include('dpal/pengadaanBarang/navbarPengadaan')
<div class="card">
  <h5 class="card-header bg-success text-white mt-3">Pilih Supplier yang di ACC</h5>
  <div class="card-body">
    <select class="js-example-basic-multiple form-control" aria-label="multiple select example" name="states[]" multiple="multiple">
      <option value="merah" >CV Merah Putih</option>
      <option value="kartika">CV Kartika Raya</option>
      <option value="medali">CV Medali</option>
    </select>
    <div class="d-flex justify-content-end mt-2">
      <a href="{{ route('dpal.pengadaanBarang.pemenang') }}" class="btn btn-sm btn-primary">Simpan</a>
    </div>
  </div>
</div>
<div class="accordion mt-4" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Hasil Evaluasi : CV Merah Putih 
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <table class="table">
          <tbody>
            <tr>
              <th scope="row">Kode</th>
              <td>Sup-1</td>
            </tr>
            <tr>
              <th scope="row">NPWP</th>
              <td>01.234.567.8-123.000</td>
            </tr>
            <tr>
              <th scope="row">Alamat</th>
              <td>Jl.Simpang Kanan Sidoarjo</td>
            </tr>
            <tr>
              <th scope="row">Telepon</th>
              <td>0895642343678</td>
            </tr>
            <tr>
              <th scope="row">Nara Hubung</th>
              <td>Budi Utomo</td>
            </tr>
            <tr>
              <th scope="row">Bidang Usaha</th>
              <td>Komputer</td>
            </tr>
            <tr>
              <th scope="row">No Rekening</th>
              <td>(BCA) 9823947</td>
            </tr>
            <tr>
              <th scope="row">Harga Penawaran</th>
              <td>Rp 70.000.000</td>
            </tr>
            <tr>
              <th scope="row">Harga Terkoreksi</th>
              <td>Rp 67.000.000</td>
            </tr>
            <tr>
              <th scope="row">Harga Selisih</th>
              <td>Rp 3.000.000</td>
            </tr>
            <tr>
              <th scope="row">Riwayat Hasil Penawaran Supplier</th>
              <td>Tidak bisa Maximal Rp 67.000.000,-</td>
            </tr>
            <tr>
              <th scope="row">Riwayat Evaluasi ke Supplier</th>
              <td>Apa bisa diturunkan ke Rp 65.000.000,-</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Hasil Evaluasi : CV Kartika Raya 
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Hasil Evaluasi : CV Medali 
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>



@endsection