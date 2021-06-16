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
                            Detail Data Pelatihan
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <label for=""><b> NIP : </b></label>
                                <?= $pelatihan['nip']; ?>
                            </p>
                            <p class="card-text">
                                <label for=""><b> Nama Pegawai : </b></label>
                                <?= $pelatihan['nama']; ?>
                            </p>
                            <p class="card-text">
                                <label for=""><b> Nama Pelatihan : </b></label>
                                <?= $pelatihan['nama_pelatihan']; ?>
                            </p>    
                            <p class="card-text">
                                <label for=""><b> Tanggal Pelatihan : </b></label>
                                <?= $pelatihan['tgl_pelatihan']; ?>
                            </p>
                            <p class="card-text">
                                <label for=""><b> Deskripsi : </b></label>
                                <?= $pelatihan['deskripsi']; ?>
                            </p>
                            <p class="card-text">
                                <label for=""><b> Sertifikat : </b></label><br>
                                <img style="width: 50%;" src="<?php echo base_url('upload/pelatihan/'.$pelatihan['sertifikat']) ?>"/>
                            </p>
                            <a href="<?= base_url();?>admin/pelatihan/" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <!-- Footer -->
        <?php $this->load->view("admin/_partials/footer.php") ?>
        <!-- End of Footer -->
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <?php $this->load->view("user/_partials2/scrolltop.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("user/_partials2/modal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("user/_partials2/js.php") ?>
</body>
</html>