@extends('layouts/main-layout')
@section('title','E-Budjeting')
@section('content')
<h5 class="bg-warning p-2 rounded col-lg-6 col-12">
  Penyusunan Rencana Kegiatan dan Anggaran
</h5>
<div class="d-flex justify-content-end mb-2">
  <a href="{{ route('dpal.ebudjeting.create') }}" class="btn btn-sm btn-primary">Tambah</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kegiatan</th>
      <th scope="col">Status</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    @php ($no = 1)
    @foreach ($budjets as $budjet)    
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td><a href="{{ route('dpal.ebudjeting.show', $budjet->id) }}">{{ ucwords($budjet->nama_kegiatan) }}</a></td>
      <td>{{ ucwords($budjet->status) }}</td>
      <td>
        <a href="{{ route('dpal.ebudjeting.edit',$budjet->id) }}" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a>
        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $budjet->id }}">
          Delete
        </button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@foreach ($budjets as $budjet)    
  <div class="modal fade" id="exampleModal{{ $budjet->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title text-white fw-bold" id="exampleModalLabel">Delete kegiatan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Yakin ingin menghapus Kegiatan : <div class="fw-bold">{{ ucwords($budjet->nama_kegiatan) }}</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <form action="{{ route('dpal.ebudjeting.destroy', $budjet->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-primary" onclick="return true">Hapus</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection