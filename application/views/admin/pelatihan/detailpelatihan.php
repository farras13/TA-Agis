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
					<div class="row mt-3">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="row">
										<div class="col-md-6">
											<p>Detail Data Pelatihan</p>
										</div>

										<div class="col-md-6">
											<div class="float-right">
												<a href="<?php echo base_url('admin/pelatihan/laporanpelatihanD_pdf/').$pelatihan['id_pelatihan']  ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-file-pdf "></i>
													Laporan PDF</a>
											</div>
										</div>
									</div>


								</div>
								<div class="card-body">
									<p class="card-text">
										<label for=""><b> NIP : </b></label>
										<?= $pelatihan['nip']; ?>
									</p>
									<p class="card-text">
										<label for=""><b> Nama Pegawai : </b></label>
										<?= $pelatihan['nama']; ?>
									</p>
									<p class="card-text">
										<label for=""><b> Nama Pelatihan : </b></label>
										<?= $pelatihan['nama_pelatihan']; ?>
									</p>
									<p class="card-text">
										<label for=""><b> Tanggal Pelatihan : </b></label>
										<?= $pelatihan['tgl_pelatihan']; ?>
									</p>
									<p class="card-text">
										<label for=""><b> Deskripsi : </b></label>
										<?= $pelatihan['deskripsi']; ?>
									</p>
									<p class="card-text">
										<label for=""><b> Sertifikat : </b></label><br>
										<img style="width: 50%;" src="<?php echo base_url('upload/pelatihan/' . $pelatihan['sertifikat']) ?>" />
									</p>
									<a href="<?= base_url(); ?>admin/pelatihan/" class="btn btn-primary float-right">Kembali</a>
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
