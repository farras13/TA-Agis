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
											List Pegawai
										</div>
										<div class="col-md-6">
											<div class="float-right">
												<?php $log = $this->session->userdata('pegawai'); ?>
												<a href="<?php echo base_url('user/pegawai/laporan_detail_pegawai_pdf/' . $log['nip']) ?>" target="__BLANK" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-file-pdf "></i>
													Laporan PDF
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="card-body">
									<div class="row">
										<?php foreach ($arsip as $ars) : ?>
											<div class="col-md-3">
												<a class="btn btn-dark" href="../upload/arsip/<?= $ars->arsip ?> ">
													<i class='fa fa-file-pdf'> </i> <?= $ars->arsip ?>
												</a>
											</div>
										<?php endforeach; ?>
									</div>
								</div>
							</div>
							<div class="col-md-12 p-2">
								<div class="card">
									<div class="card-header font-weight-bold">
										<div class="row">
											<div class="col-md-6">
												List Pegawai
											</div>
											<div class="col-md-6">
												<div class="float-right">
													<?php $log = $this->session->userdata('pegawai'); ?>
													<a href="<?php echo base_url('user/pegawai/laporan_detail_pegawai_pdf/' . $log['nip']) ?>" target="__BLANK" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-file-pdf "></i>
														Laporan PDF
													</a>
												</div>
											</div>
										</div>
									</div>

									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered table-striped table-light" id="dataTable">
												<thead>
													<tr>
														<th scope="col">No</th>
														<th scope="col">Nama</th>
														<th scope="col">NIP</th>
														<th scope="col">Jabatan</th>
														<th scope="col">TMT</th>
														<th scope="col">Angka Kredit</th>
														<th scope="col">Angka Kredit Acuan</th>

														<!-- <th scope="col">Foto</th> -->
														<!-- <th scope="col">Detail</th>
                                                <th scope="col">Hapus</th> -->
														<th scope="col">Upload PDF</th>
													</tr>
												</thead>
												<tbody>
													<?php if (!empty($rj)) : $no = 1; ?>
														<tr>
															<td><?= $no; ?></td>
															<td><?= $rj["nama"]; ?></td>
															<td><?= $rj["nip"]; ?></td>
															<td><?= $rj["jabatan"]; ?></td>
															<td><?= $rj["tmt"]; ?></td>
															<td><?= $rj["angka_kredit"]; ?></td>
															<td><?= $rj["angka_kredit_acuan"]; ?></td>
															<td><?php if ($rj["bukti"] == null && $rj["buktiDua"] == null) : ?>
																	<a href="javascript:;" data-id="<?php echo $rj['id_riwayat_jabatan'] ?>" data-toggle="modal" data-target="#edit-data">
																		<button data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Ubah</button>
																	</a>
																<?php else :
																	echo " <a class='btn btn-dark' target='_BLANK' href='../upload/pdf/" .
																		$rj['bukti'] . "'><i class='fa fa-file-pdf'> " . $rj['bukti'] . "</i></a>
																			<br><br>
																			<a class='btn btn-dark' href='../upload/pdf/" . $rj['buktiDua'] . "'>
																			<i class='fa fa-file-pdf'> Bukti Dua</i></a>";
																endif;  ?>

															</td>
														</tr>
													<?php endif; ?>
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
		<?php $this->load->view("user/_partials2/scrolltop") ?>
		<!-- Modal Ubah -->
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
						<!-- <h4 class="modal-title">Upload Berkas Data</h4> -->
					</div>
					<form class="form-horizontal" action="<?php echo base_url('user/jabatan/uploadBerkas') ?>" method="post" enctype="multipart/form-data" role="form">
						<div class="modal-body">
							<div class="form-group">
								<label class="col-lg-3 col-sm-2 control-label">id Riwayat</label>
								<div class="col-lg-12">
									<input class="form-control" type="text" name="id" id="id" readonly />
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 col-sm-2 control-label">Berkas 1</label>
								<div class="col-lg-12">
									<input class="form-control" type="file" name="file_1" accept="application/pdf" required />
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 col-sm-2 control-label">Berkas 2</label>
								<div class="col-lg-10">
									<input class="form-control" type="file" name="file_2" accept="application/pdf" />
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
							<button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- END Modal Ubah -->
	<!-- Logout Modal-->
	<?php $this->load->view("user/_partials2/modal") ?>

	<!-- Bootstrap core JavaScript-->
	<?php $this->load->view("user/_partials2/js") ?>
	<script>
		$(document).ready(function() {
			// Untuk sunting
			$('#edit-data').on('show.bs.modal', function(event) {
				var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
				var modal = $(this)

				// Isi nilai pada field
				modal.find('#id').attr("value", div.data('id'));

			});
		});
	</script>
</body>

</html>
