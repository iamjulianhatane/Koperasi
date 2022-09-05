<?php

$id = $_POST['id'];
$nama_anggota = $_POST['nama_anggota'];
$jml_pinjaman = $_POST['jml_pinjaman'];
$bunga = $_POST['bunga'];
$total_pinjam = $_POST['total_pinjam'];
$denda = $_POST['denda'];
$tgl_bayar = $_POST['tgl_bayar'];
$ket_pinjam = $_POST['ket_pinjam'];

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

$sql = "UPDATE pinjaman SET id=$id, nama_anggota=$nama_anggota, jml_pinjaman=$jml_pinjaman, bunga=$bunga, 
        total_pinjam=$total_pinjam, denda=$denda, tgl_bayar=$tgl_bayar, ket_pinjam=$ket_pinjam";

if (mysqli_query($conn, $sql)) {
  echo "Data berhasil diubah.";
} else {
  echo "Data gagal diubah: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 