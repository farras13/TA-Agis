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
								<div class="card-header">
									<strong>Form Upload Berkas</strong>
								</div>
								<div class="cara body p-3">
									<?php if (validation_errors()) : ?>
										<div class="alert alert-danger" role="alert">
											<?= validation_errors(); ?>
										</div>
									<?php endif ?>
									<?php $id = $this->uri->segment(4); ?>
									<form action="<?php echo base_url('user/jabatan/uploadBerkas/').$id ?>" method="post" style="width:1000px" enctype="multipart/form-data">


										<div class="form-group">
											<label for="file_1">Upload PDF 1</label>
											<input class="form-control-file" type="file" name="file_1" accept="application/pdf" />
											<div class="invalid-feedback">
												<?php echo form_error('file_1') ?>
											</div>
										</div>
										<div class="form-group">
											<label for="file_2">Upload PDF 2</label>
											<input class="form-control-file" type="file" name="file_2" accept="application/pdf" />
											<div class="invalid-feedback">
												<?php echo form_error('file_2') ?>
											</div>
										</div>
										<button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
									</form>
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
