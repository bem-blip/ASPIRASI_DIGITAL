<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "aspirasi_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$id = $_GET['id'];

if ($id) {
  $sql = "DELETE FROM aspirasi WHERE id=$id";
  if ($conn->query($sql) === TRUE) {
    echo json_encode(["success" => true]);
  } else {
    echo json_encode(["success" => false, "message" => $conn->error]);
  }
}

$conn->close();
?>
