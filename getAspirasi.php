<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "aspirasi_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM aspirasi ORDER BY tanggal DESC";
$result = $conn->query($sql);

$aspirasi = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $aspirasi[] = $row;
  }
}

header('Content-Type: application/json');
echo json_encode($aspirasi);

$conn->close();
?>
