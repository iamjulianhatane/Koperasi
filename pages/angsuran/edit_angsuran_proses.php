<?php

$id=$_POST['id'];
$nama_anggota=$_POST['nama_anggota'];
$angsuran_ke=$_POST['angsuran_ke'];
$keterangan=$_POST['keterangan'];


$servername = "localhost";
$database = "ksp_nesar";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "UPDATE angsuran SET id=$id, nama_anggota=$nama_anggota,
        angsuran_ke=$angsuran_ke, keterangan=$keterangan";

if (mysqli_query($conn, $sql)) {
  echo "Data berhasil diubah.";
} else {
  echo "Data gagal diubah: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 