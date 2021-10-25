@extends('layouts/warek/main-layout')
@section('title', 'CV Murah Hati')
@section('content')
@include('warek/pengadaanBarang/pesertaPengadaan/navbar')
{{-- <iframe height="400"  width="400" src="{{ asset('produk/produk.pdf') }}"></iframe> --}}
<a href="{{ asset('produk/produk.pdf') }}" class="btn btn-success">Download</a>
@endsection