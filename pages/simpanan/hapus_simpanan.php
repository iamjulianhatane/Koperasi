<?php

$id_=$_POST['id'];
$nama_anggota=$_POST['nama_anggota'];
$jenis_simpanan=$_POST['jenis_simpanan'];
$jml_simpanan=$_POST['jml_simpanan'];
$saldo=$_POST['saldo'];
$ket_simpan=$_POST['ket_simpan'];

$servername = "localhost";
$database = "ksp_nesar";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "DELETE FROM simpanan WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Data berhasil dihapus.";
} else {
  echo "Data gagal dihapus" . mysqli_error($conn);
}

mysqli_close($conn);
?> 