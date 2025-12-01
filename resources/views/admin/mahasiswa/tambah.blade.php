@extends('layout.layout_admin.layoutadmin1')
@section('content')

<div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >
            <h1 class="h2">tambah data mahasiswa</h1>

</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="/admin/mahasiswa/">
  <button class="btn btn-primary me-md-2" type="button">Back</button>
</a>
</div>

<!-- form -->
    <form action="/admin/mahasiswa/store" method="POST">
        {{ csrf_field() }}
  <div class="row mb-3">
    <label for="Nama" class="col-sm-2 col-form-label">Nama mahasiswa</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Nama" name="Nama">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Prodi" class="col-sm-2 col-form-label">Prodi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Prodi" name="Prodi">
    </div>
  </div>
<!-- id utk css nama utk penamaan input type -->
   <div class="row mb-3">
    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="nim" name="nim">
    </div>
  </div>

   
  <button type="submit" class="btn btn-primary">Simpan data</button>
</form>

@endsection