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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Detail Data Jabatan Pegawai
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><strong><?= $riwayat_jabatan['nama']; ?></strong></h5>
                                <p class="card-text">
                                    <label for=""><b> NIP : </b></label>
                                    <span id="nip"><?= $riwayat_jabatan['nip']; ?></span>
                                </p>
                                <p class="card-text">
                                    <label for=""><b> Jabatan Baru : </b></label>
                                    <span id="jabatan"><?= $riwayat_jabatan['jabatan']; ?></span>
                                </p>
                                <p class="card-text">
                                    <label for=""><b> TMT : </b></label>
                                    <?= $riwayat_jabatan['tmt']; ?>
                                </p>
                                <p class="card-text">
                                    <label for=""><b> Angka Kredit : </b></label>
                                    <?= $riwayat_jabatan['angka_kredit']; ?>
                                </p>
                                <p class="card-text">
                                    <label for=""><b> Angka Kredit Acuan : </b></label>
                                    <?= $riwayat_jabatan['angka_kredit_acuan']; ?>
                                </p>
                                <a href="<?= base_url();?>admin/jabatan" class="btn btn-primary">Kembali</a>
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
	<script type="text/javascript">
        $('document').ready(function() {
            let jabatan = $('#jabatan').text();
            const spliceJabatan = jabatan.split(" ");
            const nip = $('#nip').text();
            const angkaKredit = <?php echo $angka_kredit['angka_kredit'] ?>;
            const listJabatan = ["Utama", "Madya", "Muda", "Pertama"];
            const kreditJabatan = {Utama: 850, Madya: 400, Muda: 200, Pertama: 100};
            let isJabatanInclude = false;

            console.log("Angka kredit", angkaKredit);
            spliceJabatan.forEach(jab => {
                console.log("jab", jab);
                if (listJabatan.indexOf(jab) == -1 ){
                    console.log("Gk ada");
                } else {
                    console.log("ada");
                    isJabatanInclude = true;
                    jabatan = jab;
                }
            });

        });
    </script>
</body>
</html>
