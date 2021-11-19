@extends('layouts/main-layout')
@section('title','Edit Bidang Usaha')
@section('content')
<form action="{{ route('bingus.update',$bingus->id) }}" method="post">
  @csrf
  @method('patch')
  @include('dpal.bidangUsaha.form')
</form>
@endsection