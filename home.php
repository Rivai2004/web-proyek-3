<?php
include_once 'config.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="homestyle.css">
</head>

<body>
    <section class="header">
        <a href="home.php" class="logo"><img src="images/sleman.png" alt="Logo Sleman" style="width: 30%; height: 20%;"></a>
        <nav class="navbar">
            <a href="home.php">HOME</a>
            <a href="gabungan.php">PROFIL</a>
            <a href="list_surat_user.php">LIST SURAT</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <?php
                $ambil = "SELECT * FROM slide_gambar ORDER BY id ASC";
                $q = mysqli_query($conn, $ambil);
                $count = 0;

                while ($r2 = mysqli_fetch_array($q)) {
                    if ($count >= 300) {
                        break;
                    }

                    $image = $r2['image'];
                    $judul = $r2['judul'];
                ?>

                    <div class="swiper-slide slide" style="background: url(img/<?php echo $image ?>) no-repeat;background-size: cover;background-position: center;">
                        <div class="content">
                            <h3><?php echo $judul ?></h3>
                        </div>
                    </div>

                <?php } ?>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <section class="services">
        <h1 class="heading-title">Layanan</h1>
        <div class="box-container">
            <a href="gabungan.php">
                <div class="box">
                    <img src="images/profil.png" alt="">
                    <h3>PROFILE</h3>
                </div>
            </a>

            <div class="box">
                <img src="images/info.png" alt="">
                <a href="informasi_publik.php">
                    <h3>INFORMASI PUBLIK</h3>
                </a>
            </div>

            <div class="box">
                <img src="images/pengumuman.png" alt="">
                <a href="pengumuman.php">
                    <h3>PENGUMUMAN</h3>
                </a>
            </div>

            <div class="box">
                <img src="images/aspirasi.png" alt="">
                <a href="aspirasi.php">
                    <h3>ASPIRASI WARGA</h3>
                </a>
            </div>

            <div class="box">
                <img src="images/tele.png" alt="">
                <a href="login_user.php">
                    <h3>SURAT ONLINE</h3>
                </a>
            </div>
        </div>
    </section>

    <section class="home-about">
        <?php
        $ambil = "SELECT * FROM profil_kades LIMIT 1";
        $q = mysqli_query($conn, $ambil);

        while ($r2 = mysqli_fetch_array($q)) {
            $image = $r2['image'];
            $nama = $r2['nama'];
            $deskripsi = $r2['deskripsi'];
        ?>
            <div class="image">
                <img src="img/<?php echo $image ?>" alt="">
            </div>

            <div class="content">
                <h3><?php echo $nama ?></h3>
                <p><?php echo $deskripsi ?></p>
                <a href="SOTK.php" class="btn">Read More</a>
            </div>
        <?php } ?>
    </section>

    <section class="heading" style="background-color: rgb(0, 191, 255);">
        <h1>Struktur Organisasi dan Tata Kerja</h1>

    </section>

    <section class="pengumuman">
        

        <div class="box-container">

            <?php
            $ambil = "SELECT * FROM pemerintah_desa ORDER BY id_pemerintah_desa ASC";
            $q = mysqli_query($conn, $ambil);
            $count = 0;

            while ($r2 = mysqli_fetch_array($q)) {
                if ($count >= 3) {
                    break; // keluar dari loop setelah 3 berita ditampilkan
                }
                $id_pemerintah_desa = $r2['id_pemerintah_desa'];
                $image = $r2['image'];
                $nama = $r2['nama'];
                $jabatan = $r2['jabatan'];
            ?>
                <div class="box">
                    <div class="image">
                        <img src="img/<?php echo $image ?>" alt="">
                    </div>
                </div>

            <?php
                $count++;
            }
            ?>

        </div>
        
    </section>

    <section class="pengumuman">
        <h1 class="heading-title">Berita Terkini</h1>

        <div class="box-container">

            <?php
            $ambil = "SELECT * FROM pengumuman ORDER BY id_pengumuman ASC";
            $q = mysqli_query($conn, $ambil);
            $count = 0;

            while ($r2 = mysqli_fetch_array($q)) {
                if ($count >= 3) {
                    break; // keluar dari loop setelah 3 berita ditampilkan
                }

                $id_pengumuman = $r2['id_pengumuman'];
                $image = $r2['image'];
                $judul = $r2['judul'];
                $deskripsi = $r2['deskripsi'];
            ?>
                <div class="box">
                    <div class="image">
                        <img src="img/<?php echo $image ?>" alt="">
                    </div>
                    <div class="content">
                        <h3><?php echo $judul ?></h3>
                        <p><?php echo $deskripsi ?></p>
                    </div>
                </div>

            <?php
                $count++;
            }
            ?>

        </div>
        <div class="load-more"><a href="pengumuman.php" class="btn">Selengkapnya</a></div>
    </section>


    <section class="footer">
        <div class="box-container">
           
           

            <div class="box">
                <h3>Kontak Info</h3>
               
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
                <a href="#"> <i class="fas fa-envelope"></i> sleman@gmail.com</a>
                
            </div>

            <div class="box">
                
                <a href="#"> <i class="fas fa-map"></i> indramayu, indonesia - 45271</a>
            </div>
        </div>
        <div class="credit"> created by <span>kelompok 9</span> | all rights reserved! </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="home.js"></script>
</body>

</html>