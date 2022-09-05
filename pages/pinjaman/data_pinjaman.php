<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DANESHA | Pinjaman</title>

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
      <img src="../../dist/img/ksp_logo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DANESHA</span>
    </a>
    <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item start">
                          <a href="../anggota/data_anggota.php" class="nav-link">
                                <span class="title" style="padding-left: 10px"> DASHBOARD </span>
                            </a>
                        </li>
                        <li class="nav-item">
                          <a href="../anggota/data_anggota.php" class="nav-link">
                                <span class="title" style="padding-left: 10px"> DATA ANGGOTA </span>
                            </a>
                            <li class="nav-item">
                              <a href="../simpanan/data_simpanan.php" class="nav-link">
                                <span class="title" style="padding-left: 10px"> SIMPANAN </span>
                              </a>
                            </li>
                        <li class="nav-item">
                          <a href="data_pinjaman.php" class="nav-link active">
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
            <h1>Data Pinjaman</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-bordered table-hover">
                <?php 
                  include "..\..\config\koneksi.php";
                  $sql = "SELECT * FROM pinjaman";
                  $no = 1;
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      ?>
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Jumlah</th>
                    <th>Bunga</th>
                    <th>Total Pinjaman</th>
                    <th>Denda</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row["nama_anggota"]; ?></td>
                    <td><?php echo $row["jml_pinjaman"]; ?></td>
                    <td><?php echo $row["bunga"]; ?></td>
                    <td><?php echo $row["total_pinjam"]; ?></td>
                    <td><?php echo $row["denda"]; ?></td>
                    <td><?php echo $row["tgl_bayar"]; ?></td>
                    <td><?php echo $row["ket_pinjam"]; ?></td>
                    <td>
                    <div class="btn-group btn-group-sm">
                      <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                      <a href="edit_anggota.php" class="btn btn-info"><i class="fas fa-pen"></i></a>
                      <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                    </td>
                  </tr>
                  </tfoot>
                    <div class="card-header clearfix">
                      <a href="tambah_pinjaman.php">
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
