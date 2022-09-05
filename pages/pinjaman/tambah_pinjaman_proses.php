<?php

$id=$_POST['id'];
$nama_anggota=$_POST['nama_anggota'];
$jml_pinjaman=$_POST['jml_pinjaman'];
$bunga=$_POST['bunga'];
$total_pinjam=$_POST['total_pinjam'];
$denda=$_POST['denda'];
$tgl_bayar=$_POST['tgl_bayar'];
$ket_pinjam=$_POST['ket_pinjam'];

$servername = "localhost";
$database = "ksp_nesar";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "INSERT INTO pinjaman (id, nama_anggota, jml_pinjaman, bunga, total_pinjam, denda, tgl_bayar, ket_pinjam)
VALUES ('$id, '$nama_anggota', '$jml_pinjaman', '$bunga','$total_pinjam', '$denda', '$tgl_bayar', '$ket_pinjam')";

if (mysqli_query($conn, $sql)) {
  echo "Data berhasil ditambahkan.";
} else {
  echo "Data gagal ditambah: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 