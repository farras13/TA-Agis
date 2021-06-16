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
                            <div class="card-header font-weight-bold">
                                <div class="row">
                                    <div class="col-md-6">
                                        List Pelatihan
                                    </div>
                                    <div class="col-md-6">
                                        <div class="float-right">
                                            <a href="<?php echo base_url('user/pelatihan/laporanpelatihan_pdf') ?>" target="__BLANK"
                                                class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-file-pdf "></i>
                                                Laporan PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- alert -->
                            <?php if (empty($pelatihan)) :?>
                            <div class="alert alert-danger" role="alert">
                                Data Pelatihan tidak ditemukan!
                            </div>
                            <?php else: ?>

                            <div class="card-body">
                            <?= $this->session->flashdata('message'); ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-light" id="dataTable">
                                        <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">NIP</th>
                                            <th scope="col">Nama Pelatihan</th>
                                            <th scope="col">Tanggal Pelatihan</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Status</th>
                                        
                                        
                                            <!-- <th scope="col">Foto</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Hapus</th>
                                            <th scope="col">Edit</th> -->
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no=1;
											foreach($pelatihan as $p): if($p["status"] != 0):
                                            ?> 
                                            <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $p["nama"];?></td>
                                            <td><?= $p["nip"];?></td>
                                            <td><?= $p["nama_pelatihan"];?></td>
                                            <td><?= $p["tgl_pelatihan"];?></td>
                                            <td><?= $p["deskripsi"];?></td>              
                                            <td><?php if($p["status"] == 1): echo "Pengajuan Diterima"; else: echo "Pengajuan ditolak"; endif;?></td>              
                                            
                                            <!-- <td><a href="<?= base_url();?>user/pelatihan/detail/<?= $p['nip'];?>"
                                            class="btn btn-primary btn-sm float-right fas fa-question-circle ml-2 mr-2"> Detail</a></td>
                                            <td><a href="<?=base_url();?>user/pelatihan/hapus/<?=$p['nip'];?>"
                                            class="btn btn-danger btn-sm float-right fas fa-trash-alt ml-2 mr-2"
                                            onclick="return confirm('Yakin data ini akan di hapus?');"> Hapus</a></td>
                                            <td><a href="<?= base_url();?>user/pelatihan/edit/<?= $p['nip'];?>"
                                            class="btn btn-secondary btn-sm float-right fas fa-edit ml-2 mr-2"> Edit</a> -->
                                            <?php endif; endforeach; ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							<?php endif; ?>
                        </div>
                    </div>

					<div class="col-md-12 p-2">
                        <div class="card">
                            <div class="card-header font-weight-bold">
                                <div class="row">
                                    <div class="col-md-12">
                                        List Pelatihan Yang Diajukan
                                    </div>  
								</div>
							</div>
                        
                            <!-- alert -->
                            <?php if (empty($pelatihan)) :?>
                            <div class="alert alert-danger" role="alert">
                                Data Pelatihan tidak ditemukan!
                            </div>
                            <?php else: ?>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-light" id="dataTable">
                                        <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">NIP</th>
                                            <th scope="col">Nama Pelatihan</th>
                                            <th scope="col">Tanggal Pelatihan</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Status</th>
                                        
                                        
                                            <!-- <th scope="col">Foto</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Hapus</th>
                                            <th scope="col">Edit</th> -->
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
												$no=1;
												foreach($pelatihann as $pn): if($pn["status"] == 0):
                                            ?> 
                                            <tr>
												<td><?= $no++; ?></td>
												<td><?= $pn["nama"];?></td>
												<td><?= $pn["nip"];?></td>
												<td><?= $pn["nama_pelatihan"];?></td>
												<td><?= $pn["tgl_pelatihan"];?></td>
												<td><?= $pn["deskripsi"];?></td>              
												<td><?php if($pn["status"] == 0): echo "Diajukan"; endif;?></td> 
												<?php endif; endforeach;  ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							<?php endif; ?>
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


