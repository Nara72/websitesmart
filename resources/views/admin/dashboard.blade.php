@extends('layouts.admins')

@section('content')
<div class="content-wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>


    <!-- Form Pencarian -->
    <div class="container">
        <table class="table mt-5 p-3 mb-2 bg-body-secondary">
            <thead>
                <tr>

                    <th scope="col">Kode</th>
                    <th scope="col">Nama Perusahaan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Ruang Lingkup</th>
                    <th scope="col">Jumlah Lokasi</th>
                    <th scope="col">Diterbitkan Tanggal</th>
                    <th scope="col">Berlaku Mulai Tanggal</th>
                    <th scope="col">Berakhir Tanggal</th>
                    <th scope="col">Survailen Pertama</th>
                    <th scope="col">Survailen Kedua</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $row)
                <tr>

                    <td>{{ $row-> kode }}</td>
                    <td>{{ $row-> namapt }}</td>
                    <td>{{ $row-> alamat }}</td>
                    <td>{{ $row-> kategori }}</td>
                    <td>{{ $row-> ruanglingkup }}</td>
                    <td>{{ $row-> jumlahlokasi }}</td>
                    <td>{{ $row-> diterbitkan }}</td>
                    <td>{{ $row-> berlaku }}</td>
                    <td>{{ $row-> berakhir }}</td>
                    <td>{{ $row-> surpertama }}</td>
                    <td>{{ $row-> surkedua }}</td>
                    <td>
                        <a href="/editdata/{{ $row->id }}" class="btn btn-success">Edit</a>
                        <a href="/admin/delete/{{ $row->id }}" class="btn btn-danger delete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-secondary">Logout</button>
    </form>



    @endsection