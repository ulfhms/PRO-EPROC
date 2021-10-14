<div class="row">
  <div class="col-12 d-flex justify-content-center">
    <div class="d-flex flex-wrap bg-warning">
      <a href="{{ route('warek.pengadaanBarang.pengumumanPengadaan') }}" class="badge text-dark fs-6 ms-2 me-2 bg-warning {{ request()->is('warek/pengadaanBarang/pengumumanPengadaan') ? 'text-decoration-underline' : 'text-decoration-none'}}  ">Pengumuman</a>
      <a href="{{ route('warek.pengadaanBarang.pesertaPengadaan') }}" class="badge text-dark fs-6 ms-2 me-2 bg-warning {{ request()->is('warek/pengadaanBarang/pesertaPengadaan') ? 'text-decoration-underline' : 'text-decoration-none'}}">Peserta</a>
      <a href="{{ route('warek.pengadaanBarang.hasilEvaluasi') }}" class="badge text-dark fs-6 ms-2 me-2 bg-warning {{ request()->is('warek/pengadaanBarang/hasilEvaluasi') ? 'text-decoration-underline' : 'text-decoration-none'}}">Hasil Evaluasi</a>
      <a href="{{ route('warek.pengadaanBarang.pemenang') }}" class="badge text-dark fs-6 ms-2 me-2 bg-warning {{ request()->is('warek/pengadaanBarang/pemenang') ? 'text-decoration-underline' : 'text-decoration-none'}}">Pemenang</a>
    </div>
  </div>
</div>