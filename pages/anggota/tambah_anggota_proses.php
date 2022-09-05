<?php
$id = isset($_POST['id']);
$nama_anggota =  isset($_POST['nama_anggota']);
$tempat_lahir =  isset($_POST['tempat_lahir']);
$tgl_lahir = isset($_POST['tgl_lahir']);
$jk =  isset($_POST['jk']);
$alamat = isset($_POST['alamat']); 
$no_telp = isset($_POST['no_telp']);
$pekerjaan = isset($_POST['pekerjaan']);

  $servername = "localhost";
  $database = "ksp_nesar";
  $username = "root";
  $password = "";

  $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
      die("Koneksi gagal: " . $conn->connect_error);
    }

  $sql = "INSERT INTO anggota (id, nama_anggota, tempat_lahir, tgl_lahir, jk, alamat, no_telp, pekerjaan) 
          VALUES ('$id', '$nama_anggota', '$tempat_lahir', '$tgl_lahir', '$jk', '$alamat', '$no_telp', '$pekerjaan')";
  header ("location:data_anggota.php");

  if (mysqli_query($conn, $sql)) {
      echo "Data berhasil ditambahkan";
    } else {
      echo "Data gagal ditambahkan: " . $sql . "<br>" . mysqli_error($conn);
    }
  $conn->close();
?> 