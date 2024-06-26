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
    $nik = $_POST['nik'];
    $nomor = $_POST['nomor'];
    $alamat = $_POST['alamat'];
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];
    $nama4 = $_POST['nama4'];
    $nama5 = $_POST['nama5'];
    $nama6 = $_POST['nama6'];
    $nama7 = $_POST['nama7'];
    $nik1 = $_POST['nik1'];
    $nik2 = $_POST['nik2'];
    $nik3 = $_POST['nik3'];
    $nik4 = $_POST['nik4'];
    $nik5 = $_POST['nik5'];
    $nik6 = $_POST['nik6'];
    $nik7 = $_POST['nik7'];
    $shdk1 = $_POST['shdk1'];
    $shdk2 = $_POST['shdk2'];
    $shdk3 = $_POST['shdk3'];
    $shdk4 = $_POST['shdk4'];
    $shdk5 = $_POST['shdk5'];
    $shdk6 = $_POST['shdk6'];
    $shdk7 = $_POST['shdk7'];
    $keterangan1 = $_POST['keterangan1']; 
    $keterangan2 = $_POST['keterangan2'];
    $keterangan3 = $_POST['keterangan3'];
    $keterangan4 = $_POST['keterangan4'];
    $keterangan5 = $_POST['keterangan5'];
    $keterangan6 = $_POST['keterangan6'];
    $keterangan7 = $_POST['keterangan7'];
    $semula1 = $_POST['semula1'];
    $semula2 = $_POST['semula2'];
    $semula3 = $_POST['semula3'];
    $semula4 = $_POST['semula4'];
    $semula5 = $_POST['semula5'];
    $semula6 = $_POST['semula6'];
    $semula7 = $_POST['semula7'];
    $semula8 = $_POST['semula8'];
    $semula9 = $_POST['semula9'];
    $semula10 = $_POST['semula10'];
    $semula11 = $_POST['semula11'];
    $semula12 = $_POST['semula12'];
    $semula13 = $_POST['semula13'];
    $semula14 = $_POST['semula14'];
    $semula15 = $_POST['semula15'];
    $semula16 = $_POST['semula16'];
    $semula17 = $_POST['semula17'];
    $semula18 = $_POST['semula18'];
    $semula19 = $_POST['semula19'];
    $semula20 = $_POST['semula20'];
    $semula21 = $_POST['semula21'];
    $semula22 = $_POST['semula22'];
    $semula23 = $_POST['semula23'];
    $semula24 = $_POST['semula24'];
    $semula25 = $_POST['semula25'];
    $semula26 = $_POST['semula26'];
    $semula27 = $_POST['semula27'];
    $semula28 = $_POST['semula28'];
    $menjadi1 = $_POST['menjadi1'];
    $menjadi2 = $_POST['menjadi2'];
    $menjadi3 = $_POST['menjadi3'];
    $menjadi4 = $_POST['menjadi4'];
    $menjadi5 = $_POST['menjadi5'];
    $menjadi6 = $_POST['menjadi6'];
    $menjadi7 = $_POST['menjadi7'];
    $menjadi8 = $_POST['menjadi8'];
    $menjadi9 = $_POST['menjadi9'];
    $menjadi10 = $_POST['menjadi10'];
    $menjadi11 = $_POST['menjadi11'];
    $menjadi12 = $_POST['menjadi12'];
    $menjadi13 = $_POST['menjadi13'];
    $menjadi14 = $_POST['menjadi14'];
    $menjadi15 = $_POST['menjadi15'];
    $menjadi16 = $_POST['menjadi16'];
    $menjadi17 = $_POST['menjadi17'];
    $menjadi18 = $_POST['menjadi18'];
    $menjadi19 = $_POST['menjadi19'];
    $menjadi20 = $_POST['menjadi20'];
    $menjadi21 = $_POST['menjadi21'];
    $menjadi22 = $_POST['menjadi22'];
    $menjadi23 = $_POST['menjadi23'];
    $menjadi24 = $_POST['menjadi24'];
    $menjadi25 = $_POST['menjadi25'];
    $menjadi26 = $_POST['menjadi26'];
    $menjadi27 = $_POST['menjadi27'];
    $menjadi28 = $_POST['menjadi28'];
    $perubahan1 = $_POST['perubahan1'];
    $perubahan2 = $_POST['perubahan2'];
    $perubahan3 = $_POST['perubahan3'];
    $perubahan4 = $_POST['perubahan4'];
    $perubahan5 = $_POST['perubahan5'];
    $perubahan6 = $_POST['perubahan6'];
    $perubahan7 = $_POST['perubahan7'];
    $perubahan8 = $_POST['perubahan8'];
    $perubahan9 = $_POST['perubahan9'];
    $perubahan10 = $_POST['perubahan10'];
    $perubahan11 = $_POST['perubahan11'];
    $perubahan12 = $_POST['perubahan12'];
    $perubahan13 = $_POST['perubahan13'];
    $perubahan14 = $_POST['perubahan14'];
    $perubahan15 = $_POST['perubahan15'];
    $perubahan16 = $_POST['perubahan16'];
    $perubahan17 = $_POST['perubahan17'];
    $perubahan18 = $_POST['perubahan18'];
    $perubahan19 = $_POST['perubahan19'];
    $perubahan20 = $_POST['perubahan20'];
    $perubahan21 = $_POST['perubahan21'];
    $perubahan22 = $_POST['perubahan22'];
    $perubahan23 = $_POST['perubahan23'];
    $perubahan24 = $_POST['perubahan24'];
    $perubahan25 = $_POST['perubahan25'];
    $perubahan26 = $_POST['perubahan26'];
    $perubahan27 = $_POST['perubahan27'];
    $perubahan28 = $_POST['perubahan28'];
    $keterangan8 = $_POST['keterangan8'];
    $keterangan9 = $_POST['keterangan9'];
    $keterangan10 = $_POST['keterangan10'];
    $keterangan11 = $_POST['keterangan11'];
    $keterangan12 = $_POST['keterangan12'];
    $keterangan13 = $_POST['keterangan13'];
    $keterangan14 = $_POST['keterangan14'];
    $keterangan15 = $_POST['keterangan15'];
    $keterangan16 = $_POST['keterangan16'];
    $keterangan17 = $_POST['keterangan17'];
    $keterangan18 = $_POST['keterangan18'];
    $keterangan19 = $_POST['keterangan19'];
    $keterangan20 = $_POST['keterangan20'];
    $keterangan21 = $_POST['keterangan21'];
    // Menggunakan PhpWord untuk memproses template
    $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('SURAT PERNYATAAN PERUBAHAN ELEMEN DAN KEPENDUDUKAN.docx');
    $templateProcessor->setValues([
        'nama' => $nama,
        'nik' => $nik,
        'nomor' => $nomor,
        'alamat' => $alamat,
        'nama1' => $nama1,
        'nama2' => $nama2,
        'nama3' => $nama3,
        'nama4' => $nama4,
        'nama5' => $nama5,
        'nama6' => $nama6,
        'nama7' => $nama7,
        'nik1' => $nik1,
        'nik2' => $nik2,
        'nik3' => $nik3,
        'nik4' => $nik4,
        'nik5' => $nik5,
        'nik6' => $nik6,
        'nik7' => $nik7,
        'shdk1' => $shdk1,
        'shdk2' => $shdk2,
        'shdk3' => $shdk3,
        'shdk4' => $shdk4,
        'shdk5' => $shdk5,
        'shdk6' => $shdk6,
        'shdk7' => $shdk7,
        'keterangan1' => $keterangan1,
        'keterangan2' => $keterangan2,
        'keterangan3' => $keterangan3,
        'keterangan4' => $keterangan4,
        'keterangan5' => $keterangan5,
        'keterangan6' => $keterangan6,
        'keterangan7' => $keterangan7,
        'semula1' => $semula1,
        'semula2' => $semula2,
        'semula3' => $semula3,
        'semula4' => $semula4,
        'semula5' => $semula5,
        'semula6' => $semula6,
        'semula7' => $semula7,
        'semula8' => $semula8,
        'semula9' => $semula9,
        'semula10' => $semula10,
        'semula11' => $semula11,
        'semula12' => $semula12,
        'semula13' => $semula13,
        'semula14' => $semula14,
        'semula15' => $semula15,
        'semula16' => $semula16,
        'semula17' => $semula17,
        'semula18' => $semula18,
        'semula19' => $semula19,
        'semula20' => $semula20,
        'semula21' => $semula21,
        'semula22' => $semula22,
        'semula23' => $semula23,
        'semula24' => $semula24,
        'semula25' => $semula25,
        'semula26' => $semula26,
        'semula27' => $semula27,
        'semula28' => $semula28,
        'menjadi1' => $menjadi1,
        'menjadi2' => $menjadi2,
        'menjadi3' => $menjadi3,
        'menjadi4' => $menjadi4,
        'menjadi5' => $menjadi5,
        'menjadi6' => $menjadi6,
        'menjadi7' => $menjadi7,
        'menjadi8' => $menjadi8,
        'menjadi9' => $menjadi9,
        'menjadi10' => $menjadi10,
        'menjadi11' => $menjadi11,
        'menjadi12' => $menjadi12,
        'menjadi13' => $menjadi13,
        'menjadi14' => $menjadi14,
        'menjadi15' => $menjadi15,
        'menjadi16' => $menjadi16,
        'menjadi17' => $menjadi17,
        'menjadi18' => $menjadi18,
        'menjadi19' => $menjadi19,
        'menjadi20' => $menjadi20,
        'menjadi21' => $menjadi21,
        'menjadi22' => $menjadi22,
        'menjadi23' => $menjadi23,
        'menjadi24' => $menjadi24,
        'menjadi25' => $menjadi25,
        'menjadi26' => $menjadi26,
        'menjadi27' => $menjadi27,
        'menjadi28' => $menjadi28,
        'perubahan1' => $perubahan1,
        'perubahan2' => $perubahan2,
        'perubahan3' => $perubahan3,
        'perubahan4' => $perubahan4,
        'perubahan5' => $perubahan5,
        'perubahan6' => $perubahan6,
        'perubahan7' => $perubahan7,
        'perubahan8' => $perubahan8,
        'perubahan9' => $perubahan9,
        'perubahan10' => $perubahan10,
        'perubahan11' => $perubahan11,
        'perubahan12' => $perubahan12,
        'perubahan13' => $perubahan13,
        'perubahan14' => $perubahan14,
        'perubahan15' => $perubahan15,
        'perubahan16' => $perubahan16,
        'perubahan17' => $perubahan17,
        'perubahan18' => $perubahan18,
        'perubahan19' => $perubahan19,
        'perubahan20' => $perubahan20,
        'perubahan21' => $perubahan21,
        'perubahan22' => $perubahan22,
        'perubahan23' => $perubahan23,
        'perubahan24' => $perubahan24,
        'perubahan25' => $perubahan25,
        'perubahan26' => $perubahan26,
        'perubahan27' => $perubahan27,
        'perubahan28' => $perubahan28,
        'keterangan8' => $keterangan8,
        'keterangan9' => $keterangan9,
        'keterangan10' => $keterangan10,
        'keterangan11' => $keterangan11,
        'keterangan12' => $keterangan12,
        'keterangan13' => $keterangan13,
        'keterangan14' => $keterangan14,
        'keterangan15' => $keterangan15,
        'keterangan16' => $keterangan16,
        'keterangan17' => $keterangan17,
        'keterangan18' => $keterangan18,
        'keterangan19' => $keterangan19,
        'keterangan20' => $keterangan20,
        'keterangan21' => $keterangan21,

    ]); 

    // Menyimpan dokumen

    $namauser = $_SESSION['email'];
    $namasurat = "Surat Perubahan";
    $fileName = 'SURAT PERNYATAAN PERUBAHAN ELEMEN DAN KEPENDUDUKAN_' . time() . '.docx';
    $filePath = 'surat/' . $fileName;
    $templateProcessor->saveAs($filePath);

    // Menyimpan data ke database
    $stmt = $conn->prepare("INSERT INTO surat (namauser, namasurat,file_path) VALUES (?, ?, ?)");
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
    <h2>SURAT PERNYATAAN PERUBAHAN ELEMEN DAN KEPENDUDUKAN</h2>
    <h3>Yang bertanda tanggan di bawah ini.</h3>
    <table>
        <tr>
            <td>Nama Legkap</td><td> : </td><td><input type="text" name="nama" required /></td>
        </tr>
        <tr>
            <td>NIK</td><td> : </td><td><input type="text" name="nik" required /></td>
        </tr>
        <tr>
            <td>Nomor KK</td><td> : </td><td><input type="text" name="nomor" required /></td>
        </tr>
        <tr>
        <td>ALAMAT</td><td> : </td><td><input type="text" name="alamat" required /></td>
        </tr>
        <table>
<h3>Dengan rincian KK sebagai berikut</h3>

<tr>
<td>NAMA</td><td> : </td><td><input type="text" name="nama1" /></td>
</tr>

<tr>
<td>NIK</td><td> : </td><td><input type="text" name="nik1"  /></td>
        
</tr>
<tr>
<td>SHDK</td><td> : </td><td><input type="text" name="shdk1" /></td>
        
</tr>
<tr>
<td>Keterangan</td><td> : </td><td><input type="text" name="keterangan1" /></td>   
</tr>

<tr>
<td>NAMA</td><td> : </td><td><input type="text" name="nama2" /></td>
</tr>
<tr>
<td>NIK</td><td> : </td><td><input type="text" name="nik2"  /></td>
        
</tr>
<tr>
<td>SHDK</td><td> : </td><td><input type="text" name="shdk2" /></td>
        
</tr>
<tr>
<td>Keterangan</td><td> : </td><td><input type="text" name="keterangan2" /></td>   
</tr>

<tr>
<td>NAMA</td><td> : </td><td><input type="text" name="nama3" /></td>
</tr>
<tr>
<td>NIK</td><td> : </td><td><input type="text" name="nik3"  /></td>
        
</tr>
<tr>
<td>SHDK</td><td> : </td><td><input type="text" name="shdk3" /></td>
        
</tr>
<tr>
<td>Keterangan</td><td> : </td><td><input type="text" name="keterangan3" /></td>   
</tr>

<tr>
<td>NAMA</td><td> : </td><td><input type="text" name="nama4" /></td>
</tr>
<tr>
<td>NIK</td><td> : </td><td><input type="text" name="nik4"  /></td>
        
</tr>
<tr>
<td>SHDK</td><td> : </td><td><input type="text" name="shdk4" /></td>
        
</tr>
<tr>
<td>Keterangan</td><td> : </td><td><input type="text" name="keterangan4" /></td>   
</tr>

<tr>
<td>NAMA</td><td> : </td><td><input type="text" name="nama5" /></td>
</tr>
<tr>
<td>NIK</td><td> : </td><td><input type="text" name="nik5"  /></td>
        
</tr>
<tr>
<td>SHDK</td><td> : </td><td><input type="text" name="shdk5" /></td>
        
</tr>
<tr>
<td>Keterangan</td><td> : </td><td><input type="text" name="keterangan5" /></td>   
</tr>

<tr>
<td>NAMA</td><td> : </td><td><input type="text" name="nama6" /></td>
</tr>
<tr>
<td>NIK</td><td> : </td><td><input type="text" name="nik6"  /></td>
        
</tr>
<tr>
<td>SHDK</td><td> : </td><td><input type="text" name="shdk6" /></td>
        
</tr>
<tr>
<td>Keterangan</td><td> : </td><td><input type="text" name="keterangan6" /></td>   
</tr>

<tr>
<td>NAMA</td><td> : </td><td><input type="text" name="nama7" /></td>
</tr>
<tr>
<td>NIK</td><td> : </td><td><input type="text" name="nik7"  /></td>
        
</tr>
<tr>
<td>SHDK</td><td> : </td><td><input type="text" name="shdk7" /></td>
        
</tr>
<tr>
<td>Keterangan</td><td> : </td><td><input type="text" name="keterangan7" /></td>   
</tr>
        </tr>
        </table>
        <table><h3>A.Pendidikan dan Pekerjaan</h3></table>
        <table><h3>Pendidikan Terakhir</h3>
<td>Semula</td><td> : </td><td><input type="text" name="semula1" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi1"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan1" /></td> 
</tr>

<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula2" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi2"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan2" /></td> 
</tr>

<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula3" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi3"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan3" /></td> 
</tr>

<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula4" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi4"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan4" /></td> 
</tr>

<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula5" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi5"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan5" /></td> 
</tr>

<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula6" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi6"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan6" /></td> 
</tr>

<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula7" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi7"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan7" /></td> 
</tr>
        </tr>
        </table>
        <table><h3>Pekerjaan</h3>
<td>Semula</td><td> : </td><td><input type="text" name="semula8" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi8"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan8" /></td> 
</tr>

<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula9" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi9"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan9" /></td> 
</tr>

<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula10" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi10"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan10" /></td> 
</tr>

<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula11" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi11"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan11" /></td> 
</tr>

<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula12" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi12"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan12" /></td> 
</tr>
        </tr>
        
<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula13" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi13"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan13" /></td> 
</tr>


<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula14" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi14"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan14" /></td> 
</tr>
        </table>
        <table>
<td>keterangan</td><td> : </td><td><input type="text" name="keterangan8" /></td> 
</tr>
<tr>
<td>keterangan</td><td> : </td><td><input type="text" name="keterangan9" /></td> 
</tr>
<tr>
<td>keterangan</td><td> : </td><td><input type="text" name="keterangan10" /></td> 
</tr>
<tr>
<td>keterangan</td><td> : </td><td><input type="text" name="keterangan11" /></td> 
</tr>
<tr>
<td>keterangan</td><td> : </td><td><input type="text" name="keterangan12" /></td> 
</tr>
<tr>
<td>keterangan</td><td> : </td><td><input type="text" name="keterangan13" /></td> 
</tr>
<tr>
<td>keterangan</td><td> : </td><td><input type="text" name="keterangan14" /></td> 
</tr>
        </tr>
        </table>

        <table><h3>B.Agama dan Perubahan Lainnya</h3>
<td>Semula</td><td> : </td><td><input type="text" name="semula15" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi15"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan15" /></td> 
</tr>

<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula16" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi16"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan16" /></td> 
</tr>

<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula17" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi17"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan17" /></td> 
</tr>

<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula18" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi18"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan18" /></td> 
</tr>

<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula19" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi19"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan19" /></td> 
</tr>

<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula20" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi20"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan20" /></td> 
</tr>

<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula21" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi21"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan21" /></td> 
</tr>
        </tr>
            
<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula22" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi22"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan22" /></td> 
</tr>


<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula23" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi23"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan23" /></td> 
</tr>


<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula24" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi24"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan24" /></td> 
</tr>


<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula25" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi25"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan25" /></td> 
</tr>


<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula26" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi26"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan26" /></td> 
</tr>


<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula27" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi27"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan27" /></td> 
</tr>


<tr>
<td>Semula</td><td> : </td><td><input type="text" name="semula28" /></td>
</tr>
<tr>
<td>Menjadi</td><td> : </td><td><input type="text" name="menjadi28"  /></td>
        
</tr>
<tr>
<td>Dasar Perubahan</td><td> : </td><td><input type="text" name="perubahan28" /></td> 
</tr>
        </tr>
        </table>

        <table>
<td>keterangan</td><td> : </td><td><input type="text" name="keterangan15" /></td> 
</tr>
<tr>
<td>keterangan</td><td> : </td><td><input type="text" name="keterangan16" /></td> 
</tr>
<tr>
<td>keterangan</td><td> : </td><td><input type="text" name="keterangan17" /></td> 
</tr>
<tr>
<td>keterangan</td><td> : </td><td><input type="text" name="keterangan18" /></td> 
</tr>
<tr>
<td>keterangan</td><td> : </td><td><input type="text" name="keterangan19" /></td> 
</tr>
<tr>
<td>keterangan</td><td> : </td><td><input type="text" name="keterangan20" /></td> 
</tr>
<tr>
<td>keterangan</td><td> : </td><td><input type="text" name="keterangan21" /></td> 
</tr>
        </tr>
        </table>
    </table>
    <tr> 
        <td colspan="3"><input type="submit" value="Print"/></td>
    </tr>
</form>
</body>
</html>
