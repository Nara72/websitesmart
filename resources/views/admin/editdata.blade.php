@extends('layouts.admins')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                    class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                </nav>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <form action="/updatedata/{{ $data->id }}" method="POST"
                                        enctype="multipart/from-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" value="{{ $data->nama }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                                            <select name="jurusan" class="form-select"
                                                aria-label="Default select example">
                                                <option selected value="{{ $data->jurusan }}">Pilih Jurusan</option>
                                                <option value="1">RPL</option>
                                                <option value="2">TKJ</option>
                                                <option value="3">DKV</option>
                                                <option value="4">PSPT</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Kelas</label>
                                            <select name="kelas" class="form-select"
                                                aria-label="Default select example">
                                                <option selected value="{{ $data->kelas }}">Pilih Kelas</option>
                                                <option value="1">10</option>
                                                <option value="2">11</option>
                                                <option value="3">12</option>
                                            </select>

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">NISN</label>
                                            <input name="nisn" type="number" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                value="{{ $data->nisn }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Tempat Tanggal
                                                Lahir</label>
                                            <input type="text" name="ttl" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" value="{{ $data->ttl }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                            <input type="text" name="alamat" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                value="{{ $data->alamat }}">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="/dashboard" class="btn btn-secondary">Back</a>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                            crossorigin="anonymous">
                        </script>
                    </div>
                </div>
            </div>
        </div>

        @endsection