<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" type="text/css" href="design.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include("navbar.php"); ?>

<!-- Video Section -->
<div class="container-fluid p-0" style="padding-top: 30px">
  <div class="photo-lobby">
    <div class="ratio ratio-16x9">
      <iframe 
        src="https://www.youtube.com/embed/3x6wMAl26W0?autoplay=1&mute=1&loop=1&playlist=3x6wMAl26W0&enablejsapi=1" 
        title="YouTube video" 
        allow="autoplay; fullscreen" 
        allowfullscreen>
      </iframe>
    </div>
  </div>
</div>

<br><br>
<p style="text-align: center; font-family: Lora, serif; font-size: 30px; color:red;"><b>"We need more heroes—your blood donation can be <br>
 the life-saving act someone desperately needs."</b>

</p>
<div class="container my-5">
  <div class="row align-items-center">

    <div class="col-md-6">
      <h1 style="text-align: justify; font-family: 'Open Sans', sans-serif; font-size: 50px;">
        Your Commitment
      </h1>
      <br>
      <p style="text-align: justify; font-family: 'Playfair Display', serif; font-size: 20px;">
        Donating blood is a simple act of kindness that can save multiple lives in just one visit. Your single donation can bring hope
        to patients in need of surgeries, cancer treatments, or emergency care. Be a hero today—give the gift of life through blood donation.
      </p>
    </div>


    <div class="col-md-6 text-center">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="photo/donation4.jpg" class="d-block w-100" alt="Donation Image 1">
          </div>
          <div class="carousel-item">
            <img src="photo/donation2.jpg" class="d-block w-100" alt="Donation Image 2">
          </div>
          <div class="carousel-item">
            <img src="photo/donation3.png" class="d-block w-100" alt="Donation Image 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>


<p style="text-align: center; font-family: Lora, serif; font-size: 30px;">
  Donate blood today—your small act can make a life-saving difference for someone in need.
  <br><br>
  <button class="btn btn-danger" style="font-size: 25px;">Learn More!</button>
  <br><br><br>
</p>

<div class="container my-5">
  <div class="row align-items-center">
    

    <div class="col-md-6">
      <h1 style="text-align: justify; font-family: 'Open Sans', sans-serif; font-size: 50px;">
        DONATE NOW!
      </h1>
      <br>
      <p style="text-align: justify; font-family: 'Playfair Display', serif; font-size: 20px;">
        Hemo Vault is committed to ensuring a steady, safe, and accessible supply of blood for those who need it most. 
        With its expanding reach and dedication, Hemo Vault supports nationwide efforts to provide quality blood and encourages 
        voluntary donation to meet growing needs. By engaging communities, schools, organizations, and institutions through awareness and advocacy, 
        Hemo Vault plays an active role in promoting regular blood donation across the country.
      </p>
    </div>

    <div class="col-md-6">
      <div class="ratio ratio-16x9">
        <iframe 
          src="https://www.youtube.com/embed/dAbmL_kXHj8?autoplay=1&mute=1&loop=1&playlist=dAbmL_kXHj8" 
          title="YouTube video" 
          allow="autoplay; fullscreen" 
          allowfullscreen>
        </iframe>
      </div>
    </div>

  </div>
</div>
<p style="text-align: center; font-family: Lora, serif; font-size: 30px;">
"Your blood donation today can save lives and make a life-changing difference for those in need."
  <br><br>
  <button class="btn btn-danger" style="font-size: 25px;">Donate now!</button>
</p>

<div class="container">
    <br><br><br>
    <h1 style="text-align: center; font-family: 'Playfair Display', serif; font-size: 50px; font-family: 'Open Sans', sans-serif;">CURRENT EVENTS</h1>
    <br><br>
</div>

<div class="d-flex justify-content-center gap-3">
    <!-- First Card -->
    <div class="card" style="width: 18rem; padding: 10px;">
        
        <div class="card-body">
            <p class="card-text" style="text-align: center; font-family: 'Playfair Display', serif; font-size:25px; padding-top:20px;">World Blood Donor Day (June 14) Celebration</p>
            <p class="card-text" style="text-align: justify;"> Feature an event highlighting the significance of voluntary blood donation and the role of blood donors in saving lives. You can include success stories,
                 thank-you notes to donors, and share a call to action for more people to donate.</p>
        </div>
        <img src="photo/eloise.jpg" class="card-img-top" alt="Éloise Dupont" style="width: 100%; height: 200px; object-fit: cover;">
    </div>

    <!-- Second Card -->
    <div class="card" style="width: 18rem; padding: 10px;">
        
        <div class="card-body">
            <p class="card-text" style="text-align: center; font-family: 'Playfair Display', serif; font-size:25px; padding-top:20px;">Blood Donation Drive Partnership with Local Universities</p>
            <p class="card-text" style="text-align: justify;">A partnership with local schools or universities to host blood donation drives. The event can focus on educating students about the importance of blood donation, and you could feature incentives like certificates or small rewards for donors.

</p>
        </div>
        <img src="photo/eloise.jpg" class="card-img-top" alt="Éloise Dupont" style="width: 100%; height: 200px; object-fit: cover;">
    </div>

    <!-- Third Card -->
    <div class="card" style="width: 18rem; padding: 10px;">
        
        <div class="card-body">
            <p class="card-text" style="text-align: center; font-family: 'Playfair Display', serif; font-size:25px; padding-top:20px;">Hemo Vault Mobile Blood Donation Units Launch</p>
            <p class="card-text" style="text-align: justify;">Announce the launch of mobile blood donation units in different communities or neighborhoods, making it easier for people to donate blood at their convenience. Highlight the ease and accessibility of blood donation.</p>
        </div>
        <img src="photo/eloise.jpg" class="card-img-top" alt="Éloise Dupont" style="width: 100%; height: 200px; object-fit: cover;">
    </div>
</div>

<div class="d-flex justify-content-center gap-3 mt-4">
    <!-- Fourth Card -->
    <div class="card" style="width: 18rem; padding: 10px;">
       
        <div class="card-body">
            <p class="card-text" style="text-align: center; font-family: 'Playfair Display', serif; font-size:25px; padding-top:20px;">Meet Our Donors: Real-Life Stories</p>
            <p class="card-text" style="text-align: justify;">Listen to the inspiring stories of individuals who regularly donate blood, or highlight someone who has saved lives through blood donation. Real-life testimonials can motivate others to donate.</p>
        </div>
        <img src="photo/eloise.jpg" class="card-img-top" alt="Éloise Dupont" style="width: 100%; height: 200px; object-fit: cover;">
    </div>

    <!-- Fifth Card -->
    <div class="card" style="width: 18rem; padding: 10px;">
        
        <div class="card-body">
            <p class="card-text" style="text-align: center; font-family: 'Playfair Display', serif; font-size:25px; padding-top:20px;">New Blood Donation Guidelines and Safety Measures</p>
            <p class="card-text" style="text-align: justify;">Educate visitors on updated blood donation protocols, ensuring safety for both donors and recipients. This could include guidelines on who can donate and any new health checks that have been introduced.</p>
        </div>
        <img src="photo/eloise.jpg" class="card-img-top" alt="Éloise Dupont" style="width: 100%; height: 200px; object-fit: cover;">
    </div>

    <!-- Sixth Card -->
    <div class="card" style="width: 18rem; padding: 10px;">
       
        <div class="card-body">
            <p class="card-text" style="text-align: center; font-family: 'Playfair Display', serif; font-size:25px; padding-top:20px;">Emergency Blood Drive: Addressing Critical Shortages</p>
            <p class="card-text" style="text-align: justify;">Create urgency by reporting on critical blood shortages in the region or country and encourage people to donate in response. Emphasize the immediate need and how one donation can save up to three lives.</p>
        </div>
        <img src="photo/eloise.jpg" class="card-img-top" alt="Éloise Dupont" style="width: 100%; height: 200px; object-fit: cover;">
    </div>
</div>

<?php include("footer.php"); ?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
