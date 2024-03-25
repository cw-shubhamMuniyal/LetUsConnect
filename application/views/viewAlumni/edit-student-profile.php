<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .avatar-pic {
                width: 150px;
            }
        </style>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>Edit Student Profile</title>

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/ico/favicon.png">

        <!-- CSS -->
        <!-- Bootstrap & FontAwesome & Entypo CSS -->
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>css/font-entypo.css" rel="stylesheet" type="text/css">    

        <!-- Fonts CSS -->
        <link href="<?php echo base_url(); ?>css/fonts.css"  rel="stylesheet" type="text/css">

        <!-- Plugin CSS -->
        <link href="<?php echo base_url(); ?>plugins/jquery-ui/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">    
        <link href="<?php echo base_url(); ?>plugins/prettyPhoto-plugin/css/prettyPhoto.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>plugins/isotope/css/isotope.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>plugins/pnotify/css/jquery.pnotify.css" media="screen" rel="stylesheet" type="text/css">    
        <link href="<?php echo base_url(); ?>plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"> 


        <link href="<?php echo base_url(); ?>plugins/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>plugins/tagsInput/jquery.tagsinput.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>plugins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" type="text/css">  
        <link href="<?php echo base_url(); ?>plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">  
        <link href="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">    
        <link href="<?php echo base_url(); ?>plugins/colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->
        <link href="<?php echo base_url(); ?>css/theme.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->    

        <!-- Responsive CSS -->
        <link href="<?php echo base_url(); ?>css/theme-responsive.min.css" rel="stylesheet" type="text/css"> 
        
<!--        <link rel="stylesheet" href="datepicker/css/datepicker.css" type="text/css">-->

        <!-- Head SCRIPTS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/modernizr.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>js/mobile-detect.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>js/mobile-detect-modernizr.js"></script> 
    </head>    

    <body id="pages" class="full-layout nav-right-hide nav-right-start-hide nav-top-fixed      responsive clearfix" data-active="pages "  data-smooth-scrolling="1">     
        <div class="vd_body">
            <!-- Header Start -->
            <header class="header-1" id="header">
                <div class="vd_top-menu-wrapper">
                    <div class="container ">
                        <div class="vd_top-nav vd_nav-width  ">
                            <div class="vd_panel-header">
                                <div class="logo">
                                    <a href="<?php echo base_url(); ?>index.php"><img alt="logo" src="<?php echo base_url(); ?>img/logo.png"></a>
                                </div>
                                <!-- logo -->
                                <div class="vd_panel-menu  hidden-sm hidden-xs" data-intro="<strong>Minimize Left Navigation</strong><br/>Toggle navigation size to medium or small size. You can set both button or one button only. See full option at documentation." data-step=1>
                                    <span class="nav-medium-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Medium Nav Toggle" data-action="nav-left-medium">
                                        <i class="fa fa-bars"></i>
                                    </span>

                                    <span class="nav-small-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Small Nav Toggle" data-action="nav-left-small">
                                            <i class="fa fa-ellipsis-v"></i>
                                    </span> 
                                </div>
                                <div class="vd_panel-menu left-pos visible-sm visible-xs">
                                    <span class="menu" data-action="toggle-navbar-left">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </span>                    
                                </div>
                                <div class="vd_panel-menu visible-sm visible-xs">
                                    <span class="menu visible-xs" data-action="submenu">
                                        <i class="fa fa-bars"></i>
                                    </span>        

                                    <span class="menu visible-sm visible-xs" data-action="toggle-navbar-right">
                                        <i class="fa fa-comments"></i>
                                    </span>                   
                                </div><!-- vd_panel-menu -->
                            </div><!-- vd_panel-header -->
                        </div>    
                        <div class="vd_container">
                            <div class="row">
                                <div class="col-sm-5 col-xs-12">
                                    <div class="vd_menu-search">
                                        <form id="search-box" method="post" action="#">
                                            <input type="text" name="search" class="vd_menu-search-text width-40" placeholder="Search">
                                            <span class="vd_menu-search-submit"><i class="fa fa-search"></i> </span>
                                        </form>
                                    </div>
                                </div>
                            <div class="col-sm-7 col-xs-12">
                            <div class="vd_mega-menu-wrapper">
                            <div class="vd_mega-menu pull-right">
                            <ul class="mega-ul">
                            <li id="top-menu-2" class="one-icon mega-li"> 
                                <a href="<?php echo base_url(); ?>index.php" class="mega-link" data-action="click-trigger">
                                    <span class="mega-icon"><i class="fa fa-envelope"></i></span> 
                                    <span class="badge vd_bg-red">10</span>
                                </a>
                            <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 width-lg-4 right-xs left-sm" data-action="click-target">
                            <div class="child-menu">  
                                <div class="title">Messages
                                    <div class="vd_panel-menu">
                                        <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                                        <i class="fa fa-cog"></i>
                                        </span>                      
                                    </div>
                                </div>                 
                            <div class="content-list content-image">
                            <div  data-rel="scroll">	
                            <ul class="list-wrapper pd-lr-10">
                            <li> 
                                <div class="menu-icon"><img alt="example image" src="<?php echo base_url(); ?>img/avatar/avatar.jpg"></div> 
                                <div class="menu-text"> Do you play or follow any sports?
                                    <div class="menu-info">
                                        <span class="menu-date">12 Minutes Ago </span>     
                                        <span class="menu-action">
                                            <span class="menu-action-icon" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="bottom">
                                                    <i class="fa fa-eye"></i>
                                            </span>                                     
                                        </span>                                
                                    </div>
                                </div> 
                            </li>     
                            </ul>
                            </div>
                            <div class="closing text-center" style="">
                                <a href="<?php echo base_url(); ?>#">See All Notifications <i class="fa fa-angle-double-right"></i></a>
                            </div>                                                                   </div>                              
                            </div> <!-- child-menu -->                      
                            </div>   <!-- vd_mega-menu-content --> 
                            </li>    
                            <li id="top-menu-profile" class="profile mega-li"> 
                                <a href="<?php echo base_url(); ?>#" class="mega-link"  data-action="click-trigger"> 
                                    <span  class="mega-image"><img src="<?php echo base_url(); ?>img/avatar/userUploads/<?php echo $profilePicture; ?>"></span>
                                    <span class="mega-name">
                                        <?php echo $_SESSION['emailSession']; ?> <i class="fa fa-caret-down fa-fw"></i> 
                                    </span>
                                </a> 
                                <div class="vd_mega-menu-content  width-xs-2  left-xs left-sm" data-action="click-target">
                                    <div class="child-menu"> 
                                        <div class="content-list content-menu">
                                            <ul class="list-wrapper pd-lr-10">
                                            <li> <a href="<?php echo site_url("studentLogout"); ?>"> <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>  <div class="menu-text">Sign Out</div> </a> </li>              
                                            </ul>
                                        </div> 
                                    </div> 
                                </div>     
                            </li>               
                            </ul><!-- Head menu search form ends -->                         
                            </div>
                            </div>
                            </div>
                            </div>
                          </div>
                        </div><!-- container --> 
                    </div><!-- vd_primary-menu-wrapper --> 
                </header>
            <!-- Header Ends --> 
            <div class="content">
                <div class="container">   
                <!-- Middle Content Start -->
                <div class="vd_content-wrapper">
                    <div class="vd_container">
                        <div class="vd_content clearfix">
                            <div class="vd_head-section clearfix">
                                <div class="vd_panel-header">
                                    <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
                                    <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
                                    <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
                                    <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vd_title-section clearfix">
                                <div class="vd_panel-header no-subtitle">
                                    <h1>Edit Profile</h1>
                                </div>
                            </div>    
                        </div><br><!-- .vd_content -->
                        <div class="panel widget light-widget">
                            <div class="panel-body">
                                <?php echo form_open_multipart(base_url()."onEdit");?>
                                <!-- <form class="form-horizontal"  action="<?php echo base_url(); ?>alumni/editStudentDetails/onEdit" role="form" id="register-form-2" method = "POST"> -->
                                    <div class="alert alert-danger vd_hidden">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                                        <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh snap!</strong> Change a few things up and try submitting again. 
                                    </div>
                                    <div class="alert alert-success vd_hidden">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                                        <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Well done!</strong>. 
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <div class="label-wrapper">
                                                <label class="control-label">First Name <span class="vd_red">*</span></label>
                                            </div>
                                            <div class="vd_input-wrapper" id="first-name-input-wrapper"> <span class="menu-icon"> <i class="fa fa-user"></i> </span>
                                                <input type="text" value = "<?php echo $firstName; ?>" placeholder="John" class="required" required name="firstname" id="firstname">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="label-wrapper">
                                                <label class="control-label">Middle Name <span class="vd_red">*</span></label>
                                            </div>
                                            <div class="vd_input-wrapper" id="middle-name-input-wrapper"> <span class="menu-icon"> <i class="fa fa-user"></i> </span>
                                                <input type="text" value = "<?php echo $middleName; ?>" placeholder="Doe" class="required" required name="middlename" id="middlename">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <div class="label-wrapper">
                                                <label class="control-label">Last Name <span class="vd_red">*</span></label>
                                            </div>
                                            <div class="vd_input-wrapper" id="last-name-input-wrapper"> <span class="menu-icon"> <i class="fa fa-user"></i> </span>
                                                <input type="text" value = "<?php echo $lastName; ?>" placeholder="Doe" class="required" required name="lastname" id="lastname">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="label-wrapper">
                                                <label class="control-label">Email <span class="vd_red">*</span></label>
                                            </div>
                                          <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                                            <input type="email" value = "<?php echo $email; ?>" placeholder="Email"  name="email" id="email" disabled>
                                          </div>
                                        </div>
                                    </div> 
                                    
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <div class="label-wrapper">
                                                <label class="control-label">Profile Picture <span class="vd_red">*</span></label>
                                            </div>
                                            <!-- <div class="col-sm-7 controls">
                                              <input type="file" name = "profilepicture" value = "<?php echo base_url(); ?>img/avatar/userUploads/<?php echo $profilePicture; ?>">
                                            </div>  -->

                                            <div class="file-field">
                                            <div class="mb-4">
                                            <img src="<?php echo base_url(); ?>img/avatar/userUploads/<?php echo $profilePicture; ?>""
                                                class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
                                            </div>
                                            <div class="d-flex justify-content-center">
                                            <div class="btn btn-mdb-color btn-rounded float-left">
                                                <span>Update Image </span>
                                                <input type="file" name = "profilepicture">
                                            </div>
                                            </div>
                                        </div>

                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="label-wrapper">
                                                <label class="control-label">Interest <span class="vd_red">*</span></label>
                                            </div>
                                          <div class="vd_input-wrapper" id="interest-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                                            <input type="text" value = "<?php echo $interest; ?>" placeholder="Interest" class="required" required  name="interest" id="interest">
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="label-wrapper">
                                                <label class="control-label">Bio <span class="vd_red">*</span></label>
                                            </div>
                                          <div class="vd_input-wrapper" id="interest-input-wrapper"> 
                                           <textarea class="form-control" rows="5" placeholder="Tell something about yourself" class="required" required  name="bio" id="bio"><?php echo $bio; ?></textarea>
                                          </div>
                                        </div>
                                    </div>  
                                    
                                    
                                    <div id="vd_login-error" class="alert alert-danger hidden"><i class="fa fa-exclamation-circle fa-fw"></i> Please fill the necessary field </div>
                                    <div class="form-group">
                                        <div class="col-md-12 mgbt-xs-5">
                                            <button class="btn vd_bg-green vd_white" type="submit" id="submit-register" name="submit-register">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                     </div><!-- .vd_container --> 
                </div><!-- .vd_content-wrapper --> 
                <!-- Middle Content End --> 
                </div><!-- .container --> 
            </div><!-- .content -->
        </div><!--vd_body-->

        <!-- .vd_body END  -->
        <a id="back-top" href="<?php echo base_url(); ?>#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>

        <!-- Javascript  --> 
        <!-- Placed at the end of the document so the pages load faster --> 
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script> 
        <script type="text/javascript" src='<?php echo base_url(); ?>plugins/jquery-ui/jquery-ui.custom.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>js/caroufredsel.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>js/plugins.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>plugins/breakpoints/breakpoints.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>plugins/dataTables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script> 

        <script type="text/javascript" src="<?php echo base_url(); ?>plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>plugins/tagsInput/jquery.tagsinput.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>plugins/blockUI/jquery.blockUI.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>plugins/pnotify/js/jquery.pnotify.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>js/theme.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>custom/custom.js"></script>

        <!-- Specific Page Scripts Put Here -->
        <script type="text/javascript" src='<?php echo base_url(); ?>plugins/bootstrap-timepicker/bootstrap-timepicker.min.js'></script>
        <script type="text/javascript" src='<?php echo base_url(); ?>plugins/daterangepicker/moment.min.js'></script>
        <script type="text/javascript" src='<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.js'></script>
        <script type="text/javascript" src='<?php echo base_url(); ?>plugins/colorpicker/colorpicker.js'></script>
        <script type="text/javascript" src='<?php echo base_url(); ?>plugins/ckeditor/ckeditor.js'></script>
        <script type="text/javascript" src='<?php echo base_url(); ?>plugins/ckeditor/adapters/jquery.js'></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>plugins/bootstrap-wysiwyg/js/wysihtml5-0.3.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>plugins/bootstrap-wysiwyg/js/bootstrap-wysihtml5-0.0.2.js"></script>
        
<!--
        <script src="datepicker/js/bootstrap-datepicker.js"></script>
        
        <script src="js/google-code-prettify/prettify.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
-->

        <script type="text/javascript">
        $(document).ready(function() {
            "use strict";

          // init Isotope
          var $container = $('.isotope').isotope({
            itemSelector: '.gallery-item',
            layoutMode: 'fitRows'
          });


            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
              $container.isotope('layout');
            });

          // bind filter button click
          $('#filters').on( 'click', 'a', function() {
            var filterValue = $( this ).attr('data-filter');
            $('#filters li').removeClass('active');
            $(this).parent().addClass('active');	
            $container.isotope({ filter: filterValue });
          });


        });
        </script>
        <!-- Specific Page Scripts END -->

        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->

        <script>
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script> 
    </body>
</html>