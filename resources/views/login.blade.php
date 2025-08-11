<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color : #f8f7f3;
    }
    .login-container {
      max-width: 400px;
      margin: 80px auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .d-grid button {
        background-color : black;
        color : white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .d-grid button:hover {
        background-color: grey;

    }
    .footer {
        text-align: center;
        margin-top: 15px;
        font-size: 13px;
    }
  </style>
</head>
<body>
<div class="login-container">
    <h2 class="text-center mb-4">Login</h2 >
    <form method="POST" action="/login">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" required>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn">Masuk</button>
      </div>
    </form>
    <div class="footer">
        Belum punya akun? <a href="#">Daftar</a>
    </div>
  </div>
</body>
</html>
