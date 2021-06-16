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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                            <strong>Form Tambah Data Pegawai</strong>
                            </div>
                            <div class="card-body">
                                <?php if (validation_errors()):?>
                                    <div class="alert alert-danger" role="alert">
                                    <?= validation_errors();?>
                                    </div>
                                
                                <?php endif ?>
                            
                                <form action="<?php echo base_url('admin/pegawai/tambah')?>" method="post" style="width:1000px" enctype="multipart/form-data">
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
                                        <label for="divisi">Divisi</label>
                                        <input type="text" class="form-control" id="divisi" name="divisi">
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan</label>
                                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                                    </div>
                                    <div class="form-group">
                                        <label for="pendidikan">Pendidikan</label>
                                        <input type="text" class="form-control" id="pendidikan" name="pendidikan">
                                    </div>
                                    <div class="form-group">
                                        <label for="golongan">Golongan</label>
                                        <input type="text" class="form-control" id="golongan" name="golongan">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Email</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                    
                                    <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
            <!-- /.container-fluid -->

        <!-- Footer -->
        <?php $this->load->view("admin/_partials/footer.php") ?>
        <!-- End of Footer -->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->


    <!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("admin/_partials/modal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
