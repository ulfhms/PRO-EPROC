@extends('layouts/main-layout')
@section('title','Edit E-Budjeting')
@section('content')
<form action="{{ route('dpal.ebudjeting.update',$budjet->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('patch')
  @include('dpal.ebudjeting.form')
</form>
@endsection
