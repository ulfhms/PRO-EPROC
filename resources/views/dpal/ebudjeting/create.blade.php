@extends('layouts/main-layout')
@section('title','Tambah E-Budjeting')
@section('content')
<form action="{{ route('dpal.ebudjeting.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  @include('dpal.ebudjeting.form')
</form>
@endsection