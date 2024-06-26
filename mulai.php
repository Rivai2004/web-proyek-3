<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="pasangan.css">
<?php
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

// Mendapatkan id dari parameter
$id = $_GET['id'];

// Mengecek status surat berdasarkan id
$stmt = $conn->prepare("SELECT status FROM surat WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($status);
$stmt->fetch();
$stmt->close();

$conn->close();
?>
<div class="w-full max-w-[700px] mx-auto mt-10 bg-white rounded-[5px] shadow py-4 px-6">

<ol class="flex items-center w-full space-x-2 text-base font-medium text-center text-gray-500 sm:space-x-6">
        <li class="flex items-center">
            <span class="flex items-center justify-center w-6 h-6 me-2 text-xs border border-gray-600 rounded-full shrink-0">
                1
            </span>
            Mulai
        </li>
        <li class="flex items-center <?php echo $status == 'proses' ? 'text-blue-600' : ''; ?>">
            <span class="flex items-center justify-center w-6 h-6 me-2 text-xs border <?php echo $status == 'proses' ? 'border-blue-500' : 'border-gray-500'; ?> rounded-full shrink-0">
                2
            </span>
            Surat Sedang Di Proses
        </li>
        <li class="flex items-center <?php echo $status == 'selesai' ? 'text-blue-600' : ''; ?>">
            <span class="flex items-center justify-center w-6 h-6 me-2 text-xs border <?php echo $status == 'selesai' ? 'border-blue-500' : 'border-gray-500'; ?> rounded-full shrink-0">
                3
            </span>
            Surat Bisa Diambil Di balai Desa
        </li>
    </ol>

</div>

<div class="container-cus mx-auto mt-5 shadow">
    <form method="POST" action="{{ route('setup.store') }}">
        <div class="content-cus">
            <div class="flex flex-col items-center justify-center">
                <h2 class="font-bold text-xl text-black"><?php echo $status == 'proses' ? 'Surat sedang diproses' : 'Surat Anda siap diambil'; ?></h2>
                <a class="text-blue-500 font-bold" href="list_surat_user.php">Lihat List Surat Anda</a>
            </div>
        </div>
    </form>
</div>
