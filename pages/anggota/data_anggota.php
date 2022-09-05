<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DANESHA | Data Anggota</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="../../index.php" class="brand-link">
      <img src="../../dist/img/ksp_logo.png" alt="NESAR Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DANESHA</span>
    </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item start">
                            <a href="../../index.php" class="nav-link">
                                <span class="title" style="padding-left: 10px"> DASHBOARD </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_anggota.php" class="nav-link active">
                                <span class="title" style="padding-left: 10px"> DATA ANGGOTA </span>
                            </a>
                            <li class="nav-item">
                              <a href="../simpanan/data_simpanan.php" class="nav-link">
                              <span class="title" style="padding-left: 10px"> SIMPANAN </span>
                              </a>
                            </li>
                        <li class="nav-item">
                          <a href="../pinjaman/data_pinjaman.php" class="nav-link">
                            <span class="title" style="padding-left: 10px"> PINJAMAN </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="../angsuran/data_angsuran.php" class="nav-link">
                            <span class="title" style="padding-left: 10px"> ANGSURAN </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="../admin/Logout.php" class="nav-link">
                              <span class="title" style="padding-left: 10px"> LOGOUT </span>
                          </a>
                        </li>
                    </ul>
                </nav>
            </div>
          </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Anggota</h1>
          </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="anggota" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>Pekerjaan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  include "..\..\config\koneksi.php";
                  $sql = "SELECT * FROM anggota";
                  $no = 1;
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($data = $result->fetch_assoc()) {
                      ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data["nama_anggota"]; ?></td>
                    <td><?php echo $data["tempat_lahir"]; ?></td>
                    <td><?php echo $data["tgl_lahir"]; ?></td>
                    <td><?php echo $data["jk"]; ?></td>
                    <td><?php echo $data["alamat"]; ?></td>
                    <td><?php echo $data["no_telp"]; ?></td>
                    <td><?php echo $data["pekerjaan"]; ?></td>
                    <td>
                    <div class="btn-group btn-group-sm">
                      <a href="edit_anggota.php?<?php echo $data["id"]; ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
                      <a onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')" href="hapus_anggota.php?ksp<?php echo $data=["id"]; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                    </td>
                  </tr>
                  </tbody>
                  <div class="card-header clearfix">
                    <a href="tambah_anggota.php?ksp<?php echo $row=["id"]; ?>">
                      <button type="submit" class="btn btn-outline-primary float-right"><i class="fas fa-plus"></i> Tambah</button>
                    </a>
                  </div>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

      <?php
        }
     
                  } else {
                    echo "0 results";
                  }
                  $conn->close();
                  ?>
</div>                  
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
