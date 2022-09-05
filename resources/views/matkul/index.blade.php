@extends('Dashboard.Layout.header')
@section('container')
    <h1>Data Mata Kuliah</h1>
    <a href="/matkul/add" class="btn btn-success mt-3">+ Mata Kuliah</a>
    <div class="container text-center mt-5">
        <div class="table-respnosive">
            <table class="table">
                <tr>
                    <th>NO</th>
                    <th>KODE</th>
                    <th>NAMA</th>
                    <th>SKS</th>
                    <td>Action</td>
                </tr>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->kode_matkul }}</td>
                    <td>{{ $item->nama_matkul}}</td>
                    <td>{{ $item->sks}}</td>
                    <td>
                        <a href="/matkul/ubah/{{ $item->kode_matkul }}" class="btn btn-sm btn-primary">Ubah</a>
                        <a href="/matkul/hapus/{{ $item->kode_matkul }}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
@endsection