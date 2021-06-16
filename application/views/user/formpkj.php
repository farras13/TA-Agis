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

            <div class="container">
                <!-- <div class="row mt-3">
                    <div class="col-md-12 p-3">
                        <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari data pelatihan..." name="keyword">
                        <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                        </form>
                    </div>
                </div> -->

                <!-- mt-3 artinya margin top 3 -->
                <div class="row">
                    <div class="col-md-12 p-2">
                            <div class="card">
                                <div class="card-header">
                                <strong>Form Tambah Data Nilai</strong>
                                </div>
                                <div class="cara body p-3">
                                    <?php if (validation_errors()):?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= validation_errors();?>
                                    </div>
                                    <?php endif ?>

                                    <form action="<?php echo base_url('user/jabatan/tambahpkj')?>" method="post" style="width:1000px" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="nama">NIP</label>
                                            <input type="text" class="form-control" id="nip" name="nip" value="<?= $log['nip'] ?>" readonly>
                                        </div>
                                        <form action="" method="post">
                                        <div class="form-group">
                                            <label for="nama_pelatihan">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $log['nama'] ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_pelatihan">Tugas</label>
                                            <input type="text" class="form-control" id="tugas" name="tugas">
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi">Poin</label>
                                            <input type="number" class="form-control" id="poin" name="poin">
                                        </div>
                                        <div class="form-group">
                                            <label for="berkas">Bukti (*pdf, *jpg, png)</label>
                                            <input class="form-control-file" type="file" name="berkas" id="berkas" accept="application/pdf, image/*"/>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('berkas') ?>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" name="submit" class="btn btn-primary float-right">Ajukan</button>
                                    </form>
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


