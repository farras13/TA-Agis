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
            <!-- mt-3 artinya margin top 3 -->
            <div class="row mt-4">
                <div class="col-md-12 p-2">
                    <div class="card">
                        <div class="card-header font-weight-bold">
                            <div class="row">
                                <div class="col-md-6">
                                    List Pegawai
                                </div>
                                <div class="col-md-6">
                                    <div class="float-right">
                                    <a href="<?php echo base_url('admin/pegawai/laporanpegawai_pdf') ?>"
                                        class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-file-pdf "></i>
                                        Laporan PDF
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- alert -->
                        <?php if (empty($pegawai)) :?>
                        <div class="alert alert-danger" role="alert">
                            Data Pegawai tidak ditemukan!
                        </div>
                        <?php endif; ?>
                        <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-light" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NIP</th>
                                        <th scope="col">Nama Pegawai</th>
                                        <th scope="col">Divisi</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Pendidikan</th>
                                        <th scope="col">Golongan</th>
                                        <th scope="col">Email</th>
                                    
                                        <!-- <th scope="col">Foto</th> -->
                                        <th scope="col">Detail</th>
                                        <th scope="col">Hapus</th>
                                        <th scope="col">Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach ($pegawai as $pw){?> 
                                        <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $pw["nip"];?></td>
                                        <td><?= $pw["nama"];?></td>
                                        <td><?= $pw["divisi"];?></td>
                                        <td><?= $pw["jabatan"];?></td>
                                        <td><?= $pw["pendidikan"];?></td>
                                        <td><?= $pw["golongan"];?></td>         
                                        <td><?= $pw["email"];?></td>
                                        <td><a href="<?= base_url();?>admin/pegawai/detail/<?= $pw['nip'];?>"
                                        class="btn btn-primary btn-sm float-right fas fa-question-circle ml-2 mr-2"> Detail</a></td>
                                        <td><a href="<?=base_url();?>admin/pegawai/hapus/<?=$pw['nip'];?>"
                                        class="btn btn-danger btn-sm float-right fas fa-trash-alt ml-2 mr-2"
                                        onclick="return confirm('Yakin data ini akan di hapus?');"> Hapus</a></td>
                                        <td><a href="<?= base_url();?>admin/pegawai/edit/<?= $pw['nip'];?>"
                                        class="btn btn-secondary btn-sm float-right fas fa-edit ml-2 mr-2"> Edit</a>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            
        </div>
        </div>
        <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
        
    </div>

  <!-- Scroll to Top Button-->
  <?php $this->load->view("admin/_partials/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partials/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>
</html>


