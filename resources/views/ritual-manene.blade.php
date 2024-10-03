<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <li class="nav-item">
          <a class="nav-link" href="/home">Encyclopedia</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="/education">Education</a>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">Media</a>
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
            {{-- <a href="#" class="btn btn-outline-dark">REGISTER</a> --}}
            {{-- <a href="/startLogin" class="btn btn-dark">LOGIN</a> --}}
        </li>
      </ul>
    </div>
  </nav>
  <!-- Header with Background Image -->
  <header class="banner">
    <img src="{{ asset('storage/foto/lion.png')}}" class="img-fluid w-100" alt="Banner Image">
  </header>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Definition Layout</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <!-- Article Title -->
        <div class="row">
            <div class="col">
                <h1>Ritual Ma’nene</h1>
                <p><small>by <strong>Joshua J. Mark</strong><br>published on 05 November 2018</small></p>
            </div>
        </div>

        <!-- Subscription buttons -->
        <div class="row">
            <div class="col">
                <button class="btn btn-outline-primary btn-sm">LIKE TO TOPIC</button>
                {{-- <a href="/home" class="btn btn-outline-secondary btn-sm">BACK TO TOPIC</a> --}}
            </div>
        </div>

        <!-- Main content and image -->
        <div class="row mt-4">
            <div class="col-md-8">
                <p><strong>Ritual Ma’nene</strong> adalah ritual tradisional di Tana Toraja dimana jenazah leluhur keluarga Toraja akan dibersihkan, digantikan baju dan kainnya.
                    Ma'Nene' merupakan sebuah ritual adat dalam budaya Suku Toraja. Ritual ini merupakan sebuah ritual di mana mayat yang berusia puluhan bahkan ratusan tahun yang lalu dikeluarkan dari dalam liang kuburan untuk dibersihkan dan diganti baju dan kainnya. Ritual adat ini termasuk dalam upacara adat Rambu Solo' (kematian).</p>
                    <h2>Prosedur</h2>
                    <p>Ritual ini diawali dengan datangnya para anggota keluarga ke Patane untuk mengambil jasad sanak saudara yang telah meninggal dunia. Patane adalah kuburan berbentuk rumah tempat menyimpan mayat.</p>
                    <p>Sebelum membuka peti dan mengangkat jenazah, Ne'tomina akan membacakan doa dalam Bahasa Toraja kuno serta memohon izin kepada leluhur agar masyarakat mendapat rahmat dan keberkahan setiap musim tanam hingga panen.[3] Ne'tomina sendiri merupakan gelar adat yang diberikan kepada orang yang dituakan atau tetua, dapat juga berarti imam atau pendeta.</p>
                    <p>Kemudian jasad tersebut dibersihkan menggunakan kuas setelah dikeluarkan dari Patane dan pakaiannya diganti dengan kain atau pakaian baru. Setelah pakaian baru terpasang, jenazah tersebut dimasukkan kembali ke Patane. Rangkaian acara Ma'nene ditutup dengan berkumpulnya anggota keluarga di rumah adat Tongkonan untuk beribadah bersama.</p>
                    <p>Biasanya ritual Ma'nene dilakukan serempak satu keluarga atau bahkan satu desa, sehingga tradisi ini berlangsung cukup lama. Waktu pelaksanaan Ma'nene berdasarkan kesepakatan bersama keluarga dan Ne'tomina melalui Musyawarah Desa. Tradisi ini digelar sekali dalam kurun waktu tiga sampai empat tahun untuk mempererat silaturahmi sehingga keluarga yang berada di perantauan bisa menjenguk orang tua atau Nene To'dolo (nenek moyang).</p>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('storage/foto/ritual-manene.jpg')}}" alt="Ancient Gold Coin" class="img-fluid rounded">
            </div>
        </div>
        <h2>Referensi</h2>
        <a href="https://id.wikipedia.org/wiki/Ritual_Ma%27nene" target="_blank">Kunjungi Informasi Selengkapnya</a>
    </div>
</body>
</html>

