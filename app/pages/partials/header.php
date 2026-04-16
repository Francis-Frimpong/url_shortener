<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shortly - URL Shortener</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f5f5f5;
      font-family: Arial, sans-serif;
    }

    .hero {
      padding: 60px 0;
    }

    .hero-text h1 {
      font-weight: bold;
      font-size: 2.5rem;
    }

    .hero-text p {
      color: #777;
    }

    .btn-main {
      background-color: #2acfcf;
      color: white;
      border-radius: 25px;
      padding: 10px 20px;
    }

    .search-box {
      background: #3b3054;
      padding: 25px;
      border-radius: 10px;
      margin-top: 40px;
    }

    .search-box input {
      border-radius: 5px;
    }

    .search-box button {
      background-color: #2acfcf;
      border: none;
    }

    .stats {
      margin-top: 80px;
      text-align: center;
    }

    .card-box {
      padding: 25px;
      border-radius: 10px;
      background: white;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .cta {
      background: #3b3054;
      color: white;
      padding: 60px 0;
      text-align: center;
      margin-top: 60px;
    }

    footer {
      background: #232127;
      color: white;
      padding: 40px 0;
    }

    footer a {
      color: #bbb;
      text-decoration: none;
    }

    footer a:hover {
      color: white;
    }
  </style>
</head>
<body>

<!-- NAV -->
<nav class="navbar navbar-expand-lg bg-white">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Shortly</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Resources</a></li>
        <li class="nav-item ms-3"><a class="btn btn-main" href="#">Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>