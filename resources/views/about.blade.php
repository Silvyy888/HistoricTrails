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
          <a class="nav-link" href="/shop">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/startLogin"><i class="fi fi-bs-user"></i> Account</a>
        </li>
        <li>
            {{-- <a href="#" class="btn btn-outline-dark">REGISTER</a> --}}
            <a href="/startLogin" class="btn btn-dark">LOGIN</a>
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
  <title>About</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <div class="container mt-5">
    <h1 class="text-center mb-4" style="font-weight: bold; font-size: 8vh">About Us</h1>
    <p class="text-center">We are a non-profit organization publishing the world's most-read history encyclopedia.</p>

    <h1 class="text-center mb-4">Our Mission</h1>
    <p class="text-center">Our mission is to engage people with cultural heritage and to improve history education worldwide.</p>

    <h1 class="text-center mt-5 mb-4">Our Vision</h1>
    <p class="text-center">Studying history helps us gain a more nuanced understanding of the world we live in today. Our knowledge and interpretation of history shape how we define ourselves as nations and as cultures, and it influences how we see and interact with other cultures. We help people across the globe gain a deeper, fundamental knowledge of our interconnected human past in order to create curious, open-minded, and tolerant societies in the future.</p>

    <div class="row mt-5">
      <div class="col-md-4">
        <div class="card" style="border-radius: 200px; width: 30vh">
          <img src="{{ asset('storage/foto/education.jpg')}}" class="card-img-top" alt="Education Image" style="border-radius: 200px" >
          <div class="card-body">
            <h5 class="card-title">Education</h5>
            <p class="card-text">We help teachers, students, and schools by providing them with reliable, easy-to-read, and high-quality resources entirely for free.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card"  style="border-radius: 200px; width: 30vh">
          <img src="{{ asset('storage/foto/public.jpg')}}" class="card-img-top" alt="Public Awareness Image" style="border-radius: 200px">
          <div class="card-body">
            <h5 class="card-title">Public Awareness</h5>
            <p class="card-text">By creating an engaging and exciting encyclopedia, we have inspired millions to learn more about human civilization and our shared past.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="border-radius: 200px; width: 30vh">
          <img src="{{ asset('storage/foto/cultur.jpg')}}" class="card-img-top" alt="Cultural Heritage Image" style="border-radius: 200px">
          <div class="card-body">
            <h5 class="card-title">Cultural Heritage</h5>
            <p class="card-text">History is very important for understanding the world today. It defines us and our societies, as well as how we view other cultures.</p>
          </div>
        </div>
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
