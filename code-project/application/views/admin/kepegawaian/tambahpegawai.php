<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_partials/topbar.php") ?>
        <!-- End of Topbar -->

<div class="container">
    <div class="row-mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <strong>Form Tambah Data Pegawai</strong>
                </div>
                <div class="cara body p-3">
                <?php if (validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
                </div>
                <?php endif ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="Nama_pegawai" name="nama">
                    </div>
                    <form action="" method="post">
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="number" class="form-control" id="NIP" name="nip">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="Alamat_pegawai" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Golongan</label>
                        <input type="text" class="form-control" id="Golongan" name="golongan">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" id="Status_pegawai" name="status">
                    </div>
                    <div class="form-group">
                        <label for="tempat">Tempat Lahir</label>
                        <input type="text" class="form-control" id="Tempat_lahir" name="tempat">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="Tanggal_lahir" name="tanggal">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
        <!-- /.container-fluid -->

</div>
      <!-- End of Main Content -->

<!-- Footer -->
<?php $this->load->view("admin/_partials/footer.php") ?>
<!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("admin/_partials/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partials/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
