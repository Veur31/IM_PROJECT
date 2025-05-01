<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar - Hemo Vault</title>

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="design.css">

  <style>
    .navbar-nav .nav-link {
      font-weight: bold;
      text-decoration: none;
      padding-bottom: 5px;
      border-bottom: 3px solid transparent;
      transition: border-color 0.3s ease-in-out, color 0.3s ease-in-out;
      color: black !important;
    }

    .navbar-nav .nav-link:hover {
      border-bottom: 3px solid white !important;
      color: rgb(255, 255, 255) !important;
    }
  </style>
</head>
<body>

<div class="container4">
  <nav class="navbar navbar-expand-lg" style="background-color: #dc3545;">
    <a class="navbar-brand text-white" style="font-family: Didot, Bodoni MT, serif; font-size: 50px;" href="#">Hemo Vault</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto" style="font-size: 20px; font-family: 'Open Sans', sans-serif;">
        <li class="nav-item mx-2">
          <a class="nav-link text-white" href="index.php">HOME</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link text-white" href="#">DONATE NOW</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link text-white" href="#">SERVICES</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link text-white" href="#">CONTACT</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link text-white" href="login.php">LOGIN</a>
        </li>
      </ul>
    </div>
  </nav>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
