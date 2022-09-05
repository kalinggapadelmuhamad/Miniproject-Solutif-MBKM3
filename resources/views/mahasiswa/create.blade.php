@extends('Dashboard.Layout.header')
@section('container')
<h1>Tambah Data Mahasiswa</h1>
<form action="/mahasiswa/add/save" method="post" class="mt-3"> 
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nim</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nim">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Prodi</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="prodi">
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
  
@endsection