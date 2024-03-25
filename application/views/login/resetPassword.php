<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Reset &mdash; Password</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/sweetalert2/dist/sweetalert2.min.css">

  <!-- CSS Libraries -->
  <!--<link rel="stylesheet" href="<?php echo base_url();?>node_modules/selectric/public/selectric.css">-->
  

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="assets/img/logo.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Reset Password</h4></div>

              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">New Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" data-toggle="password" name="password" required>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="confirm_password" class="d-block">Password Confirmation</label>
                      <input id="confirm_password" type="password" class="form-control" data-toggle="password" name="confirm_password"required>
                    </div>
                  </div>

                  <div class="form-group">
                    <input type="submit" id="reset" name="submit" class="btn btn-primary btn-lg btn-block" >
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo base_url();?>js/jquery.js"></script>
  <script src="<?php echo base_url();?>plugins/sweetalert2/dist/sweetalert2.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/popper.min.js" ></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>
  <script src="<?php echo base_url();?>assets/js/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/stisla.js"></script>
  <script src="<?php echo base_url();?>js/bootstrap-show-password.min.js"></script>  
  <!-- JS Libraies -->
  <!--<script src="<?php echo base_url();?>node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?php echo base_url();?>node_modules/selectric/public/jquery.selectric.min.js"></script>!-->
   

  <!-- Template JS File -->
  <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
  <script src="<?php echo base_url();?>assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <!--<script src="<?php echo base_url();?>assets/js/page/auth-register.js"></script>-->
  <script src="<?php echo base_url();?>myJS/projectScript.js"></script>
</body>
</html>
