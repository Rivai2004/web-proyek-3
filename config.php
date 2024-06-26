<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db = "desa";

$conn = mysqli_connect($servername, $user, $pass, $db);
if (!$conn){
  die("connection gagal :". mysqli_connect_error());
}

$current_page = basename($_SERVER['PHP_SELF']);

//mysqli_close($conn);
