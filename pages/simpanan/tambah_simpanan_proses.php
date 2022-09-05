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

$sql = "INSERT INTO simpanan (id, nama_anggota, jenis_simpanan, jml_simpanan, saldo, ket_simpan) 
        VALUES ('$id', '$nama_anggota', '$jenis_simpanan', '$jml_simpanan', ''$saldo', $ket_simpan')";

if (mysqli_query($conn, $sql)) {
  echo "Data berhasil ditambahkan.";
} else {
  echo "Data gagal ditambah: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 