@extends('Dashboard.Layout.header')
@section('container')
<h1>Tambah Data KRS</h1>
<form action="/krs/add/save" method="post" class="mt-3"> 
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nim</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nim">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Kode Matkul</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="kode_matkul">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nilai</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nilai">
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
  
@endsection