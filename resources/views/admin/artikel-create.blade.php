<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Informasi</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background-color: #ffffff;
    padding: 50px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 350px;
    width: 100%;
}

h1 {
    margin-bottom: 20px;
    color: #333;
    text-align: center;
}

.form-group {
    margin-bottom: 15px;
    margin-left: -20px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #50160c;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #270b06;
}

.forgot-password {
    margin-top: 10px;
    text-align: center;
}

.forgot-password a {
    color: #007bff;
    text-decoration: none;
}

.forgot-password a:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Artikel</h1>
        <form action="/artikel/create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Judul</label>
                <input type="name" class="form-control" id="name" placeholder="Enter judul" name="judul" value="{{old('judul')}}">
            </div>
            <div class="form-group">
                <label for="category">Kategori</label>
                <select class="form-control" id="category" value="{{old('kategori')}}" name="kategori">
                    <option value="" disabled selected></option>
                    <option value="Artefak">Artefak</option>
                    <option value="Bangunan Bersejarah">Bangunan</option>
                    <option value="Benda Bersejarah">Benda</option>
                    <option value="Budaya | Adat">Budaya | Adat</option>
                    <option value="Peristiwa">Peristiwa</option>
                </select>
            </div>
            <div class="form-group" style="margin-top: 5px">
                <label for="image">Foto</label>
                <input type="file" class="form-control-file" id="image" value="{{old('foto')}}" name="foto">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Singkat</label>
                <input type="text" name="deskripsi" id="" placeholder="Enter deskripsi" class="form-control" value="{{old('deskripsi')}}">
            </div>
            <button type="submit">SIMPAN</button>
            <hr>
            <a href="/dshbrd" class="btn btn-dark" style="width: 39vh">BATAL</a>
            {{-- <button type="submit" style="background-color: rgb(184, 24, 24)">BATAL</button> --}}
        </form>
    </div>
</body>
</html>
