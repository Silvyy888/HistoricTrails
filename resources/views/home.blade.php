<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HistoricTrails</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-bold-straight/css/uicons-bold-straight.css'>
  <style>
body {
  font-family: Arial, sans-serif;
}

.navbar {
  padding: 1rem;
}

.banner {
  position: relative;
  overflow: hidden;
}

.banner img {
  width: 100%;
  height: auto;
}

h1 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.container {
  margin-top: 50px;
}

.img-fluid {
  margin-bottom: 10px;
}

h5 {
  font-size: 1.1rem;
  font-weight: bold;
}
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#" style="font-weight: bold">
      <img src="{{ asset('storage/foto/logohistorictrails.jfif')}}" alt="logo" style="width: 40px;">
      HistoricTrails
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        {{-- <li class="nav-item active">
            <a class="nav-link" href="/home">Encyclopedia</a>
          </li> --}}
        <li class="nav-item">
            <a class="nav-link" href="/home">Encyclopedia</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="/education">Education</a>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link" href="/object">Object</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="/shop">Object</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/startLogin"><i class="fi fi-bs-user"></i> Account</a>
        </li>
        <li>
            {{-- <a href="/register" class="btn btn-outline-dark">REGISTER</a> --}}
            <a href="/startLogin" class="btn btn-dark">LOGIN</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Header with Background Image -->
  <header class="banner">
    <img src="{{ asset('storage/foto/lion.png')}}" class="img-fluid w-100" alt="Banner Image">
  </header>

  <section class="container-fluid"></section>
    <div class="row align-items-center"style="width: 200vh; text-align: center; margin-left: 400px; margin-top: 40px;">
      <div class="col-md-6">
        <h1>Hello, <br> I’m <strong>HistoricTrails</strong></h1>
        <p class="lead">Temukan Sejarah Dunia & Temukan Pengetahuan Disini</p>
        <!-- <p>An aquarius girl who loves music, watching movies, and of course writing.</p> -->
        {{-- <a href="/startLogin" class="btn btn-dark">LOGIN</a>
        <a href="#" class="btn btn-outline-dark">REGISTER</a> --}}
      </div>
      <!-- <div class="col-md-6">
        <img src="ss.PNG" style="width: 50vh;" class="img-fluid" alt="Developer Illustration">
      </div> -->
    </div>
  </section>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konten Terbaru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-4 mb-4" style="margin-right: 110vh;">Konten Terbaru</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header text-white" style="background-color: rgb(109, 40, 40);">
                        Definisi Unggulan
                    </div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSI9zpN3XHyB-PvO2YfO8YbDPpyfOMbd4zzDA&s" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sejarah Huruf</h5>
                        <p class="card-text">Huruf adalah media informasi antar manusia, untuk saling mengenal, berbagi pengalaman, berbagi informasi, surat menyurat, dan seterusnya.</p>
                        <a href="/huruf" class="btn text-light" style="background-color: rgb(109, 40, 40);">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header text-white" style="background-color: rgb(109, 40, 40);">
                        Definisi Unggulan
                    </div>
                    <img src="{{ asset('storage/foto/lawangsewu.jfif')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lawang Sewu</h5>
                        <p class="card-text">Lawang Sewu, sebelumnya Gedung Administrasi N.V. Nederlandsch-Indische Spoorweg Maatschappij di Samarang adalah bekas bangunan perkantoran yang terletak di seberang Tugu Muda, Kota Semarang, Jawa Tengah, Indonesia.</p>
                        <a href="/lawangsewu" class="btn text-light" style="background-color: rgb(109, 40, 40);">Learn More</a>
                    </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header text-white" style="background-color: rgb(109, 40, 40);">
                        Definisi Unggulan
                    </div>
                    <img src="{{ asset('storage/foto/prambanan.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Candi Prambanan</h5>
                        <p class="card-text">Candi Prambanan adalah bangunan candi bercorak agama Hindu terbesar di Indonesia yang dibangun pada abad ke-9 Masehi.</p>
                        <a href="/prambanan" class="btn text-light" style="background-color: rgb(109, 40, 40);">Learn More</a>
                    </div>
                </div>
              </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header text-white" style="background-color: rgb(109, 40, 40);">
                        Gambar Unggulan
                    </div>
                    <img src="{{ asset('storage/foto/sumpahpemuda.jfif')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sumpah Pemuda</h5>
                        <p class="card-text">Sumpah Pemuda adalah satu tonggak utama dalam sejarah pergerakan kemerdekaan Indonesia. Ikrar ini dianggap sebagai kristalisasi semangat untuk menegaskan cita-cita berdirinya negara Indonesia. Sumpah Pemuda adalah keputusan Kongres Pemuda Kedua yang diselenggarakan dua hari, 27—28 Oktober 1928 di Batavia.</p>
                        <a href="/smphpmda" class="btn text-light" style="background-color: rgb(109, 40, 40);">Learn More</a>
                    </div>
                </div>
            </div>
            {{-- ABOUT US --}}
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header text-black" style="font-weight: bold;">
                        About Us
                    </div>
                    <div class="card-body">
                        <p class="card-text">We are a <span class="font-weight-bold text-warning">non-profit organization</span> publishing the world's most read history encyclopedia.</p>
                        <p class="card-text">Our mission is to engage people with cultural heritage and to improve history education worldwide.</p>
                        <a href="/about" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card">
                  <div class="card-header text-white" style="background-color: rgb(109, 40, 40);">
                      Gambar Unggulan
                  </div>
                  <img src="{{ asset('storage/foto/ritual-manene.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Ritual Ma’nene</h5>
                      <p class="card-text">Ritual Ma'nene adalah ritual tradisional di Tana Toraja dimana jenazah leluhur keluarga Toraja akan dibersihkan, digantikan baju dan kainnya. Ma' Nene' merupakan sebuah ritual adat dalam budaya Suku Toraja.</p>
                      <a href="/manene" class="btn text-light" style="background-color: rgb(109, 40, 40);">Learn More</a>
                  </div>
              </div>
          </div>
        </div>
        <h2 class="text-center mt-4 mb-4">Media Library</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <img src="{{ asset('storage/foto/candi.jfif')}}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-3 mb-4">
                <img src="{{ asset('storage/foto/patung.jpeg')}}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-3 mb-4">
                <img src="{{ asset('storage/foto/monumen.jfif')}}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-3 mb-4">
                <img src="{{ asset('storage/foto/lawangsewu.jfif')}}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-3 mb-4">
                <img src="{{ asset('storage/foto/monumen.jfif')}}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-3 mb-4">
                <img src="{{ asset('storage/foto/monumen.jfif')}}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-3 mb-4">
                <img src="{{ asset('storage/foto/monumen.jfif')}}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-3 mb-4">
                <img src="{{ asset('storage/foto/monumen.jfif')}}" class="img-fluid" alt="...">
            </div>
        </div>
    </div>

    <footer class="text-center py-3" style="background-color: whitesmoke; margin-top: 50px">
        <div class="container">
            <h1 style="color: black; font-size: 35px; margin-left: -90%; margin-top: 20px">HISTORIC</h1>
            <h1 style="color: black; font-size: 35px; margin-left: -80%">TRAILS</h1>
            <p>&copy; Discover World History & Discover Knowledge Here</p>
        </div>
    </footer>
</body>
</html>

