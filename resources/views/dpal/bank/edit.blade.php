@extends('layouts/main-layout')
@section('title','Edit Bank')
@section('content')
<form action="{{ route('bank.update',$bank->id) }}" method="post">
  @csrf
  @method('patch')
  @include('dpal.bank.form')
</form>
@endsection