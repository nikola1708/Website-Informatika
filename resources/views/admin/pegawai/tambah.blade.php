@extends('layout.layout_admin.layoutadmin1')
@section('content')

<div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >
            <h1 class="h2">tambah data pegawai</h1>

</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="/pegawai/">
  <button class="btn btn-primary me-md-2" type="button">Back</button>
</a>
</div>

<!-- form -->
    <form action="/pegawai/store" method="POST">
        {{ csrf_field() }}
  <div class="row mb-3">
    <label for="Nama" class="col-sm-2 col-form-label">Nama Pegawai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Nama" name="Nama">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Jabatan" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Jabatan" name="Jabatan">
    </div>
  </div>
<!-- id utk css nama utk penamaan input type -->
   <div class="row mb-3">
    <label for="umur" class="col-sm-2 col-form-label">Umur</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="umur" name="umur">
    </div>
  </div>

   <div class="row mb-3">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="alamat" name="Alamat">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Simpan data</button>
</form>

@endsection