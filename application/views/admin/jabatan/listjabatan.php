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
							<div class="row">
								<div class="col-md-12">
								</div>
							</div>
							<div class="card">
								<div class="card-header font-weight-bold">
									<div class="row">
										<div class="col-md-6">
											List Jabatan
										</div>
										<div class="col-md-6">
											<div class="float-right">
												<a href="<?php echo base_url('admin/jabatan/laporanjabatan_pdf') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-file-pdf "></i>
													Laporan PDF
												</a>
											</div>
										</div>
									</div>
								</div>

								<!-- alert -->
								<?php if (empty($riwayat_jabatan)) : ?>
									<div class="alert alert-danger" role="alert">
										Data Pegawai tidak ditemukan!
									</div>
								<?php endif; ?>

								<div class="card-body">
								<?= $this->session->flashdata('message'); ?>
									<div class="table-responsive">
										<table class="table table-bordered table-striped table-light" id="dataTableJabatan">
											<thead>
												<tr>
													<th scope="col">No</th>
													<th scope="col">Nama</th>
													<th scope="col">NIP</th>
													<th scope="col">Jabatan</th>
													<th scope="col">TMT</th>
													<th scope="col">Angka Kredit</th>
													<th scope="col">Angka Kredit Acuan</th>
													<th scope="col">Berkas</th>

													<!-- <th scope="col">Foto</th> -->
													<th scope="col">Detail</th>
													<th scope="col">Hapus</th>
													<th scope="col">Edit</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$no = 1;
												foreach ($riwayat_jabatan as $rj) { ?>
													<tr>
														<td><?= $no++; ?></td>
														<td><?= $rj["nama"]; ?></td>
														<td><?= $rj["nip"]; ?></td>
														<td><?= $rj["jabatan"]; ?></td>
														<td><?= $rj["tmt"]; ?></td>
														<td><?= $rj["angka_kredit"]; ?></td>
														<td><?= $rj["angka_kredit_acuan"]; ?></td>
														<td><?php if ($rj["bukti"] == null && $rj["buktiDua"] == null) : ?>
																User Belum Upload
															<?php else :
																echo " <a class='btn btn-dark' target='_BLANK' href='../upload/pdf/" .
																	$rj['bukti'] . "'><i class='fa fa-file-pdf'> " . $rj['bukti'] . "</i></a>
																			<br><br>
																			<a class='btn btn-dark' href='../upload/pdf/" . $rj['buktiDua'] . "'>
																			<i class='fa fa-file-pdf'> Bukti Dua</i></a>";
															endif;  ?>
														</td>
														<td><a href="<?= base_url(); ?>admin/jabatan/detail/<?= $rj['id_riwayat_jabatan']; ?>" class="btn btn-primary btn-sm float-right fas fa-question-circle ml-2 mr-2"> Detail</a></td>
														<td><a href="<?= base_url(); ?>admin/jabatan/hapus/<?= $rj['id_riwayat_jabatan']; ?>" class="btn btn-danger btn-sm float-right fas fa-trash-alt ml-2 mr-2" onclick="return confirm('Yakin data ini akan di hapus?');"> Hapus</a></td>
														<td><a href="<?= base_url(); ?>admin/jabatan/edit/<?= $rj['id_riwayat_jabatan']; ?>" class="btn btn-secondary btn-sm float-right fas fa-edit ml-2 mr-2"> Edit</a></td>
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
