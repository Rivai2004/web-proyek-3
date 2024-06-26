<?php
include_once 'config.php';

session_start();
if (isset($_SESSION['email'])) {
   header("Location: list_surat");
   exit();
}

         if (isset($_POST['register'])) {
            $nama = $_POST['nama'];
            $nik = $_POST['nik'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nomor_telepon = $_POST['nomor_telepon'];
            
            $sql_cek_email = "SELECT * FROM login_user WHERE email='$email'";
            $q_cek_email = mysqli_query($conn, $sql_cek_email);
            $jml_cek_email = mysqli_num_rows($q_cek_email);

            if ($jml_cek_email > 0) { // Jika NIP sudah terdaftar, tampilkan pesan error
               ?><script>
         alert('Email sudah terdaftar')
      </script><?php
            } else { // Jika NIP belum terdaftar, tambahkan data pengguna baru ke database
               if ($email && $password) {
                  $sql1 = "insert into login_user(email,nik,nama,password,nomor_telepon) values ('$email','$nik','$nama','$password','$nomor_telepon')";
                  $q1 = mysqli_query($conn, $sql1);
                  if ($q1) {
               ?><script>
               alert('Berhasil Daftar')
            </script><?php
            header("Location: login_user");
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
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Registrasi Akun </title>
    <link rel="stylesheet" href="user.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nama Lengkap</span>
            <input type="text" placeholder="Masukan Nama" name="nama" required>
          </div>
          <div class="input-box">
            <span class="details">NIK</span>
            <input type="text" placeholder="Masukan Nik" name="nik" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Masukan Email" name = "email" required>
          </div>
          <div class="input-box">
            <span class="details">Nomor Telepon</span>
            <input type="text" placeholder="Masukan Nomor Telepon" name = "nomor_telepon"required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name = "password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name = "register" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
