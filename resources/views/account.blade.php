<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Akun</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <style>
        .profile-header {
            background-color: #f8f9fa;
            padding: 20px;
            border-bottom: 1px solid #e0e0e0;
        }
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .profile-info {
            margin-left: 20px;
        }
        .profile-info h1 {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="profile-header text-center">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('storage/foto/logohistorictrails.jfif')}}" alt="Profile Picture" class="profile-picture">
            </div>
            <div class="d-flex justify-content-center profile-info">
                <div>
                    <h1>HistoryTrails</h1>
                    <p>Email: history@gmail.com</p>
                    <p>Status: Student</p>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="text-center my-4">
            <a href="/dshbrd" class="btn btn-danger">Dashbord</a>
            <a href="/dsbrdset" class="btn btn-primary">Edit Profile</a>
            <a href="/svtopic" class="btn btn-secondary">Topic Tersimpan</a>
            <a href="/dsbrdlog" class="btn btn-danger">Logout</a>
        </div>

        <!-- Additional Content -->
        <div class="additional-info mt-4">
            <h3>Information</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis vehicula neque, a imperdiet orci.</p>
        </div>
    </div>
</body>
</html>
