<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; KJSCE</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.css" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/sweetAlert/dist/sweetalert2.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
</head>


<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-5 col-md-7 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="assets/img/logo.png" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">KJSCE</span></h4>
            <form method="POST" action="login" class="needs-validation" novalidate="">
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Please fill in your email
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" data-toggle="password"  required>
                <div class="invalid-feedback">
                  please fill in your password
                </div>
              </div>
              <div class="form-group">
                <div class="mt-5 text-right">
                <a href="forgotPassword">Forgot Password?</a>
              </div>  
              </div>
               
              <div class="form-group text-right">
                <button type="submit" name="login" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>

             
            </form>
          </div>
        </div>

        <div class="col-lg-7 col-9 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="img/ganpati.png">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h3 class="mb-2 display-4 font-weight-bold"><span class="font-weight-bold">KJSCE</span></h3>
                <h5 class="font-weight-normal text-muted-transparent">Vidyavihar, Mumbai</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
  <script src="<?php echo base_url(); ?>assets/js/popper.min.js" crossorigin="anonymous"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-show-password.min.js"></script>
  <script src="<?php echo base_url();?>plugins/sweetAlert/dist/sweetalert2.min.js"></script>
  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

  <!-- Page Specific JS File --> 
</body>
</html>
