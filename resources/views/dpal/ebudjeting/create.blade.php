@extends('layouts/main-layout')
@section('title','Tambah E-Budjeting')
@section('content')
<form action="{{ route('dpal.ebudjeting.store') }}" method="POST">
  @csrf
  @include('dpal.ebudjeting.form')
</form>
@endsection