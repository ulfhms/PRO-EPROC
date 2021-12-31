@extends('layouts/home/main-layout')
@section('title', 'Pengumuman Pengadaan')
    
@section('content')
       <!--------- ISI-------------->
   <section>
    <div class="container">
        <div  class="d-flex justify-content-center">
            <h2>Pengumuman Pengadaan yang sedang Berlangsung</h2>
        </div><br>
        <div class="row">
            <div class="col-12">
            <table class="table">
            <thead class="table-info">
                <th>No</th>
                <th>Nama Pengadaan</th>
                <th class="text-center">Option</th>
            </thead>
            <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($budjets as $budjet)                    
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $budjet->nama_kegiatan }}</td>
                    <td style="text-decoration=no display" class="text-center"><a href="proposal_pengadaan/{{ $budjet->proposal_pengadaan }}">File</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $budjets->links() }}
            </div>
        </div>
    </div>
    </section>
@endsection