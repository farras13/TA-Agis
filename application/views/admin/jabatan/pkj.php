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
					<!-- mt-3 artinya margin top 3 -->
					<div class="row">
						<div class="col-md-12 p-2">
							<div class="card">
								<div class="card-header font-weight-bold">
									<div class="row">
										<div class="col-md-12">
											List Pengajuan Kenaikan Jabatan
										</div>
										<!-- <div class="col-md-6">
											<div class="float-right">
												<a href="<?php echo base_url('user/jabatan/formpkj/') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus "></i>
													Tambah Pengajuan
												</a>
											</div>
										</div> -->
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
												<?php if (!empty($datanilai)) : $no = 1;
													foreach ($datanilai as $dn): if($dn['status'] == 0): ?>
													<tr>
														<td><?= $no++; ?></td>
														<td><?= $dn["created_at"]; ?></td>
														<td><?= $dn["nama"]; ?></td>
														<td><?= $dn["nip"]; ?></td>
														<td><?= $dn["tugas"]; ?></td>
														<td><?= $dn["poin"]; ?></td>
														<td>
															<a class="btn btn-dark" href="../upload/jabatan/<?= $dn["bukti"]; ?> ">
																<i class='fa fa-file-pdf'> </i><?= $dn["bukti"]; ?>
															</a>
														</td>
														<td>
															<a class="btn btn-success" href="<?= base_url('admin/jabatan/aksipkj/1/'). $dn["nip"] ?>">
																<i class='fa fa-check'> </i>
															</a> 			
															<a class="btn btn-danger" href="<?= base_url('admin/jabatan/aksipkj/2/'). $dn["nip"] ?>">
																<i> <b>X</b> </i>
															</a> 													
														</td>
														
													</tr>
												<?php endif; endforeach; endif; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 p-2">
							<div class="card">
								<div class="card-header font-weight-bold">
									<div class="row">
										<div class="col-md-12">
											List Pengajuan Kenaikan Jabatan
										</div>
										<!-- <div class="col-md-6">
											<div class="float-right">
												<a href="<?php echo base_url('user/jabatan/formpkj/') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus "></i>
													Tambah Pengajuan
												</a>
											</div>
										</div> -->
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
												<?php if (!empty($datanilaii)) : $no = 1;
													foreach ($datanilaii as $dn):  if($dn['status'] != 0): ?>
													<tr>
														<td><?= $no++; ?></td>
														<td><?= $dn["created_at"]; ?></td>
														<td><?= $dn["nama"]; ?></td>
														<td><?= $dn["nip"]; ?></td>
														<td><?= $dn["tugas"]; ?></td>
														<td><?= $dn["poin"]; ?></td>
														<td>
															<a class="btn btn-dark" href="../upload/jabatan/<?= $dn["bukti"]; ?> ">
																<i class='fa fa-file-pdf'> </i><?= $dn["bukti"]; ?>
															</a>
														</td>
														<td><?php if($dn["status"] == 0): echo "Diajukan"; elseif($dn["status"] == 1): echo "Diterima"; else: echo "Ditolak"; endif; ?>	</td>														
													</tr>
												<?php endif; endforeach; endif; ?>
											</tbody>
										</table>
									</div>
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
		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<!-- Logout Modal-->
		<?php $this->load->view("admin/_partials/modal.php") ?>

		<!-- Bootstrap core JavaScript-->
		<?php $this->load->view("admin/_partials/js.php") ?>
</body>

</html>
