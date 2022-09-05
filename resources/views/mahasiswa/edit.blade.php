@extends('Dashboard.Layout.header')
@section('container')
<h1>Ubah Data Mahasiswa</h1>
<form action="/mahasiswa/ubah/save" method="post" class="mt-3"> 
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nim</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nim" value="{{$data->nim}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="{{$data->nama}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Prodi</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="prodi" value="{{$data->prodi}}">
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
  
@endsection