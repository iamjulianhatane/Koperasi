<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DANESHA | Tambah Angsuran</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
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
                            <a href="../../index.php" class="nav-link">
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
                          <a href="../pinjaman/data_pinjaman.php" class="nav-link">
                            <span class="title" style="padding-left: 10px"> PINJAMAN </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="data_angsuran.php" class="nav-link active">
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
                            <h1>Pembayaran Angsuran</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                                <li class="breadcrumb-item active">Angsuran</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Anggota</label>
                                    <input type="text" class="form-control" value="<?php echo $nama_anggota; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Angsuran Ke</label>
                                    <input type="text" class="form-control" value="<?php echo $angsuran_ke; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" class="form-control" value="<?php echo $keterangan; ?>">
                                </div>
                                <div class="card-footer">
                                    <div class="col-12">
                                      <a href="data_angsuran.php" class="btn btn-secondary float-right text-light mx-1">Kembali</a>
                                      <a onclick="return confirm('Tambahkan data?')"  href="tambah_angsuran_proses.php" class="btn btn-success float-right text-light mx-1">Simpan</a>
                                    </div>
                                </div>    
                              </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>]
    </div>

    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>