<?php
require 'vendor/autoload.php';
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "desa"; // ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Membaca data dari form
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $nama1 = $_POST['nama1'];
    $nik = $_POST['nik'];

    // Menggunakan PhpWord untuk memproses template
    $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('SURAT KUASA DALAM PELAYANAN ADMINISTRASI KEPENDUDUKAN.docx');
    $templateProcessor->setValues([
        'nama' => $nama,
        'ttl' => $ttl,
        'pekerjaan' => $pekerjaan,
        'alamat' => $alamat,
        'nama1' => $nama1,
        'nik' => $nik,
    ]);

    // Menyimpan dokumen
    $fileName = 'SURAT KUASA DALAM PELAYANAN ADMINISTRASI KEPENDUDUKAN_' . time() . '.docx';
    $filePath = 'surat/' . $fileName;
    $templateProcessor->saveAs($filePath);

    $namauser = $_SESSION['email'];
    $namasurat = "SURAT KUASA DALAM PELAYANAN ADMINISTRASI KEPENDUDUKAN";
    // Menyimpan data ke database
    $stmt = $conn->prepare("INSERT INTO surat (namauser, namasurat, file_path) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $namauser, $namasurat, $filePath);

    if ($stmt->execute()) {
        // Mendapatkan id terakhir yang dimasukkan
        $last_id = $conn->insert_id;
        // Mengalihkan ke mulai.php dengan parameter id
        header("Location: mulai.php?id=$last_id");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>

<html>
<head><title>Form Surat</title></head>
<body>
<form action="" method="POST">
    <h2>SURAT KUASA DALAM PELAYANAN ADMINISTRASI KEPENDUDUKAN</h2>
    <h3>Pada hari ini........ tanggal........ bulan........ tahun.......  
bertempat di............, Saya: 
</h3>
    <table>
        <tr>
            <td>Nama</td><td> : </td><td><input type="text" name="nama" required /></td>
        </tr>
        <tr>
            <td>Tempat tanggal lahir/usia</td><td> : </td><td><input type="text" name="ttl" required /></td>
        </tr>
        <tr>
            <td>PEKERJAAN</td><td> : </td><td><input type="text" name="pekerjaan" required /></td>
        </tr>
        <table>
            <tr>
            <td>ALAMAT</td><td> : </td><td><input type="text" name="alamat" required /></td>
            </tr>
        </table>
        <tr>
            <Table>
        
        </tr>
        <tr>
            <p>
Memberikan kuasa kepada :
</p>

<tr>
<td>NAMA LENGKAP</td><td> : </td><td><input type="text" name="nama1" required /></td>
</tr>
<tr>
<td>NIK</td><td> : </td><td><input type="text" name="nik" required /></td>
</Table>
<table>
    <tr>
        <p>Untuk mengisi formulir dalam pelayanan administrasi kependudukan, sesuai keterangan dan kelengkapan yang saya berikan seperti keadaan yang sebenarnya dikarenakan kondisi saya dalam keadaan sakit / lainnya *)</p>
    </tr>
</table>        
</tr>
        </tr>
    </table>
    <tr> 
        <td colspan="3"><input type="submit" value="Print"/></td>
    </tr>
</form>

<img src="visimisi-1.png" alt="Sedang Memuat">
</body>
</html>
