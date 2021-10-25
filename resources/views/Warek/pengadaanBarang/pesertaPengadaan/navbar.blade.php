<div class="row mb-4">
  <div class="col-12 d-flex justify-content-center">
    <div class="d-flex flex-wrap bg-warning">
      <a href="{{ route('warek.pengadaanBarang.detailPesertaPengadaan') }}" class="badge text-dark fs-6 ms-2 me-2 bg-warning {{ request()->is('warek/pengadaanBarang/detailPesertaPengadaan') ? 'text-decoration-underline' : 'text-decoration-none'}}  ">Profile</a>
      <a href="{{ route('warek.pengadaanBarang.detailProdukPesertaPengadaan') }}" class="badge text-dark fs-6 ms-2 me-2 bg-warning {{ request()->is('warek/pengadaanBarang/detailProdukPesertaPengadaan') ? 'text-decoration-underline' : 'text-decoration-none'}}">Produk</a>
    </div>
  </div>
</div>