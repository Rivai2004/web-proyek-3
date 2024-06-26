<?php
include_once 'config.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="sotk.css" />
  <link rel="stylesheet" href="homestyle.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <title>SOTK</title>
</head>

<body>
  <div id="bodyblur"><img src="foto_bajakan.jpg" id="wallpaper" /></div>
  <center>
    <h2>SOTK</h2>
  </center>
  <?php
  $ambil = "SELECT * FROM pemerintah_desa ORDER BY id_pemerintah_desa ASC";
  $q = mysqli_query($conn, $ambil);

  while ($r2 = mysqli_fetch_array($q)) {
    $id_pemerintah_desa = $r2['id_pemerintah_desa'];
    $image = $r2['image'];
    $nama = $r2['nama'];
    $jabatan = $r2['jabatan'];
  ?>

    <center>
      <div class="card mb-3" style="max-width: 540px">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/<?php echo $image ?>" class="img-fluid rounded-start" alt="..." />
          </div>
          <div class="col-md-8">
            <div class="card-body" style="display: grid;margin-top:auto;margin-bottom:auto;height:150px;align-content:center">
              <h3 class="card-title"><?php echo $nama ?></h3>
              <p class="card-text">
                <?php echo $jabatan ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </center>

  <?php
  }
  ?>
  <section class="footer" style="color: black;">
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="home.js"></script>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="home.js"></script>
</body>

</html>