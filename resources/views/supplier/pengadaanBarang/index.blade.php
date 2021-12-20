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
          @foreach ($pengadaans as $pengadaan)    
          <tr>
            <td>{{ $no++ }}</td>
            {{-- <td>PBA - 0001</td> --}}
            <td><a href="{{ route('supplier.pengadaanBarang.detail') }}" class="card-title text-decoration-none text-primary">{{ $pengadaan->pengadaan->budjet->nama_kegiatan }}</a></td>
            <td class="text-center"><a href="#" class="badge badge-secondary text-decoration-none">Submited</a></td>
            <td class="text-center"><a href="{{ route('supplier.pengadaanBarang.edit') }}" class="btn btn-sm"><i class="far fa-edit"></i></a>
              <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="far fa-trash-alt"></i>
              </button>
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