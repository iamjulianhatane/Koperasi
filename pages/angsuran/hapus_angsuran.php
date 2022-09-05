<?php

$id=$_POST['id'];
$nama_anggota=$_POST['nama_anggota'];
$angsuran_ke=$_POST['angsuran_ke'];
$keterangan=$_POST['keterangan'];

$servername = "localhost";
$database = "ksp_nesar";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM angsuran WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 