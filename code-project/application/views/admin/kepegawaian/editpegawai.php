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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                Form Edit Data Pegawai
                </div>
                <div class="card-body">

                <form action="" method="post">
                <input type="hidden" name="id" value="<?= $kepegawaian['Id'];?>">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $kepegawaian['Nama_pegawai'] ;?>">
                 </div>
                <div class="form-group">
                    <label for="nim">NIP</label>
                    <input type="number" class="form-control" id="nip" name="nip" value="<?= $kepegawaian['NIP'] ;?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $kepegawaian['Alamat_pegawai'] ;?>">
                </div>
                <div class="form-group">
                    <label for="nama">Golongan</label>
                    <input type="text" class="form-control" id="golongan" name="golongan" value="<?= $kepegawaian['Golongan'] ;?>">
                </div>
                <div class="form-group">
                    <label for="nama">Status</label>
                    <input type="text" class="form-control" id="status" name="status" value="<?= $kepegawaian['Status_pegawai'] ;?>">
                </div>
                <div class="form-group">
                    <label for="tempat">Tempat Lahir</label>
                    <input type="text" class="form-control" id="Tempat_lahir" name="tempat" value="<?= $kepegawaian['Tempat_lahir'] ;?>">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="Tanggal_lahir" name="tanggal" value="<?= $kepegawaian['Tanggal_lahir'] ;?>">
                </div>
                <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
            </form>
        </div>
    </div>
</div>
</div>

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

