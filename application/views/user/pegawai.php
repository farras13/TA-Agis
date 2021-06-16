<html lang="en">

<head>
  <?php $this->load->view("user/_partials2/head.php") ?>
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view("user/_partials2/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("user/_partials2/topbar.php") ?>
        <!-- End of Topbar -->

            <!-- <div class="row mt-3">
                <div class="col-md-12 p-3">
                    <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari data pegawai..." name="keyword">
                    <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
                    </form>
                </div>
            </div> -->
            <div class="container">
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header font-weight-bold">
                                    <div class="row">
                                        <div class="col-md-6">
                                            Detail Pegawai
                                        </div>
                                        <div class="col-md-6">
                                            <div class="float-right">
                                            <a href="<?php echo base_url('user/pegawai/laporan_detail_pegawai_pdf/'.$pegawai['nip']) ?>" target="__BLANK"
                                                class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-file-pdf "></i>
                                                Laporan PDF
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><strong><?= $pegawai['nama']; ?></strong></h5>
                                    <p class="card-text">
                                        <label for=""><b> NIP : </b></label>
                                        <span id="nip"><?= $pegawai['nip']; ?></span>
                                    </p>
                                    <p class="card-text">
                                        <label for=""><b> Divisi : </b></label>
                                        <?= $pegawai['divisi']; ?>
                                    </p>    
                                    <p class="card-text">
                                        <label for=""><b> Jabatan : </b></label>
                                        <span id="jabatan"><?= $pegawai['jabatan']; ?></span>
                                    </p>
                                    <p class="card-text">
                                        <label for=""><b> Pendidikan : </b></label>
                                        <?= $pegawai['pendidikan']; ?>
                                    </p>
                                    <p class="card-text">
                                        <label for=""><b> Golongan : </b></label>
                                        <?= $pegawai['golongan']; ?>
                                    </p>
                                    <p class="card-text">
                                        <label for=""><b> Email : </b></label>
                                        <?= $pegawai['email']; ?>
                                    </p>
                                    <!-- <a href="<?= base_url();?>admin/pegawai" class="btn btn-primary">Kembali</a> -->
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
