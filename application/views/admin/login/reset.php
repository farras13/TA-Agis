<body class="bg-gradient-success">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
			      
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                  <img src="<?php echo base_url(); ?>img/logo.png">
                    <h1 class="h3 text-gray-900 mb-4">Forgot Password</h1>
                    <h3 class="h5 text-gray-900 mb-4">SIDO BALIK</h3>
                    <?php if(isset($pesan_sukses)) { ?>
                      <div class="alert alert-success" role="alert">
                        <?= $pesan_sukses?>
                      </div>
                    <?php } else if(isset($pesan_error)){ ?>
                      <div class="alert alert-danger" role="alert">
                        <?= $pesan_error?>
                      </div>
                    <?php } ?>
                  </div>

                    <div class="card-body">
                      <form class="user" method="post" action="<?= base_url('admin/auth/update_password/'.$reset_key); ?>">
                        <div class="form-group">
                          <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Enter New Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Change Password</button>
                      </form>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
 
<!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('js/sb-admin-2.min.js') ?>"></script>