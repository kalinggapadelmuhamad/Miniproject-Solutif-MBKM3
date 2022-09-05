@extends('Dashboard.Layout.header')
@section('container')
    <h1>Data Mahasiswa</h1>
    <a href="/mahasiswa/add" class="btn btn-success mt-3">+ Mahasiswa</a>
    <div class="container text-center mt-5">
        <div class="table-respnosive">
            <table class="table">
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>PRODI</th>
                    <td>Action</td>
                </tr>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->nama}}</td>
                    <td>{{ $item->prodi}}</td>
                    <td>
                        <a href="/mahasiswa/ubah/{{ $item->nim }}" class="btn btn-sm btn-primary">Ubah</a>
                        <a href="/mahasiswa/hapus/{{ $item->nim }}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
@endsection