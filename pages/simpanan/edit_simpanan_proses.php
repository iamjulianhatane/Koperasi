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

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "UPDATE simpanan SET id=$id, nama_anggota=$nama_anggota, jenis_simpanan=$jenis_simpanan, 
        jml_simpanan=$jml_simpanan, saldo=$saldo, ket_simpan=$ket_simpan WHERE id_simpanan=$id_simpanan";

if (mysqli_query($conn, $sql)) {
  echo "Data berhasil diubah.";
} else {
  echo "Data gagal diubah: " . $conn->error;
}

$conn->close();
?> 