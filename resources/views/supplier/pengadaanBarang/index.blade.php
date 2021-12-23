@extends('layouts/main-layout')
@section('title', 'Daftar Barang')
@section('content')
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
          <th class="text-center">Action</th>
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
              <a href="#" class="badge badge-secondary text-decoration-none">Submited</a>              
              @elseif ($sups->status_supplier === 'evaluasi')
              <a href="#" class="badge badge-warning text-decoration-none">Evaluasi</a>    
              @elseif ($sups->status_supplier === 'acc')
              <a href="#" class="badge badge-primary text-decoration-none">Acc</a>    
              @elseif ($sups->status_supplier === 'validasi')
              <a href="#" class="badge badge-primary text-decoration-none">Validasi</a>    
              @elseif ($sups->status_supplier === 'selesai')
              <a href="#" class="badge badge-primary text-decoration-none">Selesai</a>    
              @elseif ($sups->status_supplier === 'tolak')
              <a href="#" class="badge badge-danger text-decoration-none">Tolak</a>    
              @endif
            </td>
            <td class="text-center"><a href="{{ route('supplier.pengadaanBarang.edit', $sups->id) }}" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a>
            </td>
          </tr>
          @endforeach
      </table>

       


{{-- modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  </div>
@endsection