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
        <li class="nav-item">
          <a class="nav-link" href="/object">Object</a>
        </li>
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
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="https://via.placeholder.com/300x300.png" class="img-fluid" alt="...">
                <p>A definition of the subject, several paragraphs long, like you would find in an encyclopedia.</p>
                <button class="btn btn-secondary">DEFINITION</button>
            </div>
            <div class="col-md-3">
                <img src="https://via.placeholder.com/300x300.png" class="img-fluid" alt="...">
                <p>A map, photo, or drawing that helps illustrate the subject. A picture is worth a thousand words!</p>
                <button class="btn btn-secondary">ILLUSTRATION</button>
            </div>
            <div class="col-md-3">
                <img src="https://via.placeholder.com/300x300.png" class="img-fluid" alt="...">
                <p>An academic article that explores the subject in depth or compares & connects multiple topics.</p>
                <button class="btn btn-secondary">ARTICLE</button>
            </div>
            <div class="col-md-3">
                <img src="https://via.placeholder.com/300x300.png" class="img-fluid" alt="...">
                <p>Please share your thoughts on history books you have read. We love to recommend books.</p>
                <button class="btn btn-secondary">BOOK REVIEW</button>
            </div>
        </div>

        <hr>

        {{-- <div class="row">
            <div class="col-md-3">
                <h3>Timeline</h3>
                <img src="https://via.placeholder.com/300x300.png" class="img-fluid" alt="...">
                <p>A very short timeline entry of a sentence or two that will be displayed next to definitions.</p>
                <button class="btn btn-secondary">TIMELINE EVENT</button>
            </div>
            <div class="col-md-3">
                <h3>Video</h3>
                <img src="https://via.placeholder.com/300x300.png" class="img-fluid" alt="...">
                <p>A video can convey information like no other medium can. Why not embed a YouTube video?</p>
                <button class="btn btn-secondary">VIDEO</button>
            </div>
            <div class="col-md-3">
                <h3>Web Link</h3>
                <img src="https://via.placeholder.com/300x300.png" class="img-fluid" alt="...">
                <p>Do you know a great website on history that is relevant to our content? We're happy to link to it.</p>
                <button class="btn btn-secondary">WEB LINK</button>
            </div>
            <div class="col-md-3">
                <h3>3D Image</h3>
                <img src="https://via.placeholder.com/300x300.png" class="img-fluid" alt="...">
                <p>3D images can show an object from all angles like no other medium. We accept images hosted on Sketchfab.</p>
                <button class="btn btn-secondary">3D IMAGE</button>
            </div>
        </div> --}}
    </div>
</body>
</html>
