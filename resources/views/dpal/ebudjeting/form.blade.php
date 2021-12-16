<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label fw-bold">Kegiatan</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_kegiatan" value="{{ old('nama_kegiatan') ?? ucwords($budjet->nama_kegiatan) }}">
  @error('nama_kegiatan')
  <div class="name text-danger mt-1">
      {{ $message }}
  </div>
  @enderror
</div>

<div class="mb-3">
  <select class="form-select" aria-label="Default select example" name="status">
    <option value="" >Pilih proses pengajuan</option>
    <option value="proses pengajuan">Proses Pengajuan</option>
    <option value="dapat diajukan">Dapat diajukan</option>
    <option value="gagal diajukan">Gagal diajukan</option>
  </select>
  @error('status')
  <div class="name text-danger mt-1">
      {{ $message }}
  </div>
  @enderror
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label fw-bold">Unit Kerja Pengusul</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="unit_kerja_pengusul" value="{{ old('unit_kerja_pengusul') ?? ucwords($budjet->unit_kerja_pengusul) }}">
  @error('unit_kerja_pengusul')
  <div class="name text-danger mt-1">
      {{ $message }}
  </div>
  @enderror
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label fw-bold">Anggaran</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" name="anggaran" value="{{ old('anggaran') ?? ucwords($budjet->anggaran) }}">
  @error('anggaran')
  <div class="name text-danger mt-1">
      {{ $message }}
  </div>
  @enderror
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label fw-bold">Rencana Belanja</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" name="rencana_belanja" value="{{ old('rencana_belanja') ?? ucwords($budjet->rencana_belanja) }}">
  @error('rencana_belanja')
  <div class="name text-danger mt-1">
      {{ $message }}
  </div>
  @enderror
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label fw-bold">Sisa Anggaran</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" name="sisa_anggaran" value="{{ old('sisa_anggaran') ?? ucwords($budjet->sisa_anggaran) }}">
  @error('nama_kegiatan')
  <div class="name text-danger mt-1">
      {{ $message }}
  </div>
  @enderror
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label fw-bold">Waktu Mulai</label>
  <input type="date" class="form-control" id="exampleFormControlInput1" name="waktu_mulai" value="{{ old('waktu_mulai') ?? ucwords($budjet->waktu_mulai) }}">
  @error('waktu_mulai')
  <div class="name text-danger mt-1">
      {{ $message }}
  </div>
  @enderror
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label fw-bold">Waktu Selesai</label>
  <input type="date" class="form-control" id="exampleFormControlInput1" name="waktu_selesai" value="{{ old('waktu_selesai') ?? ucwords($budjet->waktu_selesai) }}">
  @error('waktu_selesai')
  <div class="name text-danger mt-1">
      {{ $message }}
  </div>
  @enderror
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label fw-bold">Uraian</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="uraian">{{ old('uraian') ?? ucwords($budjet->uraian) }}</textarea>
  @error('uraian')
  <div class="name text-danger mt-1">
      {{ $message }}
  </div>
  @enderror
</div>

<div class="d-flex justify-content-end mt-3">
  <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
</div>