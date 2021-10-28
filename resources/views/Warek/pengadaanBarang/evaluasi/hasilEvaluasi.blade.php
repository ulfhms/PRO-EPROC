@extends('layouts/warek/main-layout')
@section('title', 'Hasil Evaluasi')
@section('content')
@include('warek/pengadaanBarang/navbarPengadaan')
<div class="card">
  <h5 class="card-header bg-success text-white mt-3">Pilih Supplier yang di ACC</h5>
  <div class="card-body">
    <select class="form-select" aria-label="Default select example">
      <option selected>Pilih Supplier</option>
      <option value="1">CV Merah Putih</option>
      <option value="2">CV Kartika Raya</option>
      <option value="3">CV Medali</option>
    </select>
    <div class="d-flex justify-content-end mt-2">
      <a href="{{ route('warek.pengadaanBarang.pemenang') }}" class="btn btn-sm btn-primary">Simpan</a>
    </div>
  </div>
</div>
<div class="accordion mt-4" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Hasil Evaluasi : CV Merah Putih <a href="{{ route('warek.pengadaanBarang.editHasilEvaluasi') }}" class=" ms-2 btn btn-sm btn-warning"><i class="far fa-edit"></i></a>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Hasil Evaluasi : CV Kartika Raya <a href="{{ route('warek.pengadaanBarang.editHasilEvaluasi') }}" class=" ms-2 btn btn-sm btn-warning"><i class="far fa-edit"></i></a>
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
        Hasil Evaluasi : CV Medali <a href="{{ route('warek.pengadaanBarang.editHasilEvaluasi') }}" class=" ms-2 btn btn-sm btn-warning"><i class="far fa-edit"></i></a>
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