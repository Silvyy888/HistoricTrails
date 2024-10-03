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
                <h1>Sumpah Pemuda</h1>
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
                <p><strong>Sumpah Pemuda</strong> Sumpah Pemuda adalah satu tonggak utama dalam sejarah pergerakan kemerdekaan Indonesia. Ikrar ini dianggap sebagai kristalisasi semangat untuk menegaskan cita-cita berdirinya negara Indonesia.</p>
                <p>Sumpah Pemuda adalah keputusan Kongres Pemuda Kedua yang diselenggarakan dua hari, 27—28 Oktober 1928 di Batavia (kini bernama Jakarta). Keputusan ini menegaskan cita-cita akan "tanah air Indonesia", "bangsa Indonesia", dan "bahasa Indonesia". Keputusan ini diharapkan menjadi asas bagi setiap perkumpulan kebangsaan Indonesia dan agar disiarkan dalam berbagai surat kabar dan dibacakan di muka rapat perkumpulan-perkumpulan.</p>
                <p>Istilah "Sumpah Pemuda" sendiri tidak muncul dalam putusan kongres tersebut, melainkan diberikan setelahnya. Berikut ini adalah bunyi tiga keputusan kongres tersebut sebagaimana tercantum pada prasasti di dinding Museum Sumpah Pemuda. Naskah orisinil diabadikan menggunakan ejaan Van Ophuijsen.</p>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('storage/foto/sumpahpemuda.jfif')}}" alt="Ancient Gold Coin" class="img-fluid rounded">
            </div>
        </div>
    </div>
</body>
</html>

<div class="container">
    <div class="row">
      <div class="col-md-6">
        <!-- Image will go here -->
        <img src="{{ asset('storage/foto/tataletaklwngsw.jpg')}}" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6">
        <!-- Information will go here -->
        <h2>Proses</h2>
        <p>1. Rapat pertama di Gedung Katholieke Jongenlingen Bond (KJB)
            2. Rapat kedua di Gedung Oost-Java Bioscoop
            3. Rapat ketiga di gedung Indonesische Clubgebouw .</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <!-- Information will go here -->
        <h2>Isi dan Makna Sumpah Pemuda</h2>
        <p>Pertama:
            Kami poetra dan poetri Indonesia, mengakoe bertoempah darah jang satoe, tanah air Indonesia.</p>
        <p>Kedoea:
            Kami poetra dan poetri Indonesia mengakoe berbangsa jang satoe, bangsa Indonesia.</p>
        <p>Ketiga:
            Kami poetra dan poetri Indonesia mendjoendjoeng bahasa persatoean, bahasa Indonesia.</p>
            <h5>Bunyi ketiga keputusan kongres dalam Ejaan Bahasa Indonesia (ejaan terbaru yang digunakan pada masa kini):</h5>
        <p>Pertama:
            Kami putra dan putri Indonesia, mengaku bertumpah darah yang satu, tanah air Indonesia.</p>
        <p>Kedua:
            Kami putra dan putri Indonesia mengaku berbangsa yang satu, bangsa Indonesia.</p>
        <p>Ketiga:
            Kami putra dan putri Indonesia menjunjung bahasa persatuan, bahasa Indonesia.</p>
      </div>
      <div class="col-md-6">
        <!-- Image will go here -->
        <img src="{{ asset('storage/foto/rbwhtanahlwngsw.jpg')}}" alt="Image" class="img-fluid">
        <br>
        <img src="{{ asset('storage/foto/rbwhtanahlwngsw.jpg')}}" alt="Image" class="img-fluid">
      </div>
    </div>
    <div class="row">
        <div class="col-md-6">
          <!-- Image will go here -->
          <img src="{{ asset('storage/foto/kptsankongres.jpg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6">
          <!-- Information will go here -->
          <h2>Rumusan Kongres</h2>
          <p>Rumusan Kongres Sumpah Pemuda ditulis Mohammad Yamin pada secarik kertas yang disodorkan kepada Soegondo ketika Mr. Sunario tengah berpidato pada sesi terakhir kongres (sebagai utusan kepanduan) sambil berbisik kepada Soegondo: Ik heb een eleganter formulering voor de resolutie (Saya mempunyai suatu formulasi yang lebih elegan untuk keputusan Kongres ini), yang kemudian Soegondo membubuhi paraf setuju pada secarik kertas tersebut, kemudian diteruskan kepada yang lain untuk paraf setuju juga.[3] Sumpah tersebut awalnya dibacakan oleh Soegondo dan kemudian dijelaskan panjang-lebar oleh Yamin.</p>
        </div>
    </div>
    <h2>Lihat Juga</h2>
    <a href="https://id.wikipedia.org/wiki/Sumpah_Pemuda" target="_blank">Kunjungi Informasi Selengkapnya</a>
</div>

