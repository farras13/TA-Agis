    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="pegawai">
        
        <div class="sidebar-brand-icon">
          <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIDO BALIK</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Sistem Database Online Balittas Bidang Kepegawaian</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Database Pelatihan
      </div>

      <!-- Nav Item - Pages Collapse Menu Data Pegawai -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Data Pegawai</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih Aksi:</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/pegawai')?>">Daftar Pegawai</a>
            <a class="collapse-item" href="<?php echo base_url('admin/pegawai/tambah')?>">Tambah Data Pegawai</a>
          </div>
        </div>
      </li>

       <!-- Nav Item - Pages Collapse Menu Aktivitas Pelatihan-->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree" aria-expanded="true" aria-controls="collapseTree">
          <i class="fas fa-id-card fa-cog"></i>
          <span>Data Pelatihan Pegawai</span>
        </a>
        <div id="collapseTree" class="collapse" aria-labelledby="headingTree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih Aksi:</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/pelatihan')?>">Daftar Pelatihan</a>
            <a class="collapse-item" href="<?php echo base_url('admin/pelatihan/tambah')?>">Tambah Data Pelatihan</a>
          </div>
        </div>
      </li>


      <!-- Nav Item - Utilities Collapse Menu Laporan/Report
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-download"></i>
          <span>Cetak Laporan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('admin/pegawai/laporanpegawai_pdf')?>">Data Pegawai</a>
            <a class="collapse-item" href="<?php echo base_url('admin/pelatihan/laporanpelatihan_pdf')?>">Data Pelatihan</a>
          </div>
        </div>
      </li>-->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Database Fungsional
      </div>

      <!-- Nav Item - Pages Collapse Menu Jabatan-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          <i class="fas fa-stamp"></i>
          <span>Data Jabatan Pegawai</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih Aksi:</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/jabatan')?>">Riwayat Jabatan</a>
            <a class="collapse-item" href="<?php echo base_url('admin/jabatan/tambah')?>">Tambah Data Jabatan</a>
            <!--<a class="collapse-item" href="<?php echo base_url('admin/jabatan/arsip')?>">Data Arsip</a>-->
            <a class="collapse-item" href="<?php echo base_url('admin/jabatan/pkj')?>">Pengajuan Nilai</a>
            <!-- <a class="collapse-item" href="<?php echo base_url('admin/jabatan/mutasi')?>">Mutasi Jabatan</a> -->
          </div>
        </div>
      </li>

    <!-- Nav Item - Pages Collapse Menu Petugas-->
    <!--<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          <i class="fas fa-suitcase"></i>
          <span>Data Petugas</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih Aksi:</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/pegawai')?>">Tugas Belajar</a>
            <a class="collapse-item" href="<?php echo base_url('admin/pegawai/tambah')?>">Ijin Belajar</a>
          </div>
        </div>
      </li> -->


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading 
      <div class="sidebar-heading">
        Setting
      </div>-->

      <!-- Nav Item - Pages Collapse Menu Setting akun
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages2">
          <i class="fas fa-check-circle"></i>
          <span>Verifikasi Akun</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages2" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Akun Belum Terverifikasi:</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/verification') ?>">Lihat Data</a>
            

          </div>
        </div>
      </li>-->


      <!-- Divider 
      <hr class="sidebar-divider d-none d-md-block">-->

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
