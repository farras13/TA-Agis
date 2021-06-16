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
                                    Form Edit Data Jabatan Pegawai
                                </div>
                                <div class="card-body">

                                    <form action="" method="post" style="width:1000px" enctype="multipart/form-data">
                                        <input type="hidden" name="id_riwayat_jabatan" value="<?= $riwayat_jabatan['id_riwayat_jabatan'];?>">
                                        <div class="form-group">
                                        <label for="nip">NIP</label>
                                        <input type="text" class="form-control" id="nip" name="nip" value="<?= $riwayat_jabatan['nip'] ;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $riwayat_jabatan['nama'] ;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan</label>
                                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $riwayat_jabatan['jabatan'] ;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="tmt">TMT</label>
                                        <input type="date" class="form-control" id="tmt" name="tmt" value="<?= $riwayat_jabatan['tmt'] ; ?>">
                                    </div>                                   
                                    <div class="form-group">
                                        <label for="angka_kredit">Angka Kredit</label>
                                        <input type="text" class="form-control" id="angka_kredit" name="angka_kredit" value="<?= $riwayat_jabatan['angka_kredit'] ; ?>">
                                    </div>
									<div class="form-group">
                                        <label for="angka_kredit">Kredit Acuan</label>
										<select name="acuan" id="acuan" class="form-control" >
											<?php foreach ($acuan as $k): ?>
												<option value="<?= $k->kredit ?>"> <?=  $k->golongan . ' | ' .$k->kredit ?> <?= $riwayat_jabatan['acuan'] ; ?> </option>
											<?php endforeach; ?>
										</select >
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

