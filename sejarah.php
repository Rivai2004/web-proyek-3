<!DOCTYPE html>
<?php
include_once 'config.php';


?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .top-container {
      background-color: #f1f1f1;
      padding: 30px;
      text-align: center;
    }

    .header {
      padding: 10px 16px;
      background: #555;
      color: #f1f1f1;
    }

    .content {
      padding: 16px;
    }

    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
    }

    .sticky+.content {
      padding-top: 102px;
    }
  </style>
  <link rel="stylesheet" href="homestyle.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <div class="header" id="myHeader">
    <h2 style=color:black;>SEJARAH</h2>
  </div>
  <center>
  <?php
  $ambil = "SELECT * FROM sejarah ORDER BY id ASC";
  $q = mysqli_query($conn, $ambil);

  while ($r2 = mysqli_fetch_array($q)) {
    $sejarah = $r2['sejarah'];
  }
  ?>
    <div class="card mb-3" style="max-width: 540px">
      <div class="row g-0">
        <div class="col-md-4"></div>
        <div class="col-md-8">
          <div class="card-body">
            <h2 class="card-title" style="margin-left: -1000px;">Sejarah Desa Sleman</h2>
            <p class="card-text" style="font-size:large">
              <?php echo $sejarah ?>
            </p>
            <p class="card-text">
              <small class="text-muted"></small>
            </p>
          </div>
        </div>
      </div>
    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="home.js"></script>
    </div>
    </div>
    </footer>
  </center>
  <script>
    window.onscroll = function() {
      myFunction();
    };

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
  </script>
</body>

</html>