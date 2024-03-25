<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register &mdash; Stisla</title>

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
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action = "onRegister">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">First Name</label>
                      <input id="first_name" type="text" class="form-control" name="first_name" autofocus required>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" id = "email" onChange = "emailChecker()" required>
                    <span id = "emailAlreadyPresent" style = "color:red;"></span>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" required>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm" required>
                      <span id = "passwordCheckerError" style = "color:red;"></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit"  class="btn btn-primary btn-lg btn-block" id = "submitButReg">
                      Register
                    </button>
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
  <script src="<?php echo base_url(); ?>/assets/js/page/auth-register.js"></script>
  <script src = "text/javascript">
    //   function checkSamePassword(){
    //     var passwordInput = document.getElementsByName("password").value;
    //     console.log(passwordInput);
    //     var passwordConfirm = document.getElementsByName("password-confirm").value;
    //     if (passwordInput != passwordConfirm) {
    //         $("#passwordCheckerError").text("password does not match");
    //     }
    //     else{
    //         $("#passwordCheckerError").text("");
    //         window.location.href = "<?php echo site_url('fillDetailsFromDB');?>";
    //         console.log("match");
    //     }
    // },
  //   $("#email").on("change", emailChecker);
  //   function emailChecker(){
  //     $.ajax({
  //         type: "POST",
  //         url: "<?php echo site_url('alumniregisterController/checkIfSameEmailExists'); ?>", 
  //         // url : 'alumni/alumniregisterController/checkIfSameEmailExists/',
  //         data:  {'email':$("#email"). val()},
  //         dataType:"text",//return type expected as json
  //         success: function(status){
  //             console.log(status);
  //               if(status == "true"){
  //                 $("#emailAlreadyPresent").text("email already taken");
  //                 $("#submitButReg").attr("disabled", true);
  //               }
  //               else{
  //                 $("#emailAlreadyPresent").text("");
  //                 $("#submitButReg").attr("disabled", false);
  //               }
  //         }
  //         // error: function (status) {
  //         //     console.log("false");
  //         //     console.log(status);
  //         // }
  //     });
  // }
  </script>
</body>
</html>
