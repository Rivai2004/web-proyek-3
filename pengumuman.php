<?php
include_once 'config.php';


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pengumuman</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
    --main-color:#8e44ad;
    --black:#222;
    --white:#fff;
    --light-black:#777;
    --light-white:#fff9;
    --dark-bg:rgba(0,0,0,0.7);
    --light-bg:#eee;
    --border:.1rem solid var(--black);
    --box-shadow:0 .5rem 1rem rgba(0,0,0,0.1);
    --text-shadow:0 1.5rem 3rem rgba(0,0,0,0.3);
}
*{
    font-family: 'Poppins', sans-serif;
    margin: 0; padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
}
html{
    font-size: 62.5%;
    overflow-x: hidden;
}
html::-webkit-scrollbar{
    width: 1rem;
}
html::-webkit-scrollbar-track{
    background-color: var(--white);
}
html::-webkit-scrollbar-thumb{
    background-color: var(--main-color);
}
section{
    padding: 5rem 10%;
}

@keyframes fadeIn {
    0%{
        transform: scale(0);
        opacity: 0;
    }
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    background: var(--black);
    color: var(--white);
    font-size: 1.7rem;
    padding: 1rem 3rem;
    cursor: pointer;
}

.btn:hover{
    background: var(--main-color);
}

.heading-title{
    text-align: center;
    margin-bottom: 3rem;
    font-size: 6rem;
    text-transform: uppercase;
    color: var(--black);
}
.header {
  background-color: #333;
  color: white;
  display: flex;
  align-items: center;
  padding: 10px 20px;
}

.header .logo img {
  width: 100%;
  height: auto;
}

.header .navbar {
  margin-left: auto;
}

.header .navbar a {
  color: white;
  padding: 10px 15px;
  margin-left: 10px;
  transition: background-color 0.3s ease;
}

.header .navbar a:hover {
  background-color: #555;
}
.heading {
  text-align: center;
  padding: 30px 20px;
  background-color: rgb(0, 191, 255);
  color: white;
  border-radius: 5rem;
  font-size: large;
}

.home{
    padding: 0;
}
.home .slide{
    text-align: center;
    padding: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover !important;
    background-position: center !important;
    min-height: 60rem;
}
.home .slide .content{
    width: 85rem;
    display: none;
}
.home .swiper-slide-active .content{
    display: inline-block;
}
.home .slide .content h3{
    font-size: 4vw;
    color: var(--white);
    text-transform: uppercase;
    line-height: 1;
    text-shadow: var(--text-shadow);
    padding: 1rem 0;
    animation:fadeIn .2s linear backwards .4s;
}
.home .slide .content .btn{
    animation:fadeIn .2s linear backwards .6s;
}
.home .swiper-button-next,
.home .swiper-button-prev{
    top: inherit;
    left: inherit;
    bottom: 0;
    right: 0;
    height: 7rem;
    width: 7rem;
    background: var(--white);
    color: var(--black);
}
.home .swiper-button-next:hover,
.home .swiper-button-prev:hover{
    background: var(--main-color);
    color: var(--white);
}
.home .swiper-button-next::after,
.home .swiper-button-prev::after{
    font-size: 2rem;
}
.home .swiper-button-prev{
    right: 7rem;
}

.services .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(16rem, 1fr));
    gap: 1.5rem;
}
.services .box-container .box{
    padding: 3rem 2rem;
    text-align: center;
    background: var(--main-color);
    cursor: pointer;
}
.services .box-container .box:hover{
    background: var(--black);
}
.services .box-container .box img{
    height: 7rem;
}
.services .box-container .box h3{
    color: var(--black);
    font-size: 1.5rem;
    padding-top: 1rem;
}

.home-about{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}
.home-about .image{
    flex: 1 1 41rem;
}
.home-about .image img{
    width: 100%;
}
.home-about .content{
    flex: 1 1 41rem;
    padding: 3rem;
    background: var(--light-bg);
}
.home-about .content h3{
    font-size: 3rem;
    color: var(--black);
}
.home-about .content p{
    font-size: 1.5rem;
    padding: 1rem 0;
    line-height: 2rem;
    color: var(--black);
}

.home-pengumuman{
    background: var(--light-bg);
}

.home-pengumuman .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 2rem;
}

.home-pengumuman .box-container .box{
    border: var(--border);
    box-shadow: var(--box-shadow);
    background: var(--white);
}

.home-pengumuman .box-container .box .image{
    height: 25rem;
    overflow: hidden;
}

.home-pengumuman .box-container .box .image img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    transition: .2s linear;
}

.home-pengumuman .box-container .box .content{
    padding: 2rem;
    text-align: center;
}

.home-pengumuman .box-container .box .content h3{
    font-size: 2.5rem;
    color: var(--black);
}

.home-pengumuman .box-container .box .content p{
    font-size: 1.5rem;
    color: var(--light-black);
    line-height: 2;
    padding: 1rem 0;
}

.home-pengumuman .load-more{
    text-align: center;
    margin-top: 2rem;
}

.pengumuman .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 2rem;
}

.pengumuman .box-container .box{
    border: var(--border);
    box-shadow: var(--box-shadow);
    background: var(--white);
    display: none;
}

.pengumuman .box-container .box:nth-child(1),
.pengumuman .box-container .box:nth-child(2),
.pengumuman .box-container .box:nth-child(3),
.pengumuman .box-container .box:nth-child(4),
.pengumuman .box-container .box:nth-child(5),
.pengumuman .box-container .box:nth-child(6){
    display: inline-block;
}

.pengumuman .box-container .box .image{
    height: 25rem;
    overflow: hidden;
}

.pengumuman .box-container .box .image img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    transition: .2s linear;
}

.pengumuman .box-container .box .content{
    padding: 2rem;
    text-align: center;
}

.pengumuman .box-container .box .content h3{
    font-size: 2.5rem;
    color: var(--black);
}

.pengumuman .box-container .box .content p{
    font-size: 1.5rem;
    color: var(--light-black);
    line-height: 2;
    padding: 1rem 0;
}

.pengumuman .load-more{
    text-align: center;
    margin-top: 2rem;
}




















.aspirasi .aspirasi-form{
    padding: 2rem;
    background: var(--light-bg);
}

.aspirasi .aspirasi-form .flex{
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
}

.aspirasi .aspirasi-form .flex .inputBox{
    flex: 1 1 41rem;
}

.aspirasi .aspirasi-form .flex .inputBox input{
    width: 100%;
    padding: 1.2rem 1.4rem;
    font-size: 1.6rem;
    color: var(--light-black);
    text-transform: none;
    margin-top: 1.5rem;
    border: var(--border);
}

.aspirasi .aspirasi-form .flex .inputBox input:focus{
    background: var(--black);
    color: var(--white);
}

.aspirasi .aspirasi-form .flex .inputBox input:focus::placeholder{
    color: var(--light-white);
}

.aspirasi .aspirasi-form .flex .inputBox span{
    font-size: 1.5rem;
    color: var(--light-black);
}

.aspirasi .aspirasi-form .btn{
    margin-top: 2rem;
}







.footer {
  background-color: #333;
  color: white;
  padding: 50px 20px;
}

.footer .box-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.footer .box {
  flex: 1;
  margin: 10px;
}

.footer .box h3 {
  margin-bottom: 20px;
}

.footer .box a {
  display: block;
  color: white;
  margin-bottom: 10px;
}

.footer .box a:hover {
  text-decoration: underline;
}

.footer .credit {
  text-align: center;
  margin-top: 20px;
  font-size: 14px;
}

.footer .credit span {
  font-weight: bold;
}









@media (max-width: 1200px){
    section{
        padding: 3rem 5%;
    }
}

@media (max-width: 991px){
    html{
        font-size: 55%;
    }
    section{
        padding: 3rem 2rem;
    }
    .home .slide .content h3{
        font-size: 10vw;
    }
}
@media (max-width:768px){
    #menu-btn{
        display: inline-block;
        transition: .2s linear;
    }

    #menu-btn.fa-times{
        transform: rotate(180deg);
    }

    .header .navbar{
        position: absolute;
        top: 99%; left: 0; right: 0;
        background-color: var(--white);
        border-top: var(--border);
        padding: 2rem;
        transition: .2s linear;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    .header .navbar.active{
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }

    .header .navbar a{
        display: block;
        margin: 2rem;
        text-align: center;
    }
}
@media (max-width: 450px){
    html{
        font-size: 50%;
    }

    .heading-title{
        font-size: 3.5rem;
    }
}
    </style>
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

        <section class="heading" style="background-color: rgb(0, 191, 255);">
            <h3>Pengumuman</h3>

        </section>

        <section class="pengumuman">
            <h1 class="heading-title">Berita terkini</h1>
            
            <div class="box-container">

            <?php
$ambil = "SELECT * FROM pengumuman ORDER BY id_pengumuman ASC";
$q = mysqli_query($conn, $ambil);

while ($r2 = mysqli_fetch_array($q)) {
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
}
?>

            </div>
        </section>

        <section class="footer">
        <div class="box-container">
           
           

            <div class="box">
                <h3>Kontak Info</h3>
               
                <a href="https://api.whatsapp.com/send?phone=6287725057948&text=Assalamualaikum%2C%20admin%20saya%20mau%20bikin%20surat%20%0ANama%20%3A%20%0AAlamat%20%3A%20%0AKeterangan%20surat%20%3A%20">088888888</a>

                <a href="#"> <i class="fas fa-envelope"></i> sleman@gmail.com</a>
                
            </div>

            <div class="box">
                
                <a href="#"> <i class="fas fa-map"></i> indramayu, indonesia - 45271</a>
            </div>
        </div>
        <div class="credit"> created by <span>kelompok 9</span> | all rights reserved! </div>
    </section>

        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>