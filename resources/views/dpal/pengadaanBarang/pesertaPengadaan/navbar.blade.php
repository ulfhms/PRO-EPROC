<div class="row mb-4">
  <div class="col-12 d-flex justify-content-center">
    <div class="d-flex flex-wrap bg-warning">
      <a href="{{ route('dpal.pengadaanBarang.detailPesertaPengadaan') }}" class="badge text-dark fs-6 ms-2 me-2 bg-warning {{ request()->is('dpal/pengadaanBarang/detailPesertaPengadaan') ? 'text-decoration-underline' : 'text-decoration-none'}}  ">Profile</a>
      <a href="{{ route('dpal.pengadaanBarang.detailProdukPesertaPengadaan') }}" class="badge text-dark fs-6 ms-2 me-2 bg-warning {{ request()->is('dpal/pengadaanBarang/detailProdukPesertaPengadaan') ? 'text-decoration-underline' : 'text-decoration-none'}}">Produk</a>
    </div>
  </div>
</div>