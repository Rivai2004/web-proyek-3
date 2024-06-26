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
    $alamat = $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $ibu = $_POST['ibu'];
    $ayah = $_POST['ayah'];

    // Menggunakan PhpWord untuk memproses template
    $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('SURAT PERNYATAAN TIDAK MEMILIKI DOKUMEN KEPENDUDUKAN.docx');
    $templateProcessor->setValues([
        'nama' => $nama,
        'alamat' => $alamat,
        'ttl' => $ttl,
        'ibu' => $ibu,
        'ayah' => $ayah
    ]);

    // Menyimpan dokumen
    $fileName = 'SURAT PERNYATAAN TIDAK MEMILIKI DOKUMEN KEPENDUDUKAN_' . time() . '.docx';
    $filePath = 'surat/' . $fileName;
    $templateProcessor->saveAs($filePath);

    $namauser = $_SESSION['email'];
    $namasurat = "SURAT PERNYATAAN TIDAK MEMILIKI DOKUMEN KEPENDUDUKAN";
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
    <h2>SURAT PERNYATAAN TIDAK MEMILIKI DOKUMEN KEPENDUDUKAN</h2>
    <h3>Yang bertanda tanggan di bawah ini
</h3>
    <table>
        <tr>
            <td>Nama</td><td> : </td><td><input type="text" name="nama" required /></td>
        </tr>
        <tr>
            <td>Alamat</td><td> : </td><td><input type="text" name="alamat" required /></td>
        </tr>
        <tr>
            <td>Tempat Tanggal Lahir</td><td> : </td><td><input type="text" name="ttl" required /></td>
        </tr>
        <table>
            <tr>
            <td>Nama Ibu</td><td> : </td><td><input type="text" name="ibu" required /></td>     
            </tr>
        </table>
        <table>
            <tr>
            <td>Nama Ayah</td><td> : </td><td><input type="text" name="ayah" required /></td>
            </tr>
        </table>
        <tr>
            <Table>
        
        </tr>
        <tr>
            <p>
<table>
    <tr>
        <p>Dengan ini menyatakan bahwa saya tidak memiliki dokumen kependudukan dan apabila dikemudian hari ternyata pernyataan saya ini tidak benar, maka saya bersedia diproses secara hukum sesuai dengan peraturan perundang-undangan serta dokumen yang terbitkan dan permohonan ini menjadi tidak sah. </p>
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
