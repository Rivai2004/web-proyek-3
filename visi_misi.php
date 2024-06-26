<?php
include_once 'config.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <link rel="stylesheet" href="https://bulakan.desa.id/wp-content/themes/rife-free/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/all.css" />
  <link rel="stylesheet" href="homestyle.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Visi Misi</title>
  <script src="https://unpkg.com/scrollreveal"></script>
  <link rel="stylesheet" href="homestyle.css">
</head>
<style>
  body {
    color: white;
    background-color: #dae1e7;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Segoe UI", Arial, sans-serif;
    font-weight: 700;
    margin: 10px 0;
    color: black;
  }

  p {
    color: black;
  }

  h1,
  p {
    margin: 20px 100px
  }

  #footer {
    font-size: 14px;
  }

  #footer.centered,
  #footer.centered .widget h3.title,
  #footer.centered .widget .socials {
    text-align: center;
  }

  #footer {
    font-size: 10px;
    background-color: #dae1e7;
    width: 100%;
    min-height: 70px;
    box-sizing: border-box;
  }

  #footer {
    position: relative;
    z-index: 10;
  }
</style>

<body style="font-family: 'Lato', sans-serif">
  <?php
  $ambil = "SELECT * FROM visi_misi ORDER BY id ASC";
  $q = mysqli_query($conn, $ambil);

  while ($r2 = mysqli_fetch_array($q)) {
    $image = $r2['image'];
    $visi = $r2['visi'];
    $misi = $r2['misi'];
  }
  ?>
  <center>
    <h3 style="font-size: 2em">Visi Misi</h3>
  </center>
  <center>
    <img class="slide-up" width="400px" src="img/<?php echo $image ?>" />
  </center>

  <h1>VISI</h1>
  <p><?php echo $visi ?></p>
  <h1>MISI</h1>
  <p><?php echo $misi ?></p>
  <script>
    ScrollReveal({
      reset: true
    });
    ScrollReveal().reveal(".show-once", {
      reset: false
    });
    ScrollReveal().reveal(".title", {
      duration: 2500,
      origin: "top",
      distance: "50px",
      easing: "cubic-bezier(0.5, 0, 0, 1)",
      rotate: {
        x: 20,
        z: -10
      },
    });
    ScrollReveal().reveal(".fade-in", {
      delay: 200,
      duration: 2500,
      move: 0,
    });
    ScrollReveal().reveal(".scaleUp", {
      duration: 2500,
      scale: 0.85
    });
    ScrollReveal().reveal(".flip", {
      delay: 500,
      duration: 2000,
      rotate: {
        x: 20,
        z: 20
      },
    });
    ScrollReveal().reveal(".slide-right", {
      duration: 1000,
      origin: "left",
      distance: "300px",
      easing: "ease-in-out",
    });
    ScrollReveal().reveal(".slide-up", {
      duration: 1000,
      origin: "bottom",
      distance: "100px",
      easing: "cubic-bezier(.37,.01,.74,1)",
      opacity: 0,
      scale: 0.5,
    });

    function myFunction(id) {
      var x = document.getElementById(id);
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>
  <script src="js/all.js"></script>
  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="gabungan.php"> <i class="fas fa-angle-right"></i> profile</a>
        <a href="informasi_publik.php"> <i class="fas fa-angle-right"></i> informasi publik</a>
        <a href="aduan.php"> <i class="fas fa-angle-right"></i> layanan publik</a>
      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
        <h3>kontak info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
        <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
        <a href="#"> <i class="fas fa-envelope"></i> Sleman@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i> indramayu, indonesia - 45271</a>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#"> <i class="fab fa-youtube"></i> youtube </a>
      </div>
    </div>
    <div class="credit"> created by <span>RID</span> | all rights reserved! </div>
  </section>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="home.js"></script>
</body>

</html>