@extends('layouts/warek/main-layout')
@section('title', 'CV Murah Hati')
@section('content')
@include('warek/pengadaanBarang/pesertaPengadaan/navbar')
{{-- <iframe height="400"  width="400" src="{{ asset('produk/produk.pdf') }}"></iframe> --}}
<canvas id="my_canvas"></canvas>
<script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.10.377/build/pdf.min.js"></script> 
<a href="{{ asset('produk/produk.pdf') }}" class="btn btn-success">Download</a>
<script>
  console.log(pdfjsLib)
  var url = "{{ asset('produk/produk.pdf') }}";
  url = "http://css.csail.mit.edu/6.858/2020/readings/costan-sgx.pdf";
  pdfjsLib.getDocument(url).promise.then(doc =>{
    console.log("this"+ doc._pdfInfo.numPages);
    doc.getPage(1).then(page => {
      var myCanvas = document.getElementById("my_canvas");
      var context = myCanvas.getContext("2d");

      var viewport = page.getViewport(1);
      myCanvas.width = viewport.width;
      myCanvas.height = viewport.height;

      page.render({
        canvasContext: context,
        viewport: viewport,
      });
    });
  });
</script>
@endsection