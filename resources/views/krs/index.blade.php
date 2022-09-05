@extends('Dashboard.Layout.header')
@section('container')
    <h1>Data KRS</h1>
    <a href="/krs/add" class="btn btn-success mt-3">+ KRS</a>
    <div class="container text-center mt-5">
        <div class="table-respnosive">
            <table class="table">
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>KODE</th>
                    <th>NILAI</th>
                    <th>STATUS</th>
                    <td>Action</td>
                </tr>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->kode_matkul}}</td>
                    <td>{{ $item->nilai}}</td>
                    <td>{{ ($item->nilai > 70) ? 'Lulus' : 'Gagal'}} </td>
                    {{-- <td>{{ $item->status}}</td> --}}
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