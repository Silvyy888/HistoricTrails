<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-HistoricTrails</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <style>
        body {
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            color: #fff;
            padding-top: 20px;
        }
        .sidebar a {
            color: #fff;
            padding: 10px 15px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: rgb(75, 189, 255);
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .card-deck .card {
            margin-bottom: 20px;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }
        .chart-container {
            position: relative;
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center">DASHBORD</h4>
        <a href="/dshbrd">Articles</a>
        <a href="/account">Account</a>
        {{-- <a href="/produk">Produk</a>
        <a href="/pesanan">Pesanan</a> --}}
        <a href="/dsbrdset">Setting</a>
        <a href="/dsbrdlog">LogOut</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar atas -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#" style="font-weight: bold">ARTICLES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form action="/search" method="post">
                @csrf
                <div class="input-group mb-3" style="margin-left: 30px; margin-top: 20px;">
                    <input type="text" name="cari" class="form-control" placeholder="Search">
                    {{-- <button class="btn" type="submit">Go</button> --}}
                </div>
            </form>
            <div>
                {{-- <a href="/artikel/create" class="btn btn-lg text-white" style="height: 35px; font-size: small; background-color:#50160c; margin-left: 90vh">Tambah Artikel</a> --}}
                <a href="/artikel/create" class="btn btn-outline-dark" style="margin-left: 90vh">Tambah Artikel</a>
            </div>
        </nav>

        <!-- Tabel Data Produk -->
        <div class="row" style="margin-top: 30px">
            <div class="col-md-12">
                <h4>Daftar Artikel</h4>
                <table class="table table-striped">
                    <thead class="">
                        <tr>
                            <th>NO</th>
                            <th>JUDUL</th>
                            <th>KATEGORI</th>
                            <th>FOTO</th>
                            <th>Deskripsi Singkat</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artikel as $key => $item)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$item->judul}}</td>
                            <td>{{$item->kategori}}</td>
                            <td><img src="{{ asset('storage/foto/'.$item->foto) }}" alt="" style="width: 50px; height: 50px"></td>
                            <td>{{$item->deskripsi}}</td>
                            <td>
                                <a href="/artikel/delete/{{ $item->id }}" onclick="return window.confirm('Yakin hapus artikel ini?')" class="btn btn-danger">Hapus</a>
                                <a href="/artikel/edit/{{ $item->id }}" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
