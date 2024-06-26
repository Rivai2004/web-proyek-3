<?php
include_once 'config.php';

session_start();
if (isset($_SESSION['username'])) {
   header("Location: index");
   exit();
}

if (isset($_POST['login'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];

   $sql = "SELECT username from login_admin WHERE username = '$username' and password = '$password'";
   $hasil = $conn->query($sql);
   if ($hasil->num_rows == 1) {
      $row = $hasil->fetch_assoc();
      $_SESSION['username'] = $row['username'];
      header("Location: index");
   } else {
?><script>
         alert('Username atau password salah')
      </script><?php
            }
         }

         if (isset($_POST['daftar'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Cek apakah NIP sudah terdaftar dalam database
            $sql_cek_username = "SELECT * FROM login_admin WHERE username='$username'";
            $q_cek_username = mysqli_query($conn, $sql_cek_username);
            $jml_cek_username = mysqli_num_rows($q_cek_username);

            if ($jml_cek_username > 0) { // Jika NIP sudah terdaftar, tampilkan pesan error
               ?><script>
         alert('Username sudah terdaftar')
      </script><?php
            } else { // Jika NIP belum terdaftar, tambahkan data pengguna baru ke database
               if ($username && $password) {
                  $sql1 = "insert into login_admin(username,password) values ('$username','$password')";
                  $q1 = mysqli_query($conn, $sql1);
                  if ($q1) {
               ?><script>
               alert('Berhasil Daftar')
            </script><?php
                  } else {
                     $error = "Terjadi kesalahan koneksi!";
                  }
               } else {
                  $error = "Silakan masukkan semua data!";
               } 
               
            }
         }
                     ?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Login dan Registrasi Admin</title>
   <link rel="stylesheet" href="login.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
   <div class="wrapper">
      <div class="title-text">
         <div class="title login">
            Login
         </div>
         <div class="title signup">
            Registrasi
         </div>
      </div>
      <div class="form-container">
         <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup">
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Registrasi</label>
            <div class="slider-tab"></div>
         </div>
         <div class="form-inner">
            <form action="" class="login" method="POST">
               <div class="field">
                  <input type="email" placeholder="Masukan Email" name="username" required>
               </div>
               <div class="field">
                  <input type="password" placeholder="Masukan Password" name="password" required>
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" name="login" value="Login">
               </div>
               <div class="signup-link">
                  Belum Punya Akun? <a href="">Daftar Sekarang</a>
               </div>
            </form>
            <form method="POST" action="" class="signup">
               <div class="field">
                  <input type="text" name="username" placeholder="Masukan Email" required>
               </div>
               <div class="field">
                  <input type="password" name="password" placeholder="Masukan Password" required>
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" name="daftar" value="Daftar">
               </div>
            </form>
         </div>
      </div>
   </div>
   <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (() => {
         loginForm.style.marginLeft = "-50%";
         loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (() => {
         loginForm.style.marginLeft = "0%";
         loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (() => {
         signupBtn.click();
         return false;
      });
   </script>
</body>

</html>