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

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "DELETE FROM pinjaman WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Data berhasil dihapus.";
} else {
  echo "Data gagal dihapus: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 