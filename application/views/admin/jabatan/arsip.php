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
										<div class="col-md-8">
											Data Arsip
										</div>
										<div class="col-md-8">
											<a href=""></a>
										</div>
									</div>
								</div>

								<!-- alert -->
								<?php if (empty($arsip)) : ?>
									<div class="alert alert-danger" role="alert">
										Arsip tidak ditemukan!
									</div>
								<?php else: ?>

								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-striped table-light" id="dataTableJabatan">
											<thead>
												<tr>
													<th scope="col">No</th>
													<th scope="col">Nama</th>
													
													<th scope="col">Detail</th>
													<th scope="col">Hapus</th>
													<th scope="col">Edit</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$no = 1;
												foreach ($arsip as $rj) { ?>
													<tr>
														<td><?= $no++; ?></td>
														<td><a href=<?= base_url('upload/pdf/').$rj["arsip"];  ?>></a></td>
														
														<td><a href="<?= base_url(); ?>admin/jabatan/detailA/<?= $rj['id_arsip']; ?>" class="btn btn-primary btn-sm float-right fas fa-question-circle ml-2 mr-2"> Detail</a></td>
														<td><a href="<?= base_url(); ?>admin/jabatan/hapusA/<?= $rj['id_arsip']; ?>" class="btn btn-danger btn-sm float-right fas fa-trash-alt ml-2 mr-2" onclick="return confirm('Yakin data ini akan di hapus?');"> Hapus</a></td>
														<td><a href="<?= base_url(); ?>admin/jabatan/editA/<?= $rj['id_arsip']; ?>" class="btn btn-secondary btn-sm float-right fas fa-edit ml-2 mr-2"> Edit</a></td>
													</tr>
												<?php } ?>
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
	<?php $this->load->view("admin/_partials/scrolltop.php") ?>

	<!-- Logout Modal-->
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<!-- Bootstrap core JavaScript-->
	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
