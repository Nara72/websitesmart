@extends('layouts.admin')

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
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap :
                            {{ $data->nama }}</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jurusan :
                            {{ $data->jurusan }}</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kelas :
                            {{ $data->kelas }}</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">NISN :
                            {{ $data->nisn }}</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tempat Tanggal Lahir :
                            {{ $data->ttl }}</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat :
                            {{ $data->alamat }}</label>
                    </div>

                    <a href="/dashboard" class="btn btn-primary">Back</a>

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