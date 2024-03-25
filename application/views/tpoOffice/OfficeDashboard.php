<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>TPO Office - Dashboard</title>

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url();?>img/ico/favicon.png">

        <!-- CSS -->
        <!-- Bootstrap & FontAwesome & Entypo CSS -->
        <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>css/font-entypo.css" rel="stylesheet" type="text/css">

        <!-- Fonts CSS -->
        <link href="<?php echo base_url();?>css/fonts.css"  rel="stylesheet" type="text/css">

        <!-- Plugin CSS -->
        <link href="<?php echo base_url();?>plugins/jquery-ui/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->
        <link href="<?php echo base_url();?>css/theme.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->

        <!-- Responsive CSS -->
        <link href="<?php echo base_url();?>css/theme-responsive.min.css" rel="stylesheet" type="text/css">

        <!-- Head SCRIPTS -->
        <script type="text/javascript" src="<?php echo base_url();?>js/modernizr.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/mobile-detect.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/mobile-detect-modernizr.js"></script>
    </head>

    <body id="pages" class="full-layout nav-right-hide nav-right-start-hide nav-top-fixed  responsive clearfix" data-active="pages "  data-smooth-scrolling="1">
        <div class="vd_body">
            <!-- Header Start -->
            <header class="header-1" id="header">
                <div class="vd_top-menu-wrapper">
                    <div class="container ">
                        <div class="vd_top-nav vd_nav-width  ">
                            <div class="vd_panel-header">
                                <div class="logo">
                                    <a href="index.php"><img alt="logo" src="<?php echo base_url();?>img/logo.png"></a>
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
                                    <!-- <div class="vd_menu-search">
                                        <form id="search-box" method="post" action="#">
                                            <input type="text" name="search" id="searchCompany" class="vd_menu-search-text width-40" placeholder="Search">
                                            <span class="vd_menu-search-submit"><i class="fa fa-search"></i> </span>
                                        </form>
                                    </div> -->
                                </div>
                            <div class="col-sm-7 col-xs-12">
                            <div class="vd_mega-menu-wrapper">
                            <div class="vd_mega-menu pull-right">
                            <ul class="mega-ul">
                            <li id="top-menu-2" class="one-icon mega-li">
                                <!-- <a href="index.php" class="mega-link" data-action="click-trigger">
                                    <span class="mega-icon"><i class="fa fa-envelope"></i></span>
                                    <span class="badge vd_bg-red">10</span>
                                </a> -->
                            <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 width-lg-4 right-xs left-sm" data-action="click-target">
                            <div class="child-menu">
                                <!-- <div class="title">Messages
                                    <div class="vd_panel-menu">
                                        <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                                        <i class="fa fa-cog"></i>
                                        </span>
                                    </div>
                                </div> -->
                            <div class="content-list content-image">
                            <div  data-rel="scroll">
                            <ul class="list-wrapper pd-lr-10">
                            <!-- <li>
                                <div class="menu-icon"><img alt="example image" src="img/avatar/avatar.jpg"></div>
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
                            </li> -->
                            </ul>
                            </div>
                            <div class="closing text-center">
                                <a href="#">See All Notifications <i class="fa fa-angle-double-right"></i></a>
                            </div>                                                                   </div>
                            </div> <!-- child-menu -->
                            </div>   <!-- vd_mega-menu-content -->
                            </li>
                            <li id="top-menu-profile" class="profile mega-li">
                                <a href="#" class="mega-link"  data-action="click-trigger">
                                    <span  class="mega-image"><img src="img/avatar/avatar.jpg" alt="example image" /></span>
                                    <span class="mega-name">
                                    <?php echo $this->session->email;?> <i class="fa fa-caret-down fa-fw"></i>
                                    </span>
                                </a>
                                <div class="vd_mega-menu-content  width-xs-2  left-xs left-sm" data-action="click-target">
                                    <div class="child-menu">
                                        <div class="content-list content-menu">
                                            <ul class="list-wrapper pd-lr-10">
                                                <li> <a href="logout"> <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>  <div class="menu-text">Sign Out</div> </a> </li>
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
                                        <div class="vd_panel-header">
                                            <h1>Company Lists</h1>
                                        </div>
                                    </div>
                                    <div class="vd_content-section clearfix">
                                        <div class="row">
                                            <div class="col-sm-6" data-rel="sortable" id="officeCards">

                                                


                                            </div><!-- .vd_content-wrapper --> 
                                        <!-- Middle Content End --> 
                                        </div><!-- .container --> 
                                    </div><!-- .content -->
                            </div><!--vd_body-->
                        </div>
                    </div>
                </div>
            </div>

            <!-- .vd_body END  -->
            <a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>

        <!-- Javascript  -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
        <script type="text/javascript" src='<?php echo base_url();?>plugins/jquery-ui/jquery-ui.custom.min.js'></script>
        

        <script type="text/javascript" src="<?php echo base_url();?>js/caroufredsel.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/plugins.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>plugins/breakpoints/breakpoints.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>plugins/dataTables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>plugins/tagsInput/jquery.tagsinput.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>plugins/blockUI/jquery.blockUI.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>plugins/pnotify/js/jquery.pnotify.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>js/theme.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>custom/custom.js"></script>

        <!-- Specific Page Scripts Put Here -->
        <script type="text/javascript" src="<?php echo base_url();?>plugins/isotope/isotope.pkgd.min.js"></script>

        <script type="text/javascript" src='<?php echo base_url();?>plugins/tagsInput/jquery.tagsinput.min.js'></script>
        <script type="text/javascript" src='<?php echo base_url();?>plugins/bootstrap-timepicker/bootstrap-timepicker.min.js'></script>
        <script type="text/javascript" src='<?php echo base_url();?>plugins/daterangepicker/moment.min.js'></script>
        <script type="text/javascript" src='<?php echo base_url();?>plugins/daterangepicker/daterangepicker.js'></script>
        <script type="text/javascript" src='<?php echo base_url();?>plugins/colorpicker/colorpicker.js'></script>
        <script type="text/javascript" src='<?php echo base_url();?>plugins/ckeditor/ckeditor.js'></script>
        <script type="text/javascript" src='<?php echo base_url();?>plugins/ckeditor/adapters/jquery.js'></script>

        <script type="text/javascript" src="<?php echo base_url();?>plugins/bootstrap-wysiwyg/js/wysihtml5-0.3.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>plugins/bootstrap-wysiwyg/js/bootstrap-wysihtml5-0.0.2.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>plugins/dataTables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>DataTables/DataTables-1.10.20/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>plugins/dataTables/dataTables.bootstrap.js"></script>
        <!-- Print JS-->
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
        
        <!-- download script -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
        <script src="<?php echo base_url();?>myJS/tpooffice.js"></script>
    </body>
</html>
