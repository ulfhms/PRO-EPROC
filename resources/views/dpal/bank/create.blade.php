@extends('layouts/main-layout')
@section('title','Tambah Bank')
@section('content')
<form action="{{ route('bank.store') }}" method="POST">
  @csrf
  @include('dpal.bank.form')
</form>
@endsection