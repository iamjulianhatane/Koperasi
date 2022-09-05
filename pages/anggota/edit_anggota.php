<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DANESHA | Edit Anggota</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css"> 
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
                          <a href="../angsuran/angsuran.php" class="nav-link">
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
        </aside>>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Anggota</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="card">
                                <div class="card-tools">
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control"  value="<?php echo $nama_anggota; ?>" >
                                </div>
                                <div class="form-group">
                                    <label>Tempat lahir </label>
                                    <input type="text" class="form-control" value="<?php echo $tempat_lahir; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" value="<?php echo $tgl_lahir; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control custom-select" value="<?php echo $jk; ?>">
                                        <option selected disabled>Pilih salah satu</option>
                                        <option><?php echo $data["jk"]; ?>Laki-Laki</option>
                                        <option><?php echo $data["jk"]; ?>>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" value="<?php echo $alamat; ?>">
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <input type="number" class="form-control" value="<?php echo $no_telp; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input type="text" class="form-control" value="<?php echo $pekerjaan; ?>">
                                </div>     
                                <div class="card-footer">
                                    <div class="col-12">
                                        <a href="data_anggota.php" class="btn btn-secondary float-right text-light mx-1">Kembali</a>
                                        <a onclick="return confirm('Yakin untuk mengubah data ini?')"  href="edit_anggota_proses.php" class="btn btn-success float-right text-light mx-1">Simpan</a>
                                    </div>                                            
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>


