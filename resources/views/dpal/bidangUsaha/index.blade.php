@extends('layouts/main-layout')
@section('title','Bidang Usaha')
@section('content')
<div class="mb-2">
  <div class="bg-warning fw-bold text-center p-2 rounded mb-2">
    Daftar Bidang Usaha
  </div>
  <div class="d-flex justify-content-end">
    <a href="{{ route('bingus.create') }}" class="btn btn-sm btn-primary">Tambah</a>
  </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    @php ($no = 1)
    @foreach ($bingus as $item)          
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ ucwords($item->nama_bingus) }}</td>
      <td>
        <a href="{{ route('bingus.edit',$item->id) }}" class="btn btn-sm bg-warning"><i class="far fa-edit"></i></a>
        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
          Delete
        </button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@foreach ($bingus as $item)    
  <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title text-white fw-bold" id="exampleModalLabel">Delete item</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Yakin ingin menghapus item : <div class="fw-bold">{{ ucwords($item->nama_bingus) }}</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <form action="{{ route('bingus.delete', $item) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-primary" onclick="return true">Hapus</button>
          </form>
        </div>
      </div>
      {{-- <a href="{{ route('item.delete',$item->id) }}" class="btn btn-primary ">Hapus</a> --}}
    </div>
  </div>
@endforeach
@endsection