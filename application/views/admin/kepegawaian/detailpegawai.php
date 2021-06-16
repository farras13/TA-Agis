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
                                <div class="card-header font-weight-bold">
                                    <div class="row">
                                        <div class="col-md-6">
                                            Detail Pegawai
                                        </div>
                                        <div class="col-md-6">
                                            <div class="float-right">
                                            <a href="<?php echo base_url('admin/pegawai/laporan_detail_pegawai_pdf/'.$pegawai['nip']) ?>"
                                                class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-file-pdf "></i>
                                                Laporan PDF
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><strong><?= $pegawai['nama']; ?></strong></h5>
                                    <p class="card-text">
                                        <label for=""><b> NIP : </b></label>
                                        <span id="nip"><?= $pegawai['nip']; ?></span>
                                    </p>
                                    <p class="card-text">
                                        <label for=""><b> Divisi : </b></label>
                                        <?= $pegawai['divisi']; ?>
                                    </p>    
                                    <p class="card-text">
                                        <label for=""><b> Jabatan : </b></label>
                                        <span id="jabatan"><?= $pegawai['jabatan']; ?></span>
                                    </p>
                                    <p class="card-text">
                                        <label for=""><b> Pendidikan : </b></label>
                                        <?= $pegawai['pendidikan']; ?>
                                    </p>
                                    <p class="card-text">
                                        <label for=""><b> Golongan : </b></label>
                                        <?= $pegawai['golongan']; ?>
                                    </p>
                                    <p class="card-text">
                                        <label for=""><b> Email : </b></label>
                                        <?= $pegawai['email']; ?>
                                    </p>
                                    <!-- <a href="<?= base_url();?>admin/pegawai" class="btn btn-primary">Kembali</a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header font-weight-bold">
                                    Riwayat Pelatihan
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTablePelatihan" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Pelatihan</th>
                                                    <th>Tanggal Pelatihan</th>
                                                    <th>Deskripsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no=1;
                                                foreach ($listPelatihan as $pelatihan){?>
                                                    <tr>
                                                        <td><?= $no ?></td>
                                                        <td><?= $pelatihan["nama_pelatihan"] ?></td>
                                                        <td><?= $pelatihan["tgl_pelatihan"] ?></td>
                                                        <td><?= $pelatihan["deskripsi"] ?></td>
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
            <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
    </div>
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