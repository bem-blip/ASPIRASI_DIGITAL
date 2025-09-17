<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "aspirasi_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari request
$judul     = $_POST['judul'];
$kategori  = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$anonim    = $_POST['anonim'];

// Simpan ke database
$sql = "INSERT INTO aspirasi (judul, kategori, deskripsi, anonim) 
        VALUES ('$judul', '$kategori', '$deskripsi', '$anonim')";

if ($conn->query($sql) === TRUE) {
  echo "Sukses";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
