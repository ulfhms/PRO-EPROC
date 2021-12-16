@extends('layouts/main-layout')
@section('title','Edit E-Budjeting')
@section('content')
<form action="{{ route('dpal.ebudjeting.update',$budjet->id) }}" method="POST">
  @csrf
  @method('patch')
  @include('dpal.ebudjeting.form')
</form>
@endsection
