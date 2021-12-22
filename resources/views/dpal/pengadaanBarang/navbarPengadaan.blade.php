<div class="row">
  <div class="col-12">
    <div class="bg-primary fw-bold text-white text-center mb-2 p-2">{{ ucwords($pengadaan->budjet->nama_kegiatan) }}</div>
    <div class="d-flex flex-wrap bg-warning justify-content-center">
      <a href="{{ route('dpal.pengadaanBarang.pengumumanPengadaan', $pengadaan->id) }}" class="badge text-dark fs-6 ms-2 me-2 bg-warning {{ request()->is('dpal/pengadaanBarang/pengumumanPengadaan') ? 'text-decoration-underline' : 'text-decoration-none'}}  ">Pengumuman</a>
      <a href="{{ route('dpal.pengadaanBarang.pesertaPengadaan', $pengadaan->id) }}" class="badge text-dark fs-6 ms-2 me-2 bg-warning {{ request()->is('dpal/pengadaanBarang/pesertaPengadaan') ? 'text-decoration-underline' : 'text-decoration-none'}}">Peserta</a>
      <a href="{{ route('dpal.pengadaanBarang.pesertaEvaluasi', $pengadaan->id) }}" class="badge text-dark fs-6 ms-2 me-2 bg-warning {{ request()->is('dpal/pengadaanBarang/pesertaEvaluasi') ? 'text-decoration-underline' : 'text-decoration-none'}}">Peserta Evaluasi</a>
      <a href="{{ route('dpal.pengadaanBarang.hasilEvaluasi', $pengadaan->id) }}" class="badge text-dark fs-6 ms-2 me-2 bg-warning {{ request()->is('dpal/pengadaanBarang/hasilEvaluasi') ? 'text-decoration-underline' : 'text-decoration-none'}}">Hasil Evaluasi</a>
      <a href="{{ route('dpal.pengadaanBarang.pemenang',$pengadaan->id) }}" class="badge text-dark fs-6 ms-2 me-2 bg-warning {{ request()->is('dpal/pengadaanBarang/pemenang') ? 'text-decoration-underline' : 'text-decoration-none'}}">Pemenang</a>
    </div>
  </div>
</div>