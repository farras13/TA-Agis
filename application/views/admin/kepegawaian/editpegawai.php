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
                            Form Edit Data Pegawai
                            </div>
                            <div class="card-body">

                                <form action="" method="post" style="width:1000px" enctype="multipart/form-data">
                                    <input type="hidden" name="nip" value="<?= $pegawai['nip'];?>">
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $pegawai['nama'] ;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="nim">NIP</label>
                                        <input type="number" class="form-control" id="nip" name="nip" value="<?= $pegawai['nip'] ;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Divisi</label>
                                        <input type="text" class="form-control" id="divisi" name="divisi" value="<?= $pegawai['divisi'] ;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Jabatan</label>
                                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $pegawai['jabatan'] ;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="pendidikan">Pendidikan</label>
                                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="<?= $pegawai['pendidikan'] ;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="golongan">Golongan</label>
                                        <input type="text" class="form-control" id="golongan" name="golongan" value="<?= $pegawai['golongan'] ;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Status</label>
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $pegawai['email'] ;?>">
                                    </div>
                                    
                                    <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
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

