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

$sql = "INSERT INTO angsuran (id, nama_anggota, angsuran_ke, keterangan)
VALUES ('$id', '$nama_anggota', '$angsuran_ke', '$keterangan')";
if (mysqli_query($conn, $sql)) {
  echo "Data berhasil ditambahkan.";
} else {
  echo "Data gagal ditambah: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 