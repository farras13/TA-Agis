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
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Pegawai
            </div>
            <div class="card-body">
                <h5 class="card-title"><strong><?= $kepegawaian['Nama_pegawai']; ?></strong></h5>
                <p class="card-text">
                    <label for=""><b> NIP : </b></label>
                    <?= $kepegawaian['NIP']; ?></p>
                <p class="card-text">
                    <label for=""><b> Alamat Pegawai : </b></label>
                    <?= $kepegawaian['Alamat_pegawai']; ?></p>    
                <p class="card-text">
                    <label for=""><b> Tempat Lahir : </b></label>
                    <?= $kepegawaian['Tempat_lahir']; ?></p>
                <p class="card-text">
                    <label for=""><b> Tanggal Lahir : </b></label>
                    <?= $kepegawaian['Tanggal_lahir']; ?></p>
                <p class="card-text">
                    <label for=""><b> Golongan : </b></label>
                    <?= $kepegawaian['Golongan']; ?></p>
                <p class="card-text">
                    <label for=""><b> Status Pegawai : </b></label>
                    <?= $kepegawaian['Status_pegawai']; ?></p>
                <a href="<?= base_url();?>admin/pegawai" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div>