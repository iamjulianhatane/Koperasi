<?php

$id =  $_POST['id'];
$nama_anggota =  $_POST['nama_anggota'];
$tempat_lahir =  $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk =  $_POST['jk'];
$alamat = $_POST['alamat']; 
$no_telp = $_POST['no_telp'];
$pekerjaan = $_POST['pekerjaan'];

$servername = "localhost";
$database = "ksp_nesar";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "UPDATE anggota SET id=$id, nama_anggota=$nama_anggota, tempat_lahir=$tempat_lahir, tgl_lahir=$tgl_lahir, jk=$jk, alamat=$alamat, 
no_telp=$no_telp, pekerjaan=$pekerjaan WHERE id_anggota=$id_anggota";
header ("location:data_anggota.php");

if (mysqli_query($conn, $sql)) {
  echo "Data berhasil diubah.";
} else {
  echo "Data gagal diubah: " . $conn->error;
}

$conn->close();
?> 