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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazines</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">MAJALAH</h1>
        <div class="text-center mb-4">
            {{-- <a href="#" class="btn btn-outline-secondary">Back to Magazines</a> --}}
            <a href="/shopbook" class="btn btn-outline-secondary">For Book</a>
        </div>
        <div class="row">
            <!-- World History Insider -->
            <div class="col-md-3">
                <div class="card">
                    <img src="world_history_insider.jpg" class="card-img-top" alt="World History Insider">
                    <div class="card-body">
                        <h5 class="card-title">World History Insider</h5>
                        <p class="card-text">
                            Our exclusive members magazine filled with editorials, behind the scenes content, feature articles, interviews, exhibitions, and more.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Antiqvs Magazine -->
            <div class="col-md-3">
                <div class="card">
                    <img src="antiqvs_magazine.jpg" class="card-img-top" alt="Antiqvs Magazine">
                    <div class="card-body">
                        <h5 class="card-title">Antiqvs Magazine</h5>
                        <p class="card-text">
                            Antiqvs is passionate about past civilizations. It is visually alluring and written in an accessible and engaging style for a wide audience.
                        </p>
                    </div>
                </div>
            </div>

            <!-- The Medieval Magazine -->
            <div class="col-md-3">
                <div class="card">
                    <img src="medieval_magazine.jpg" class="card-img-top" alt="The Medieval Magazine">
                    <div class="card-body">
                        <h5 class="card-title">The Medieval Magazine</h5>
                        <p class="card-text">
                            Enjoy expertly curated content about the Middle Ages. This digital magazine is hand-crafted by an expert team of medievalists.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Timeless Travels Magazine -->
            <div class="col-md-3">
                <div class="card">
                    <img src="timeless_travels_magazine.jpg" class="card-img-top" alt="Timeless Travels Magazine">
                    <div class="card-body">
                        <h5 class="card-title">Timeless Travels Magazine</h5>
                        <p class="card-text">
                            The unique travel magazine for those inspired to travel by their love for archaeology, history, or art. Available in print & digital editions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
