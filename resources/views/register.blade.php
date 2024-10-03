<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register- HistoricTrails</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background-color: #ffffff;
    padding: 50px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 350px;
    width: 100%;
}

h1 {
    margin-bottom: 20px;
    color: #333;
    text-align: center;
}

.form-group {
    margin-bottom: 15px;
    margin-left: -20px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #50160c;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #270b06;
}

.forgot-password {
    margin-top: 10px;
    text-align: center;
}

.forgot-password a {
    color: #007bff;
    text-decoration: none;
}

.forgot-password a:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Register to Historic Trails</h1>
        <form action="/register" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Username</label>
                <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <label for="category">Are you a?</label>
                <select class="form-control" id="category" name="kategori">
                    <option value="" disabled selected></option>
                    <option value="History Enthusiast">History Enthusiast</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Student">Student</option>
                </select>
            </div>
            <button type="submit">REGISTER</button>
        </form>
        {{-- <p class="forgot-password"><a href="#">Forgot Password?</a></p> --}}
    </div>
</body>
</html>
