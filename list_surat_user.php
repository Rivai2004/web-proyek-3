<?php
session_start();

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "desa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>List Surat</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="aduan.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <section class="header">
      <a href="home.php" class="logo">Sleman</a>
      <nav class="navbar">
        <a href="home.php">home</a>
        <a href="profile.php">profile</a>
        <a href="informasi.php">informasi</a>
        <a href="logout_user.php">logout</a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <section class="heading" style="background-color: rgb(0, 191, 255)">
      <h1 style="font-size: 60px;">LIST SURAT</h1>
    </section>

    <section class="d-flex justify-content-center">
    
<div class="container mt-5">
    <h2 class="mb-4">Daftar Surat untuk <?php echo $email ?></h2>
    <table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>No</th> <!-- New column for the iteration counter -->
            <th>Nama User</th>
            <th>Nama Surat</th>
            <th>Status</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM surat WHERE namauser='$email' ORDER BY id DESC";
        $result = $conn->query($sql);
        $counter = 1; // Initialize counter

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$counter}</td> <!-- Display counter value -->
                        <td>{$row['namauser']}</td>
                        <td>{$row['namasurat']}</td>
                        <td>{$row['status']}</td>
                        <td>{$row['created_at']}</td>
                      </tr>";
                $counter++; // Increment counter
            }
        } else {
            echo "<tr><td colspan='6' class='text-center'>Tidak ada surat ditemukan</td></tr>";
        }

        $conn->close();
        ?>
    </tbody>
</table>

</div>
    </section>

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="home.html"> <i class="fas fa-angle-right"></i> home</a>
          <a href="profile.html"> <i class="fas fa-angle-right"></i> profile</a>
          <a href="informasi.html">
            <i class="fas fa-angle-right"></i> informasi publik</a
          >
          <a href="layanan.html">
            <i class="fas fa-angle-right"></i> layanan publik</a
          >
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
          <a href="#">
            <i class="fas fa-map"></i> indramayu, indonesia - 45271</a
          >
        </div>

        <div class="box">
          <h3>follow us</h3>
          <a href="#"> <i class="fab fa-facebook"></i> facebook </a>
          <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
          <a href="#"> <i class="fab fa-youtube"></i> youtube </a>
        </div>
      </div>
      <div class="credit">
        created by <span>kelompok 8</span> | all rights reserved!
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
