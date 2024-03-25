<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>TPO Office - Company</title>

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
        
        <!-- Datatable CSS-->
        <link href='<?php echo base_url();?>DataTables/datatables.min.css' rel='stylesheet' type='text/css'>

        <!-- Print CSS-->
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">

        <link href="<?php echo base_url();?>plugins/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>plugins/tagsInput/jquery.tagsinput.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>plugins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>plugins/colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css">
        <link href="plugins/sweetAlert/dist/sweetalert2.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>DataTables/DataTables-1.10.20/css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>DataTables/DataTables-1.10.20/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">

        
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.1.0/css/buttons.dataTables.min.css" type="text/css"  />
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" type="text/css" />
		<link rel="stylesheet" href="https://cdn.datatables.net/select/1.1.0/css/select.dataTables.min.css" type="text/css" />

        <!-- Theme CSS -->
        <link href="<?php echo base_url();?>css/theme.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->

        <!-- Responsive CSS -->
        <link href="<?php echo base_url();?>css/theme-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>css/loader.css" rel="stylesheet" type="text/css">
        <!-- Head SCRIPTS -->
        <script type="text/javascript" src="<?php echo base_url();?>js/modernizr.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/mobile-detect.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/mobile-detect-modernizr.js"></script>

    </head>

    <body id="pages" class="full-layout nav-right-hide nav-right-start-hide nav-top-fixed      responsive clearfix" data-active="pages "  data-smooth-scrolling="1">
    <img  id="loader" src="<?php echo base_url();?>img/loader.gif" alt="loading...."> 
        <div id="simple" class="vd_body">
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
                    <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left  ">
                        <div class="navbar-menu clearfix">
                            <h3 class="menu-title hide-nav-medium hide-nav-small">Menu</h3>
                            <div class="vd_menu">
                                <ul id="tpo_office_menu">
                                    <li>
                                        <a href="<?php echo base_url(); ?>office" >
                                            <span class="menu-icon"><i class="fa fa-dashboard"></i></span> 
                                            <span class="menu-text">Home</span>  
                                        </a>
                                    </li>  
                                    <li>
                                        <a href="#filteration" data-toggle="tab">
                                            <span class="menu-icon"><i class="fa fa-filter"></i></span> 
                                            <span class="menu-text">Filteration</span>  
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tpo_office_share_table" data-toggle="tab">
                                            <span class="menu-icon"><i class="fa fa-share-alt"> </i></span> 
                                            <span class="menu-text">Shared Files</span>  
                                        </a>
                                    </li>    
                                    <li>
                                        <a href="#final" data-toggle="tab">
                                            <span class="menu-icon"><i class="fa fa-puzzle-piece"> </i></span> 
                                            <span class="menu-text">Final Selection</span>  
                                        </a>
                                    </li>   
                                </ul>
                            </div>             
                        </div>
                    </div>    

                    <!-- Middle Content Start -->
                    <div class="vd_content-wrapper">
                            <div class="vd_container tab-content">
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
                                </div>        
                                    <!--Start of Filteration Section -->    
                                <div id="filteration" class="tab-pane active">
                                    <div class="vd_title-section clearfix">
                                        <div class="vd_panel-header">
                                            <h1><?php echo strtoupper($_GET['name']);?> Details </h1>
                                        </div><br>
                                        <div class="vd_content-section clearfix">
                                            <div class="criteria">
                                            <button class="btn btn-primary" style="float: right" data-toggle="modal" data-target="#criteriModal" id="addCriteria"> Add Criteria and CSV file </button><br><br> 
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel widget">
                                                        <div class="panel-heading vd_bg-grey">
                                                            <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span> Data Tables </h3>
                                                        </div>
                                                        <div class="panel-body table-responsive">
                                                            <table class="table table-striped" id="empTable">
                                                                <thead>
                                                                    <tr>
        
                                                                        <th>Roll No</th>
                                                                        <th>Student Name</th>
                                                                        <th>Department</th>
                                                                        <th>Course</th>
                                                                        <th>Reason</th>
                                                                        <th><input type="checkbox" class='checkall' id='checkall'>
                                                                            <input type="button" id='delete_record' class="btn btn-danger btn-sm b " value='Delete' >
                                                                        </th>
                                                                        <th>Edit</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody></tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div><!-- col-md-12 --> 
                                            </div><!-- row --> 
                                        </div><!-- .vd_content-section --> 
                                    </div><!-- .vd_content -->   
                                </div>
                                <!--End of Filteration Section -->  



                                <!--Shared Files Section id="tpo_office_share_table"-->
                                <div id="tpo_office_share_table" class="tab-pane">
                                    <div class="vd_title-section clearfix">
                                        <div class="vd_panel-header">
                                                <h1>Files </h1>
                                        </div>
                                    </div>
                                    <div class="vd_content-section clearfix">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel widget">
                                                <div class="panel-heading vd_bg-grey">
                                                        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span> Shared Files Data Tables </h3>
                                                </div>
                                                <div class="panel-body table-responsive">
                                                    <table class="table table-striped" id="sharedFilesTable">
                                                            <thead>
                                                                <tr>
                                                                <th>Sr.No</th>
                                                                <th>File Name</th>
                                                                <th>Date of creation</th>
                                                                <th>Date of updation</th>
                                                                <th>Download</th>
                                                                <th>
                                                                <!-- <input type="checkbox" class='sharecheckall' id='sharecheckall'>
                                                                <input type="button" id='share_record' class="btn btn-warning btn-sm b" value='Share' > -->
                                                                Share
                                                                </th>
                                                                <th>
                                                                <input type="checkbox" class='deletecheckall' id='deletecheckall'>
                                                                <input type="button" id='delete_record' class="btn btn-danger btn-sm b" value='Delete' >
                                                                </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody></tbody>
                                                        </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!-- End of shared Files Section-->


                                <!--Final selection Section id="tpo_office_final-->
                                <div id="final" class="tab-pane">
                                        <div class="vd_title-section clearfix">
                                            <div class="vd_panel-header">
                                            <h1><?php echo strtoupper($_GET['name']);?> Final Selection </h1>
                                            </div><br>
                                            <div class="vd_content-section clearfix">
                                                <form id="final_selection">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Package</label>
                                                        <div class="col-sm-4 controls">
                                                            <input type="text" placeholder="4.5 LPA/CTC/Fixed" class="width-50" id="package">
                                                        </div>
                                                    </div><br><br><br>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Role</label>
                                                        <div class="col-sm-4 controls">
                                                            <input type="text" placeholder="Software Engineer" class="width-50" id="role">
                                                        </div>
                                                    </div><br><br><br>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Core</label>
                                                        <div class="col-sm-7 controls">
                                                            <div class="vd_checkbox checkbox-danger">
                                                                <input type="radio" value="yes" id="core" name="core">
                                                                <lable>YES</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <input type="radio" value="no" id="core" name="core">
                                                                <lable>NO</lable>
                                                            </div>
                                                        </div>
                                                    </div><br><br><br>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Company Status</label>
                                                        <div class="col-sm-7 controls">
                                                            <select class="width-40" id="final_status">
                                                            <option>Super Dream</option>
                                                            <option>Dream</option>
                                                            <option>Non Dream</option>
                                                            </select>
                                                        </div>
                                                    </div><br><br>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Upload CSV</label>                                                    
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="final_stud"
                                                                aria-describedby="inputGroupFileAddon01">
                                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary"  id="final_selection"> Submit</button><br><br>
                                                </form> 
                                            </div><!-- .vd_content-section --> 
                                        </div><!-- .vd_content -->   
                                    </div>
                                <!--End of Final selection Section -->




                            </div><!-- .vd_container --> 
                        </div><!-- .vd_content-wrapper --> 
                    <!-- Middle Content End --> 
                </div><!-- .container --> 
            </div><!-- .content -->


            <div class="modal fade" id="editStudentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header vd_bg-blue vd_white">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                                    <h4 class="modal-title" id="myModalLabel">Edit Registered Student Details</h4>
                                                </div>
                                                <div class="modal-body"> 
                                                    <form class="form-horizontal" id="editStudDetail">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Roll Number</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="roll_no" id="roll_no">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Student Name</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="stud_name" id="stud_name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Department</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="dept" id="dept">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Course</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="course" id="course">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">CGPI</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="cgpi" id="cgpi">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Email ID</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="email" id="email">
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="id" id="id">
                                                    </form>
                                                </div>
                                                <div class="modal-footer background-login">
                                                    <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                                                    <input type="submit" class="btn vd_btn vd_bg-green" id="edit_reg_Student" value="Submit">
                                                </div>
                                                </div><!-- /.modal-content --> 
                                                </div><!-- /.modal-dialog --> 
                                                </div><!-- /.modal -->




                                                 <!-- Modal for Add Details -->
                                                 <div class="modal fade" id="criteriModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header vd_bg-blue vd_white">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                                    <h4 class="modal-title" id="myModalLabel">Enter Criteria and attach file</h4>
                                                </div>
                                                <div class="modal-body"> 
                                                    <form class="form-horizontal" id="criteriaForm">
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">CGPI</label>
                                                            <div class="col-sm-4 controls">
                                                                <input type="text" placeholder="CGPI > 6.5" id="Cpointer" class="width-50" >
                                                            </div>
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">B.tech</label>
                                                            <div class="col-sm-9 controls">
                                                                <div class="vd_checkbox checkbox-danger">
                                                                    <input type="checkbox" value="COMP" id="checkbox-3" class="B_tech">
                                                                    <label for="checkbox-3"> COMPS </label>
                                                                    <input type="checkbox" value="IT" id="checkbox-4"  class="B_tech">
                                                                    <label for="checkbox-4"> IT </label>
                                                                    <input type="checkbox" value="ETRX" id="checkbox-5"  class="B_tech">
                                                                    <label for="checkbox-5"> ETRX </label>
                                                                    <input type="checkbox" value="EXTC" id="checkbox-6"  class="B_tech">
                                                                    <label for="checkbox-6"> EXTC </label>
                                                                    <input type="checkbox" value="MECH" id="checkbox-7"  class="B_tech">
                                                                    <label for="checkbox-7"> MECH </label>
                                                                </div>
                                                            </div>
                                                        </div><br><br>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">M.tech</label>
                                                            <div class="col-sm-9 controls">
                                                                <div class="vd_checkbox checkbox-danger">
                                                                    <input type="checkbox" value="COMP" id="checkbox-8" class="M_tech">
                                                                    <label for="checkbox-8"> COMPS </label>
                                                                    <input type="checkbox" value="IS" id="checkbox-9" class="M_tech">
                                                                    <label for="checkbox-9"> IS </label>
                                                                    <input type="checkbox" value="ETRX" id="checkbox-10" class="M_tech">
                                                                    <label for="checkbox-10"> ETRX </label>
                                                                    <input type="checkbox" value="EXTC" id="checkbox-11" class="M_tech">
                                                                    <label for="checkbox-11"> EXTC </label>
                                                                    <input type="checkbox" value="EE" id="checkbox-12" class="M_tech">
                                                                    <label for="checkbox-12"> EE </label>
                                                                </div>
                                                            </div>
                                                        </div><br><br>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Company Status</label>
                                                            <div class="col-sm-9 controls">
                                                                <select class="width-40" id="status">
                                                                <option value="super-dream">Super Dream</option>
                                                                <option value="dream">Dream</option>
                                                                <option value="non-dream">Non Dream</option>
                                                                <option value="dream and non-dream">Dream &amp; Non Dream</option>
                                                                </select>
                                                            </div>
                                                        </div><br><br>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Current SEMESTER</label>
                                                            <div class="col-sm-9 controls">
                                                                <select class="width-40" id="sem">
                                                                <option value="cgpi_odd">ODD</option>
                                                                <option value="cgpi_even">EVEN</option>
                                                                </select>
                                                            </div>
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Pass Out From</label>
                                                            <div class="col-sm-9 controls">
                                                                <select class="width-40" id="pass">
                                                                <option value="all">ALL</option>
                                                                <option value="Twelfth">Twelfth</option>
                                                                <option value="Diploma">Diploma</option>
                                                                </select>
                                                            </div>
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Upload CSV</label>
                                                        
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="regCsvFile"
                                                                      aria-describedby="inputGroupFileAddon01">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer background-login">
                                                    <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn vd_btn vd_bg-green" id="Criteria_Submit">Submit</button>
                                                </div>
                                                </div><!-- /.modal-content --> 
                                                </div><!-- /.modal-dialog --> 
                                                </div><!-- /.modal --> 
            
            




            </div><!--vd_body-->

        <!-- .vd_body END  -->
        <a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>

        <!-- Javascript  -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
        <script type="text/javascript" src='<?php echo base_url();?>plugins/jquery-ui/jquery-ui.custom.min.js'></script>
        
        <script type="text/javascript" src='<?php echo base_url();?>plugins/sweetalert2/dist/sweetalert2.min.js'></script>
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
		<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
		
		<script src="https://jquery-datatables-column-filter.googlecode.com/svn/trunk/media/js/jquery.dataTables.columnFilter.js" type="text/javascript"></script>
        
        
        <!-- download script -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        
        <!--Our Owned Script-->
        <script src="<?php echo base_url();?>myJS/tpoOfficeCompany.js"></script>
           
    </body>
</html>
