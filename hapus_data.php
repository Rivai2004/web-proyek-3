<?php
include_once 'config.php';

// Mendapatkan data yang dikirim melalui POST
$data = $_POST['data'];
$data = json_decode($data);

// Melakukan penghapusan data
foreach ($data as $id) {
  $id = mysqli_real_escape_string($conn, $id);
  $sql = "DELETE FROM aduan_warga WHERE id_aduan = '$id'";
  mysqli_query($conn, $sql);
}

// Menutup koneksi ke database
mysqli_close($conn);
?>
