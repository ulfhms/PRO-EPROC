@extends('layouts/main-layout')
@section('title','Tambah Bidang Usaha')
@section('content')
<form action="{{ route('bingus.store') }}" method="POST">
  @csrf
  @include('dpal.bidangUsaha.form')
</form>
@endsection