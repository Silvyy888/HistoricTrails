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
                <h1>Lawang Sewu</h1>
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
                <p><strong>Lawang Sewu</strong> Lawang Sewu (Bahasa Jawa: ꧋ꦭꦮꦁꦱꦺꦮꦸ artinya Seribu Pintu), sebelumnya Gedung Administrasi N.V. Nederlandsch-Indische Spoorweg Maatschappij di Samarang (bahasa Belanda: Administratiegebouw van de N.V. Nederlandsch-Indische Spoorweg Maatschappij te Samarang) adalah bekas bangunan perkantoran yang terletak di seberang Tugu Muda, Kota Semarang, Jawa Tengah, Indonesia. Bangunan ini dahulu merupakan kantor pusat Nederlandsch-Indische Spoorweg Maatschappij (NIS), dan saat ini berstatus sebagai aset Kereta Api Indonesia (KAI). Hal ini terjadi karena merupakan hasil dari perebutan aset-aset NIS dan perusahaan kereta api lain oleh Djawatan Kereta Api Republik Indonesia (DKARI) pada masa Perang Kemerdekaan. Saat ini bangunan tersebut dijadikan sebagai museum dan galeri sejarah perkeretaapian oleh Unit Pusat Pelestarian dan Desain Arsitektur dan kini dioperasikan KAI Wisata, anak perusahaan KAI yang bergerak di bidang pariwisata.</p>
                <p>The kingdom was founded c. 7th century BCE by Caranus...</p>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('storage/foto/lawangsewu.jfif')}}" alt="Ancient Gold Coin" class="img-fluid rounded">
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
        <h2>Tata Letak</h2>
        <p>Kompleks Lawang Sewu terdiri dari dua bangunan; yaitu gedung A dan B serta C dan D, menghadap Jalan Pemuda. Bangunan A menghadap bundaran Tugu Muda. Terdapat dua menara kembar di gedung A yang awalnya digunakan untuk menyimpan air, masing-masing dengan kapasitas 7.000 liter (1.800 US gal). Bangunan ini memiliki jendela kaca patri besar dan tangga besar di tengahnya. Di bawah bangunan terdapat sebuah lorong bawah tanah.
            Gedung B terletak di belakang gedung A, setinggi tiga lantai dengan dua lantai pertama terdiri dari perkantoran dan yang ketiga adalah loteng. Bangunan dengan jendela-jendela besar ini juga memiliki lorong bawah tanah yang berfungsi sebagai saluran air.
            Di depan gedung berdiri Tugu Muda untuk memperingati Pertempuran Lima Hari.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <!-- Information will go here -->
        <h2>Legenda Urban</h2>
        <p>Lawang Sewu dikenal sangat angker karena ruangan bawah tanahnya pernah dijadikan tempat penyiksaan oleh serdadu tentara Jepang. Banyak wisatawan memasuki ruangan itu semata-mata untuk melihat hantu.[9] Di antara hantu yang dilaporkan menghuni tempat itu adalah seorang Noni Belanda yang melakukan bunuh diri di dalam serta penampakan "hantu tanpa kepala". Lantai dasar gedung B di huni kuntilanak, dan pocong di tempat bak penyiksaan Penjara Jongkok.
            Pada tahun 2007, sebuah film horor berjudul Lawang Sewu: Dendam Kuntilanak dirilis berdasarkan legenda urban itu. Film ini menceritakan tentang sekelompok siswa SMA dari Jakarta yang terjebak di Lawang Sewu setelah beberapa harus buang air kecil dan menampilkan hantu seorang noni Belanda, seorang pria yang bergerak dengan diberati bola berantai di kakinya, dan sosok kuntilanak.</p>
      </div>
      <div class="col-md-6">
        <!-- Image will go here -->
        <img src="{{ asset('storage/foto/rbwhtanahlwngsw.jpg')}}" alt="Image" class="img-fluid">
        <br>
        <img src="{{ asset('storage/foto/rbwhtanahlwngsw.jpg')}}" alt="Image" class="img-fluid">
      </div>
    </div>
    <h2>Lihat Juga</h2>
    <a href="https://id.wikipedia.org/wiki/Lawang_Sewu" target="_blank">Kunjungi Informasi Selengkapnya</a>
</div>

