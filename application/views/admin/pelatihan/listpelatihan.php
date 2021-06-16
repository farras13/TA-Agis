<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head") ?>
</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<?php $this->load->view("admin/_partials/sidebar") ?>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<?php $this->load->view("admin/_partials/topbar") ?>
				<!-- End of Topbar -->
				<div class="container">
					<!-- mt-3 artinya margin top 3 -->
					<div class="row">
						<div class="col-md-12 p-2">
							<div class="row">
								<div class="col-md-12">
									<form action="" method="post">
									</form>
								</div>
							</div>
							<div class="card">
								<div class="card-header font-weight-bold">
									<div class="row">
										<div class="col-md-6">
											Sistem Database Online Balittas Bidang Kepegawaian Belum di Proses
										</div>
										<div class="col-md-6">
										</div>
									</div>
								</div>

								<!-- alert -->
								<?php if (empty($pelatihan)) : ?>
									<div class="alert alert-danger" role="alert">
										Data Pelatihan tidak ditemukan!
									</div>
								<?php endif; ?>
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


													<!-- <th scope="col">Foto</th> -->
													<th scope="col">Detail</th>
													<th scope="col">Terima</th>
													<th scope="col">Tolak</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$no = 1; $x=0;
												foreach ($pelatihan as $pelatihan) {
													if ($pelatihan["status"] == 0) { ?>
														<tr>
															<td><?= $no++; ?></td>
															<td><?= $pelatihan["nama"]; ?></td>
															<td><?= $pelatihan["nip"]; ?></td>
															<td><?= $pelatihan["nama_pelatihan"]; ?></td>
															<td><?= $pelatihan["tgl_pelatihan"]; ?></td>
															<td><?= $pelatihan["deskripsi"]; ?></td>

															<td><a href="<?= base_url(); ?>admin/pelatihan/detail/<?= $pelatihan['id_pelatihan']; ?>" class="btn btn-primary btn-sm float-right fas fa-question-circle ml-2 mr-2"> Detail</a></td>
															<td><a href="<?= base_url(); ?>admin/pelatihan/terima/<?= $pelatihan['id_pelatihan']; ?>" class="btn btn-success btn-sm float-right fas fa-accept-alt ml-2 mr-2" onclick="return confirm('Yakin data ini akan di terima?');"> Terima</a></td>
															<td><a href="<?= base_url(); ?>admin/pelatihan/tolak/<?= $pelatihan['id_pelatihan']; ?>" class="btn btn-secondary btn-sm float-right fas fa-edit ml-2 mr-2" onclick="return confirm('Yakin data ini akan di tolak?');"> Tolak</a>

														</tr>
												<?php $x++; }
												} ?>
											</tbody>
										</table>
									</div>
								</div><br>

							</div>
							<div class="card mt-4">
								<div class="card-header font-weight-bold">
									<div class="row">
										<div class="col-md-6">
											Sistem Database Online Balittas Bidang Kepegawaian
										</div>
										<div class="col-md-6">
											<div class="float-right">
												<a href="<?php echo base_url('admin/pelatihan/laporanpelatihan_pdf') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-file-pdf "></i>
													Laporan PDF</a>
											</div>
										</div>
									</div>
								</div>

								<!-- alert -->
								<?php if (empty($pelatihan)) : ?>
									<div class="alert alert-danger" role="alert">
										Data Pelatihan tidak ditemukan!
									</div>
								<?php endif; ?>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-striped table-light" id="dataTableJabatan">
											<thead>
												<tr>
													<th scope="col">No</th>
													<th scope="col">Nama</th>
													<th scope="col">NIP</th>
													<th scope="col">Nama Pelatihan</th>
													<th scope="col">Tanggal Pelatihan</th>
													<th scope="col">Deskripsi</th>


													<!-- <th scope="col">Foto</th> -->
													<th scope="col">Detail</th>
													<th scope="col">Hapus</th>
													<th scope="col">Edit</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$no = 1;
												foreach ($pelatihann as $pelatihann) {
													if ($pelatihann["status"] != 0) { ?>
														<tr>
															<td><?= $no++; ?></td>
															<td><?= $pelatihann["nama"]; ?></td>
															<td><?= $pelatihann["nip"]; ?></td>
															<td><?= $pelatihann["nama_pelatihan"]; ?></td>
															<td><?= $pelatihann["tgl_pelatihan"]; ?></td>
															<td><?= $pelatihann["deskripsi"]; ?></td>

															<td><a href="<?= base_url(); ?>admin/pelatihan/detail/<?= $pelatihann['id_pelatihan']; ?>" class="btn btn-primary btn-sm float-right fas fa-question-circle ml-2 mr-2"> Detail</a></td>
															<td><a href="<?= base_url(); ?>admin/pelatihan/hapus/<?= $pelatihann['id_pelatihan']; ?>" class="btn btn-danger btn-sm float-right fas fa-trash-alt ml-2 mr-2" onclick="return confirm('Yakin data ini akan di hapus?');"> Hapus</a></td>
															<td><a href="<?= base_url(); ?>admin/pelatihan/edit/<?= $pelatihann['id_pelatihan']; ?>" class="btn btn-secondary btn-sm float-right fas fa-edit ml-2 mr-2"> Edit</a>
														</tr>
												<?php }
												} ?>
											</tbody>
										</table>
									</div>
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
	<?php $this->load->view("admin/_partials/scrolltop") ?>

	<!-- Logout Modal-->
	<?php $this->load->view("admin/_partials/modal") ?>

	<!-- Bootstrap core JavaScript-->
	<?php $this->load->view("admin/_partials/js") ?>
	<script>
		<?php if($x != 0): ?>
			swal("Pengajuan List", "Masih Ada data yang belum di proses, Mohon segera di proses", "warning");
		<?php endif; ?>
	</script>
</body>

</html>
