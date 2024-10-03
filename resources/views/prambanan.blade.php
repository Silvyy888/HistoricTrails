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
                <h1>Candi Prambanan</h1>
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
                <p><strong>Candi Prambanan</strong> Candi Prambanan (bahasa Jawa: ꦕꦟ꧀ꦝꦶꦥꦿꦩ꧀ꦧꦤꦤ꧀, translit. Caṇḍi Prambanan) adalah bangunan candi bercorak agama Hindu terbesar di Indonesia yang dibangun pada abad ke-9 Masehi. Candi yang juga disebut sebagai Rara Jonggrang ini dipersembahkan untuk Trimurti, tiga dewa utama Hindu yaitu dewa Brahma sebagai dewa pencipta, dewa Wisnu sebagai dewa pemelihara, dan dewa Siwa sebagai dewa pemusnah. Berdasarkan prasasti Siwagrha nama asli kompleks candi ini adalah Siwagrha (bahasa Sanskerta yang bermakna 'Rumah Siwa'), dan memang di garbagriha (ruang utama) candi ini bersemayam arca Siwa Mahadewa setinggi tiga meter, dikarenakan aliran Syaiwa yang mengutamakan pemujaan dewa Siwa di candi ini.</p>
                <p>Menurut prasasti Siwagrha, candi ini mulai dibangun pada sekitar tahun 850 masehi oleh Rakai Pikatan, dan terus dikembangkan dan diperluas oleh Balitung Maha Sambu, pada masa Kerajaan Medang Mataram.</p>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('storage/foto/prambanan.jpg')}}" alt="Ancient Gold Coin" class="img-fluid rounded">
            </div>
        </div>
    </div>
</body>
</html>

<div class="container">
    <div class="row">
      <div class="col-md-6">
        <!-- Image will go here -->
        <img src="{{ asset('storage/foto/cndi.jpg')}}" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6">
        <!-- Information will go here -->
        <h2>Etimologi</h2>
        <p>Nama Prambanan, berasal dari nama desa tempat candi ini berdiri, diduga merupakan perubahan nama dialek bahasa Jawa dari istilah teologi Hindu Para Brahman yang bermakna "Brahman Agung" yaitu Brahman atau realitas abadi tertinggi dan teragung yang tak dapat digambarkan, yang kerap disamakan dengan konsep Tuhan dalam agama Hindu. Pendapat lain menganggap Para Brahman mungkin merujuk kepada masa jaya candi ini yang dahulu dipenuhi oleh para brahmana. Pendapat lain mengajukan anggapan bahwa nama "Prambanan" berasal dari akar kata mban dalam Bahasa Jawa yang bermakna menanggung atau memikul tugas, merujuk kepada para dewa Hindu yang mengemban tugas menata dan menjalankan keselarasan jagat.</p>
        <p>Nama lain dari Prambanan dapat berarti 5 (lima) gunung yang dalam bahasa Khmer/Kamboja 5 (lima) adalah Pram dan banam adalah gunung (ប្រាំភ្នំ). Hal ini menggambarkan 5 puncak gunung dari Himalaya di India. Mengingat pada saat yang sama dalam kronik Khmer bahwa Bangsa Jawa pernah menjajah Khmer selama 200 tahun dan Jayawarman ke 2 yang pernah di Jawa merupakan pahlawan yang membebaskan Khmer dari dominasi Jawa.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <!-- Information will go here -->
        <h2>Sejarah</h2>
        <p>Prambanan adalah candi Hindu terbesar dan termegah yang pernah dibangun di Jawa kuno, pembangunan candi Hindu kerajaan ini dimulai oleh Sri Maharaja Rakai Pikatan sebagai tandingan candi Buddha Borobudur dan juga candi Sewu yang terletak tak jauh dari Prambanan. Beberapa sejarawan lama menduga bahwa pembangunan candi agung Hindu ini untuk menandai kembali berkuasanya keluarga Sanjaya atas Jawa, hal ini terkait teori wangsa kembar berbeda keyakinan yang saling bersaing; yaitu wangsa Sanjaya penganut Hindu dan wangsa Sailendra penganut Buddha. Pastinya, dengan dibangunnya candi ini menandai bahwa Hinduisme aliran Saiwa kembali mendapat dukungan keluarga kerajaan, setelah sebelumnya wangsa Sailendra cenderung lebih mendukung Buddha aliran Mahayana. Hal ini menandai bahwa kerajaan Medang beralih fokus dukungan keagamaannya, dari Buddha Mahayana ke pemujaan terhadap Siwa.</p>
      </div>
      <div class="col-md-6">
        <!-- Image will go here -->
        {{-- <img src="{{ asset('storage/foto/rbwhtanahlwngsw.jpg')}}" alt="Image" class="img-fluid"> --}}
        <br>
        {{-- <img src="{{ asset('storage/foto/rbwhtanahlwngsw.jpg')}}" alt="Image" class="img-fluid"> --}}
      </div>
    </div>
  </div>

