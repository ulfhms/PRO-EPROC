@extends('layouts/main-layout')
@section('title','Bank')
@section('content')
<div class="mb-2">
  <div class="bg-warning fw-bold text-center p-2 rounded mb-2">
    Daftar Bank
  </div>
  <div class="d-flex justify-content-end">
    <a href="{{ route('bank.create') }}" class="btn btn-sm btn-primary">Tambah</a>
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
    @foreach ($banks as $bank)          
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ ucwords($bank->nama_bank) }}</td>
      <td>
        <a href="{{ route('bank.edit',$bank->id) }}" class="btn btn-sm bg-warning"><i class="far fa-edit"></i></a>
        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $bank->id }}">
          Delete
        </button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@foreach ($banks as $bank)    
  <div class="modal fade" id="exampleModal{{ $bank->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title text-white fw-bold" id="exampleModalLabel">Delete Bank</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Yakin ingin menghapus bank : <div class="fw-bold">{{ ucwords($bank->nama_bank) }}</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <form action="{{ route('bank.destroy', $bank) }}" method="post">
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