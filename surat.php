<?php
include_once 'config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle status update request
if (isset($_GET['ubah_status_id'])) {
    $ubah_status_id = intval($_GET['ubah_status_id']);
    $update_sql = "UPDATE surat SET status='selesai' WHERE id=$ubah_status_id";
    $conn->query($update_sql);
}

$sql = "SELECT * FROM surat ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<body>
<h2>Daftar Surat</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama user</th>
        <th>Nama Surat</th>
        <th>File</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php
    if ($result && $result->num_rows > 0) {
        $iteration = 1; // Initialize iteration counter
        while($row = $result->fetch_assoc()) {
            // Sanitize output
            $id = htmlspecialchars($row["id"]);
            $namauser = htmlspecialchars($row["namauser"]);
            $namasurat = htmlspecialchars($row["namasurat"]);
            $file_path = htmlspecialchars($row["file_path"]);
            $status = htmlspecialchars($row["status"]);
            
            echo "<tr>";
            echo "<td>$iteration</td>"; // Display iteration counter
            echo "<td>$namauser</td>";
            echo "<td>$namasurat</td>";
            echo "<td><a href='$file_path' download>Download</a></td>";
            echo "<td>$status</td>";
            if ($status == 'proses') {
                echo "<td><a href='?ubah_status_id=$id'>Ubah ke Selesai</a></td>";
            } else {
                echo "<td>Selesai</td>";
            }
            echo "</tr>";
            
            $iteration++; // Increment iteration counter
        }
    } else {
        echo "<tr><td colspan='6'>No records found</td></tr>";
    }
    ?>
</table>
</body>
</html>

<?php
$conn->close();
?>
