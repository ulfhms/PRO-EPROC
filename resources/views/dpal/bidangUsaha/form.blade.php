@if ($message = Session::get('success'))    
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="">
  <label for="exampleFormControlInput1" class="form-label fw-bold">Bidang Usaha</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_bingus" value="{{ old('nama_bingus')?? $bingus->nama_bingus }}">
</div>
@error('nama_bingus')
<div class="nama_bingus text-danger mt-1">
    {{ $message }}
</div>
@enderror
<div class="d-flex justify-content-end mt-3">
  <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
</div>