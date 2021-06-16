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
					<!-- mt-3 artinya margin top 3 -->
					<div class="row">

					<div class="col-md-12 p-2">
							<div class="card">
								<div class="card-header font-weight-bold">
									<div class="row">
										<div class="col-md-6">
											List Pengajuan Kenaikan Jabatan
										</div>
										<div class="col-md-6">
											<div class="float-right">												
												<a href="<?php echo base_url('user/jabatan/formpkj/') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus "></i>
													Tambah Pengajuan
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="card-body">
								<?= $this->session->flashdata('message'); ?>
									<div class="table-responsive">
										<table class="table table-bordered table-striped table-light" id="dataTable">
											<thead>
												<tr>
													<th scope="col">No</th>
													<th scope="col">Tanggal</th>
													<th scope="col">Nama</th>
													<th scope="col">NIP</th>
													<th scope="col">Tugas</th>
													<th scope="col">Poin</th>
													<th scope="col">Status</th>
												</tr>
											</thead>
											<tbody>
												<?php if (!empty($datanilai)) : $no = 1;
													foreach ($datanilai as $dn): ?>
													<tr>
														<td><?= $no++; ?></td>
														<td><?= $dn["created_at"]; ?></td>
														<td><?= $dn["nama"]; ?></td>
														<td><?= $dn["nip"]; ?></td>
														<td><?= $dn["tugas"]; ?></td>
														<td><?= $dn["poin"]; ?></td>
														<td><?php if($dn["status"] == 1): echo "Pengajuan Diterima"; else: echo "Pengajuan ditolak"; endif;?></td>              
                                            
                                            <!-- <td><a href="<?= base_url();?>user/pelatihan/detail/<?= $p['nip'];?>"
                                            class="btn btn-primary btn-sm float-right fas fa-question-circle ml-2 mr-2"> Detail</a></td>
                                            <td><a href="<?=base_url();?>user/pelatihan/hapus/<?=$p['nip'];?>"
                                            class="btn btn-danger btn-sm float-right fas fa-trash-alt ml-2 mr-2"
                                            onclick="return confirm('Yakin data ini akan di hapus?');"> Hapus</a></td>
                                            <td><a href="<?= base_url();?>user/pelatihan/edit/<?= $p['nip'];?>"
                                            class="btn btn-secondary btn-sm float-right fas fa-edit ml-2 mr-2"> Edit</a> -->
                                            </tr>
                                            <?php endforeach; ?>
                                        
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
										<div class="col-md-6">
											List Pengajuan Kenaikan Jabatan
										</div>
										<div class="col-md-6">
										</div>
									</div>
								</div>

								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-striped table-light" id="dataTable">
											<thead>
												<tr>
													<th scope="col">No</th>
													<th scope="col">Tanggal</th>
													<th scope="col">Nama</th>
													<th scope="col">NIP</th>
													<th scope="col">Tugas</th>
													<th scope="col">Poin</th>
													<th scope="col">Bukti</th>
													<th scope="col">Status</th>
												</tr>
											</thead>
											<tbody>
											<?php 
												$no=1;
												foreach($datanilaii as $dn): if($dn["status"] == 0):
                                            ?>
														<td><?= $no; ?></td>
														<td><?= $dn["created_at"]; ?></td>
														<td><?= $dn["nama"]; ?></td>
														<td><?= $dn["nip"]; ?></td>
														<td><?= $dn["tugas"]; ?></td>
														<td><?= $dn["poin"]; ?></td>
														<td>
															<a class="btn btn-dark" href="../upload/jabatan/<?= $dn["bukti"]; ?> ">
																<i class='fa fa-file-pdf'> </i><?= $dn["bukti"]; ?>
															</a>															
															<td><?php if($dn["status"] == 0): echo "Diajukan"; endif;?></td> 
												<?php endif; endforeach;?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							<?php  ?>
							</div>
						</div>
					</div>
					</div>
				</div>
				<!-- Footer -->
				<?php $this->load->view("admin/_partials/footer") ?>
				<!-- End of Footer -->
			</div>
		</div>

		<!-- Scroll to Top Button-->
		<?php $this->load->view("user/_partials2/scrolltop") ?>

		<!-- Logout Modal-->
		<?php $this->load->view("user/_partials2/modal") ?>

		<!-- Bootstrap core JavaScript-->
		<?php $this->load->view("user/_partials2/js") ?>
</body>

</html>