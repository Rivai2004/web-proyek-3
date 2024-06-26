<?php
include_once 'config.php';

session_start();
if (isset($_SESSION['email'])) {
   header("Location: list_surat");
   exit();
}

if (isset($_POST['login'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];

   $sql = "SELECT email from login_user WHERE email = '$email' and password = '$password'";
   $hasil = $conn->query($sql);
   if ($hasil->num_rows == 1) {
      $row = $hasil->fetch_assoc();
      $_SESSION['email'] = $row['email'];
      header("Location: list_surat");
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
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Login Form | CodingLab </title>
    <link rel="stylesheet" href="user.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
  <div class="container">
    <div class="title">Login</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Masukan Email Anda" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Masukan Password" name="password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name= "login" value="Login">
        </div>
      </form>
      <a href="register_user.php">
                    <h3>Belum Punya Akun ? Daftar Sekarang</h3>
                </a>
    </div>
  </div>
</body>
</html>