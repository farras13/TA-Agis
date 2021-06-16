<?=
form_open('admin/login/proses_login');
?>

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
                    <h1 class="h3 text-gray-900 mb-4">Login Page</h1>
                    <h3 class="h5 text-gray-900 mb-4">SIDO BALIK</h3>
                  </div>

                    <div class="card-body">
                        <form class="user" method="post" action="<?= base_url('admin'); ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="uname1" placeholder="Enter Username...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="pwd1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('admin/login/registration'); ?>">Don't have accout? Register Now!</a>
                    </div>
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

<?=
form_close();
?>