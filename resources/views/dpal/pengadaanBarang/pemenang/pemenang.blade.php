@extends('layouts/main-layout')
@section('title', 'Pemenang')
@section('content')
@include('dpal/pengadaanBarang/navbarPengadaan')
<div class="m-4">
  @foreach ($pengsups as $sups)      
  <div class="row">
    <div class="col-2">
      @if ($sups->supplier->logo_supplier === null)
      <img src="{{ asset('logo/supplier.png') }}" alt="" class="img-fluid">
      @else
      <img src="{{ asset('storage/'.$sups->supplier->logo_supplier) }}" alt="" class="img-fluid">
      @endif
    </div>
    <div class="col">
        <h3 class="">{{ $sups->supplier->nama_supplier }}</h3>
    </div>
  </div>
  <div class="row pt-4">
    <table class="table table-hover">
        <tbody>
          {{-- <tr>
            <td>Kode</td>
            <td>Sup-1</td>
          </tr> --}}
          <tr>
            <td>NPWP</td>
            <td>{{ $sups->supplier->npwp }}</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>{{ $sups->supplier->alamat }}</td>
          </tr>
          <tr>
            <td>Telepon</td>
            <td>{{ $sups->supplier->telepon }}</td>
          </tr>
          <tr>
            <td>Nara Hubung</td>
            <td>{{ $sups->supplier->narahubung }}</td>
          </tr>
          <tr>
            <td>Bidang Usaha</td>
            <td>{{ $sups->supplier->bidangusaha['nama_bingus'] }}</td>
          </tr>
          <tr>
            <td>No Rekening</td>
            <td>({{ $sups->supplier->bank->nama_bank }}) {{ $sups->supplier->no_rek }}</td>
          </tr>
          {{-- <tr class="table-info">
            <td>Nilai Kontrak</td>
            <td>Rp. 50.000.000</td>
          </tr> --}}
          <tr>
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
          Hasil Evaluasi : {{ $sups->supplier->nama_supplier }}
        </button>
      </h2>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
        <div class="accordion-body">
          <table class="table">
            <tbody>
              <tr>
                <th scope="row">Harga Penawaran</th>
                <td>Rp {{ number_format($sups->harga_penawaran) }} ,-</td>
              </tr>
              <tr>
                <th scope="row">Harga Terkoreksi</th>
                <td>Rp {{ number_format($sups->harga_terkoreksi) }} ,-</td>
              </tr>
              <tr>
                <th scope="row">Harga Selisih</th>
                <td>Rp {{ number_format($sups->harga_penawaran - $sups->harga_terkoreksi) }} ,-</td>
              </tr>
              <tr>
                <th scope="row">Riwayat Hasil Penawaran Supplier</th>
                <td>{!! $sups->supplier_ke_dpal ?? 'Tidak ada penawaran' !!}</td>
              </tr>
              <tr>
                <th scope="row">Riwayat Evaluasi ke Supplier</th>
                <td>{!! $sups->dpal_ke_supplier ?? 'Tidak ada penawaran' !!}</td>
              </tr>
              <tr>
                <th>Status</th>
                @if ($sups->status_supplier === 'selesai')
                <td><span class="badge-primary">Selesai</span></td>
                @elseif ($sups->status_supplier === 'belum_lunas')
                <td><span class="badge-danger">Belum Lunas</span></td>
                @elseif ($sups->status_supplier === 'validasi')
                <td><span class="badge-primary">Validasi</span></td>
                @elseif ($sups->status_supplier === 'acc')
                <td><span class="badge-primary">Acc</span></td>
                @endif
              </tr>
              @if ($sups->bukti_tf === null)
                <tr>
                  <th scope="row">Bukti Transfer</th>
                  <td>
                    <form action="{{ route('dpal.pengadaanBarang.formBuktiTf', $sups->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('patch')
                      <input type="file" name="bukti_tf" id="" width="700" class="form-control form-control-sm @error('bukti_tf') is-invalid @enderror">
                      @error('bukti_tf')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </td>
                  </tr>
                  <tr>
                    <th>Nominal Transfer</th>
                    <td>
                      <input type="number" name="nominal_tf" class="form-control @error('nominal_tf') is-invalid @enderror" value="{{ old('nominal_tf') }}">
                      @error('nominal_tf')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </td>
                  </tr>
                  <tr>
                    <th></th>
                    <td>
                      <button type="submit" class="btn btn-sm btn-primary">Kirim</button>
                    </td>
                  </tr>
                  </form>
                  @else 
                  <tr>
                    <th>Nominal Transfer</th>
                    <td>
                      <p>Rp {{ number_format($sups->nominal_tf) }} ,-</p>
                    </td>
                  </tr>
                    @if ($sups->status_supplier === 'belum_lunas')
                        <tr>
                          <th>Alasan belum lunas</th>
                          <td>{!! $sups->alasan_gagal !!}</td>
                        </tr>
                    @endif
                  <tr>
                <th scope="row">Bukti Transfer</th>
                <td>
                  <img src="{{ asset( 'storage/'.$sups->bukti_tf ) }}" alt="" width="500" class="mb-2">
                </td>
              </tr>
                    @if ($sups->status_supplier === 'belum_lunas')
                      <tr>
                        <th>Kirim ulang bukti transfer</th>
                        <td>
                          <form action="{{ route('dpal.pengadaanBarang.formBuktiTf', $sups->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <input type="file" name="bukti_tf" id="" width="700" class="form-control form-control-sm @error('bukti_tf') is-invalid @enderror">
                            @error('bukti_tf')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </td>
                        </tr>
                        <tr>
                          <th>Nominal Transfer</th>
                          <td>
                            <input type="number" name="nominal_tf" class="form-control @error('nominal_tf') is-invalid @enderror" value="{{ old('nominal_tf') }}">
                            @error('nominal_tf')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </td>
                        </tr>
                        <tr>
                          <th></th>
                          <td>
                            <button type="submit" class="btn btn-sm btn-primary">Kirim</button>
                          </td>
                        </tr>
                        </form>
                    @endif
                  @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection