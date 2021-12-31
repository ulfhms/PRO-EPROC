@extends('layouts/main-layout')
@section('title', 'Pengadaan Barang')
@section('content')
@include('layouts.alert')
<h5 class="bg-warning p-2 rounded text-center">Pengadaan yang Diikuti</h5>
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('supplier.pengadaanBarang.create') }}" class="btn btn-sm btn-primary">Tambah</a><br>
    </div>

    <table class="table">
        <thead class="table-dark">
          <th>No</th>
          {{-- <th>Kode Pengadaan</th> --}}
          <th>Nama Pengadaan</th>
          <th class="text-center">Status</th>
          {{-- <th class="text-center">Action</th> --}}
        </thead>
        <tbody>
          @php($no=1)
          @foreach ($pengsups as $sups)    
          <tr>
            <td>{{ $no++ }}</td>
            {{-- <td>PBA - 0001</td> --}}
            <td><a href="{{ route('supplier.pengadaanBarang.detail',$sups->id) }}" class="card-title text-decoration-none text-primary">{{ $sups->pengadaan->budjet->nama_kegiatan }}</a></td>
            <td class="text-center">
              @if ($sups->status_supplier === 'submitted')
              <span class="badge bg-secondary text-decoration-none">Submited</span>              
              @elseif ($sups->status_supplier === 'evaluasi')
              <span class="badge bg-warning text-decoration-none">Evaluasi</span>    
              @elseif ($sups->status_supplier === 'acc')
              <span class="badge bg-primary text-decoration-none">Acc</span>    
              @elseif ($sups->status_supplier === 'validasi')
              <span class="badge bg-primary text-decoration-none">Validasi</span>    
              @elseif ($sups->status_supplier === 'selesai')
              <span class="badge bg-primary text-decoration-none">Selesai</span>    
              @elseif ($sups->status_supplier === 'tolak')
              <span class="badge bg-danger text-decoration-none">Tolak</span>    
              @elseif ($sups->status_supplier === 'belum_lunas')
              <span class="badge bg-danger text-decoration-none">Belum Lunas</span>    
              @endif
            </td>
            {{-- <td class="text-center"><a href="{{ route('supplier.pengadaanBarang.edit', $sups->id) }}" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a>
            </td> --}}
          </tr>
          @endforeach
      </table>

      <div class="d-flex justify-content-center">
        {{ $pengsups->links() }}
      </div>


{{-- modal --}}
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title text-white" id="exampleModalLabel">Hapus Barang</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <b>Hapus Barang : </b>Komputer
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div> --}}
@endsection