@extends('Dashboard.Layout.header')
@section('container')
<h1>Tambah Data Mata Kuliah</h1>
<form action="/matkul/ubah/save" method="post" class="mt-3"> 
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Kode Matkul</label>
        <input type="text" readonly class="form-control" id="exampleFormControlInput1" name="kode_matkul" value="{{ $data->kode_matkul }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_matkul" value="{{ $data->nama_matkul }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jumlah SKS</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="sks" value="{{ $data->sks }}">
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection