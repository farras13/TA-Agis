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
					<div class="row">
						<div class="col-md-12 p-2">
							<div class="card">
								<div class="card-header">
									<strong>Form Tambah Data Jabatan Pegawai</strong>
								</div>
								<div class="card-body">
									<?php if (validation_errors()) : ?>
										<div class="alert alert-danger" role="alert">
											<?= validation_errors(); ?>
										</div>
									<?php endif ?>
									<form action="<?php echo base_url('admin/jabatan/tambah') ?>" method="post" style="width:1000px" enctype="multipart/form-data">
										<div class="form-group">
											<label for="nip">NIP</label>
											<select name="nip" id="nip" class="form-control">
												<option value="" selected disabled>-- pilih nip pegawai --</option>
												<?php foreach ($pegawai as $p) :  ?>
													<option value="<?= $p['nip'] ?>"><?= $p['nip'] ?> || <?= $p['nama'] ?></option>
												<?php endforeach; ?>
											</select>
										</div>
										<div class="form-group">
											<label for="nama">Nama</label>
											<input type="text" class="form-control" id="nama" name="nama">
										</div>
										<div class="form-group">
											<label for="jabatan">Jabatan</label>
											<input type="text" class="form-control" id="jabatan" name="jabatan">
										</div>
										<div class="form-group">
											<label for="tmt">TMT</label>
											<input type="date" class="form-control" id="tmt" name="tmt">
										</div>
										<div class="form-group">
											<label for="angka_kredit">Angka Kredit</label>
											<input type="text" class="form-control" id="angka_kredit" name="angka_kredit">
										</div>
										<div class="form-group">
											<label for="angka_kredit">Kredit Acuan</label>
											<select name="acuan" id="acuan" class="form-control">
												<?php foreach ($acuan as $k) : ?>
													<option value="<?= $k->kredit ?>"> <?= $k->golongan . ' | ' . $k->kredit ?> </option>
												<?php endforeach; ?>
											</select>
										</div>

										<button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

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
	<script>
		$(document).ready(function() {

			$('#nip').change(function() {
				var username = $(this).val();
				$.ajax({
					url: '<?= base_url() ?>admin/jabatan/userDetails',
					method: 'post',
					data: {
						username: username
					},
					dataType: 'json',
					success: function(response) {
					
						var input = document.getElementById('nama');
						input.value = response.nama;
					
					}
				});
			});
		});
	</script>
</body>

</html>
