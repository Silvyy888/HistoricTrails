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
                <h1>Sejarah Huruf</h1>
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
                <p>Sekitar 4000 SM teks tertulis sudah ada di Mesir, teks tertulis tersebut terdapat di Perpustakaan tertua di Mesir.[1] Pada sekitar 5000 tahun yang lalu, di kawasan sungai Nil (Mesir) berkembang huruf hiroglif. Pada awalnya, huruf hiroglif merupakan tulisan murni yang dituliskan pada batu ditahun itu.[butuh rujukan] Dalam keterangan yang lain, sejarah huruf bermula di daerah Mesir Purba, yaitu sekitar tahun 2700 SM. Pada waktu itu, orang-orang Mesir Purba membuat huruf hiroglif sebanyak 22, hal ini dilakukan oleh mereka dengan tujuan untuk mempersembahkan konsonan individu dari bahasa yang mereka gunakan.</p>
                <p>Di samping huruf paku dan hiroglif, seluruh bangsa telah banyak mengembangkan huruf-huruf dalam kebudayaan mereka, seperti halnya Tiongkok / China dan India. Huruf Tionghoa mulai dikembangkan sejak abad ke-14 SM., di mana pada huruf-huruf yang mereka kembangkan, setiap tanda (huruf) memiliki arti sebuah kata. Sedangkan di India, dengan huruf yang dikenal dengan Sanskrit juga berkembang sekitar abad ke-14, tidak jauh beda dengan Tiongkok.[3] Adapun huruf yang sampai pada kita saat ini, yang biasa dikenal dengan huruf alfabet (alphabet), sejarahnya berawal kira-kira 2.500 tahun yang lalu. Huruf-huruf alfabet Inggris dikembangkan atas dasar alfabet Romawi.</p>
                <p>Huruf yang sampai pada kita saat ini, yang biasa dikenal dengan huruf Alfabet (Alphabet), sejarahnya berawal kira-kira 2.500 tahun yang lalu.[butuh rujukan] Huruf-huruf alfabet Inggris dikembangkan atas dasar alfabet Romawi. Dalam referensi yang lain, huruf Alfabet (Alphabet) sebenarnya berasal dari bahasa Semit, dan secara etimologinya huruf "Alphabet" terdiri atas dua kata, yaitu, aleph (lembu jantan) dan beth (rumah).[butuh rujukan] Sedang bangsa Semit, merupakan bangsa yang pertama kali menggunakan huruf Alfabet (Alphabet) tadi.[butuh rujukan] Wilayah perkembangan huruf Alfabet (Alphabet) dalam satu keterangan berkembang ke Jazirah Arab Utara, Asia Kecil dan Eropa, Jazirah Arab Selatan, dan kemudian sampai pada kita saat ini, sebagi media informasi antar manusia. Namun, tidak bisa dimungkiri peradaban manusia tidak bisa lepas dari sejarah huruf yang merupakan media informasi antar manusia.</p>
                <p>Himpunan simbol atau huruf ini dikembangkan oleh orang-orang berbahasa Semit di Timur Tengah sekitar tahun 1700 SM. Kemudian disempurnakan dan disebarkan ke peradaban lain oleh orang Fenisia.</p>
            </div>

            <div class="col-md-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSI9zpN3XHyB-PvO2YfO8YbDPpyfOMbd4zzDA&s" alt="Ancient Gold Coin" class="img-fluid rounded">
            </div>
        </div>
    </div>
</body>
</html>



