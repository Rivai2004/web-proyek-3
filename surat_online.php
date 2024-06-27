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
    $nama1 = $_POST['nama1'];
    $nik1 = $_POST['nik1'];
    $nama2 = $_POST['nama2'];
    $nik2 = $_POST['nik2'];
    $nama3 = $_POST['nama3'];
    $nik3 = $_POST['nik3'];
    $nama4 = $_POST['nama4'];
    $nik4 = $_POST['nik4'];
    $tanggal1 = $_POST['tanggal1'];
    $nama5 = $_POST['nama5'];
    $nama6 = $_POST['nama6'];
    $nama7 = $_POST['nama7'];
    $nama8 = $_POST['nama8'];
    $nama9 = $_POST['nama9'];
    $nama10 = $_POST['nama10'];
    $nama11 = $_POST['nama11'];
    $akte1 = $_POST['akte1'];
    $akte2 = $_POST['akte2'];
    $akte3 = $_POST['akte3'];
    $akte4 = $_POST['akte4'];
    $akte5 = $_POST['akte5'];
    $akte6 = $_POST['akte6'];
    $akte7 = $_POST['akte7'];
    $shdk1 = $_POST['shdk1'];
    $shdk2 = $_POST['shdk2'];
    $shdk3 = $_POST['shdk3'];
    $shdk4 = $_POST['shdk4'];
    $shdk5 = $_POST['shdk5'];
    $shdk6 = $_POST['shdk6'];
    $shdk7 = $_POST['shdk7'];
    // Menggunakan PhpWord untuk memproses template
    $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('template.docx');
    $templateProcessor->setValues([
        'nama1' => $nama1,
        'nik1' => $nik1,
        'nama2' => $nama2,
        'nik2' => $nik2,
        'nama3' => $nama3,
        'nik3' => $nik3,
        'nama4' => $nama4,
        'nik4' => $nik4,
        'tanggal1' => $tanggal1,
        'nama5' => $nama5,
        'nama6' => $nama6,
        'nama7' => $nama7,
        'nama8' => $nama8,
        'nama9' => $nama9,
        'nama10' => $nama10,
        'nama11' => $nama11,
        'akte1' => $akte1,
        'akte2' => $akte2,
        'akte3' => $akte3,
        'akte4' => $akte4,
        'akte5' => $akte5,
        'akte6' => $akte6,
        'akte7' => $akte7,
        'shdk1' => $shdk1,
        'shdk2' => $shdk2,
        'shdk3' => $shdk3,
        'shdk4' => $shdk4,
        'shdk5' => $shdk5,
        'shdk6' => $shdk6,
        'shdk7' => $shdk7
    ]);

    // Menyimpan dokumen

    $namauser = $_SESSION['email'];
    $namasurat = "SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK
    PERKAWINAN / PERCERAIAN BELUM TERCATAT";
    $fileName = 'SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK
    PERKAWINAN / PERCERAIAN BELUM TERCATAT
    ' . time() . '.docx';
    $filePath = 'surat/' . $fileName;
    $templateProcessor->saveAs($filePath);

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
<link rel="stylesheet" href="suratkawin.css">
<body>
<form action="" method="POST">
    <h2>SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK PERKAWINAN / PERCERAIAN BELUM TERCATAT</h2>
    <h3>Kami Yang Bertanda Tangan Dibawah ini</h3>
    <table>
        <tr>
            <td>Nama</td><td> : </td><td><input type="text" name="nama1" required /></td>
        </tr>
        <tr>
            <td>NIK</td><td> : </td><td><input type="text" name="nik1" required /></td>
        </tr>
        <tr>
            <td>TANGGAL PERKAWINAN/PERCERAIAN</td><td> : </td><td><input type="text" name="tanggal1" required /></td>
        </tr>
    </table>
    <table>
        <tr>
            <td>Nama</td><td> : </td><td><input type="text" name="nama2" required /></td><p>Sebagai suami, selanjutnya disebut PIHAK PERTAMA.</p>
        </tr>
        <tr>
            <td>NIK</td><td> : </td><td><input type="text" name="nik2" required /></td>
        </tr>
    </table>
    <table>
    <p>Sebagai istri, selanjutnya disebut PIHAK KEDUA.
Menyatakan bahwa kami telah terkait perkawinan sebagai suami istri telah melakukan perkawinan / perceraian *), yang dilaksanakan pada ${tanggal1} ( tanggal perkawinan / perceraian *) dengan saksi-saksi.
</p>
    </table>
    <table>
        <p>I</p>
        <tr>
            <td>Nama</td><td> : </td><td><input type="text" name="nama4" required /></td>
        </tr>
        <tr>
            <td>NIK</td><td> : </td><td><input type="text" name="nik4" required /></td>
        </tr>
        </table>

<table>
    <p>II</p>
        <tr>
            <td>Nama</td><td> : </td><td><input type="text" name="nama3" required /></td>
        </tr>
        <tr>
            <td>NIK</td><td> : </td><td><input type="text" name="nik3" required /></td>
        </tr>
        </table>

        <table>
            <tr>
            <p>Dengan Nama anak-anak sebagi berikut :</p>
            </tr>
        </table>
        <table>
        
            <td>Nama</td><td> : </td><td><input type="text" name="nama5"  /></td>
        </tr>
        <tr>
            <td>No. Akte Kelahiran</td><td> : </td><td><input type="text" name="akte1" /></td>
        </tr>
        <tr>
            <td>SHDK</td><td> : </td><td><input type="text" name="shdk1"  /></td>
        </tr>
        </table>
            <table>
        <tr>
            <td>Nama</td><td> : </td><td><input type="text" name="nama6"  /></td>
        </tr>
        <tr>
            <td>No. Akte Kelahiran</td><td> : </td><td><input type="text" name="akte2" /></td>
        </tr>
        <tr>
            <td>SHDK</td><td> : </td><td><input type="text" name="shdk2"  /></td>
        </tr>
        </table>
        <table>
        <tr>
            <td>Nama</td><td> : </td><td><input type="text" name="nama7"  /></td>
        </tr>
        <tr>
            <td>No. Akte Kelahiran</td><td> : </td><td><input type="text" name="akte3" /></td>
        </tr>
        <tr>
            <td>SHDK</td><td> : </td><td><input type="text" name="shdk3"  /></td>
        </tr>
        </table>
        <table>
        <tr>
            <td>Nama</td><td> : </td><td><input type="text" name="nama8"  /></td>
        </tr>
        <tr>
            <td>No. Akte Kelahiran</td><td> : </td><td><input type="text" name="akte4" /></td>
        </tr>
        <tr>
            <td>SHDK</td><td> : </td><td><input type="text" name="shdk4"  /></td>
        </tr>
        </table>
        <table>
        <tr>
            <td>Nama</td><td> : </td><td><input type="text" name="nama9"  /></td>
        </tr>
        <tr>
            <td>No. Akte Kelahiran</td><td> : </td><td><input type="text" name="akte5" /></td>
        </tr>
        <tr>
            <td>SHDK</td><td> : </td><td><input type="text" name="shdk5"  /></td>
        </tr>
        </table>
        <table>
        <tr>
            <td>Nama</td><td> : </td><td><input type="text" name="nama10"  /></td>
        </tr>
        <tr>
            <td>No. Akte Kelahiran</td><td> : </tsd><td><input type="text" name="akte6" /></td>
        </tr>
        <tr>
            <td>SHDK</td><td> : </td><td><input type="text" name="shdk6"  /></td>
        </tr>
        </table>
        <table>
        <tr>
            <td>Nama</td><td> : </td><td><input type="text" name="nama11"  /></td>
        </tr>
        <tr>
            <td>No. Akte Kelahiran</td><td> : </td><td><input type="text" name="akte7" /></td>
        </tr>
        <tr>
            <td>SHDK</td><td> : </td><td><input type="text" name="shdk7"  /></td>
        </tr>
        </table>
        </tr>
    </table>
    <tr> 
        <td colspan="3"><input type="submit" value="Print"/></td>
    </tr>
</form>
</body>
</html>
