<?php
$foo = $_GET['name'];
$k = array();
$i=0;
$pieces = explode(" ", $foo);
foreach($pieces as $one)
{
    $k[$i] = ucfirst($one);
    $i++;
}
$imp = implode(" ", $k);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Company Detail</title>

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/ico/favicon.png">
        
        <script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>


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
        <link href="<?php echo base_url();?>plugins/sweetAlert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css">

        <link href="<?php echo base_url(); ?>plugins/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>plugins/tagsInput/jquery.tagsinput.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>plugins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" type="text/css">    
        <link href="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">    
        <link href="<?php echo base_url(); ?>plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>plugins/colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>DataTables/DataTables-1.10.20/css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>DataTables/DataTables-1.10.20/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Theme CSS -->
        <link href="<?php echo base_url(); ?>css/theme.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->    

        <!-- Responsive CSS -->
        <link href="<?php echo base_url(); ?>css/theme-responsive.min.css" rel="stylesheet" type="text/css"> 

        <!-- Head SCRIPTS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/modernizr.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>js/mobile-detect.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>js/mobile-detect-modernizr.js"></script> 
    </head>    

    <body id="pages" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed  responsive clearfix" data-active="pages "  data-smooth-scrolling="1">     
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
            		       <div class="vd_menu-search">
                                <form id="search-box" method="post" action="#">
                                    <input type="text" name="search" class="vd_menu-search-text width-40" placeholder="Search">
                                    <span class="vd_menu-search-submit vd_bg-red"><i class="fa fa-search"></i> </span>
                                </form>
                            </div>
                        </div>
                    <div class="col-sm-7 col-xs-12">
              		<div class="vd_mega-menu-wrapper">
                    <div class="vd_mega-menu pull-right">
                    <ul class="mega-ul">
                   <li id="top-menu-2" class="one-icon mega-li"> 
                        <a href="index.php" class="mega-link" data-action="click-trigger">
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
                    </li>     
                    </ul>
                    </div>
                    <div class="closing text-center" style="">
                        <a href="#">See All Notifications <i class="fa fa-angle-double-right"></i></a>
                    </div>                                                                   </div>                              
                    </div>                       
                    </div>    
                    </li>    
                   <li id="top-menu-profile" class="profile mega-li"> 
                        <a href="#" class="mega-link"  data-action="click-trigger"> 
                            <span  class="mega-image"><img src="<?php echo base_url();?>img/avatar/avatar-1.png" alt="example image" /></span>
                            <span class="mega-name">
                                <?php echo $this->session->email;?> <i class="fa fa-caret-down fa-fw"></i> 
                            </span>
                        </a> 
                        <div class="vd_mega-menu-content  width-xs-2  left-xs left-sm" data-action="click-target">
                            <div class="child-menu"> 
                                <div class="content-list content-menu">
                                    <ul class="list-wrapper pd-lr-10">
                                        <li> <a href="logout"> <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>  <div class="menu-text">logout</div> </a> </li>              
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
            </header><!-- Header Ends --> 
        <div class="content">
            <div class="container">   
                    <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left vd_bg-red ">
                        <div class="navbar-menu clearfix">
                            <h3 class="menu-title hide-nav-medium hide-nav-small">Menu</h3>
                            <div class="vd_menu">
                                <ul id="mytab">
                                    <li>
                                        <a href="<?php base_url();?>dashboard">
                                            <span class="menu-icon"><i class="fa fa-home"></i></span> 
                                            <span class="menu-text">Home</span>  
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tasks" data-toggle="tab">
                                            <span class="menu-icon"><i class="fa fa-tasks"></i></span> 
                                            <span class="menu-text"><?php echo $imp;?></span>  
                                        </a>
                                    </li>  

                                    <li>
                                        <a href="#table" data-toggle="tab">
                                            <span class="menu-icon"><i class="fa fa-share-alt"> </i></span> 
                                            <span class="menu-text">Shared Files</span>  
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
                            <!-- <div class="vd_content-section clearfix">
                                <div class="row"></div>
                                <button class="btn btn-primary" style="float: right" data-toggle="modal" data-target="#myModal1" id="addAnnouncement"> Add Announcement </button><br><br> 
                            </div>-->   <!--.vd_content-section  -->   
                    </div><!-- .vd_content -->
                
                    <!-- Start of task tab -->
                    <div id="tasks" class="tab-pane active">
                            <div class="vd_content-section clearfix">
                                        <div class="row"></div><!-- row -->
                                        <button class="btn btn-primary" style="float: right" data-toggle="modal" data-target="#myModal1" id="addAnnouncement"> Add Announcement </button><br><br> 
                            </div><!-- .vd_content-section --> 

                            <!--Company Details card with the modal form-->
                            <div class="col-sm-14">
                            <div class="panel widget">
                                <div class="panel-heading vd_bg-red ">
                                    <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-th-large"></i> </span><?php echo $imp;?></h3>
                                    <div class="vd_panel-menu">
                                        <div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon "> <i class="fa fa-minus"></i> </div>
                                        <div data-action="close" data-original-title="Close" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="fa fa-times" aria-hidden="true"></i> </div>
                                    </div><!-- vd_panel-menu --> 
                                </div>
                                
                                <div class="panel-body">
                                    <div class="col-sm-10">
                                                <button class="btn btn-primary" style="float: center" data-toggle="modal" data-target="#myModal" id="addDetails"> Add Details </button>
                                        
                                                <!-- Modal for Add Details -->
                                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header vd_bg-blue vd_white">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                                    <h4 class="modal-title" id="myModalLabel">Insert Details</h4>
                                                </div>
                                                <div class="modal-body"> 
                                                    <form class="form-horizontal"  enctype="multipart/form-data"  id="companyEntry">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Ref No.</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="ref_no">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Date of Announcement</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="doa">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Date of Campus Placement</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="doc">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Name of the Company</label>
                                                            <div class="col-sm-6 controls">
                                                                <textarea name="noc" id="" cols="10" rows="2"></textarea>
                                                                <!--<input class="input-border-btm" type="text" name="noc">-->
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Type of Company as per KJSCE Placements Policy</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="policy">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Salary pm/pa</label>
                                                            <div class="col-sm-6 controls">
                                                                <textarea name="salary" id="" cols="10" rows="2"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Breif Job Description</label>
                                                            <div class="col-sm-6 controls">
                                                                <textarea  name="description" rows="4"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Address of Company</label>
                                                            <div class="col-sm-6 controls">
                                                                <textarea name="address" id="" cols="10" rows="2"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Placement for UG/PG/UG and PG both</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="placement_for">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Eligibity: CGPI/ Live KT</label>
                                                            <div class="col-sm-6 controls">
                                                                <textarea name="eligible" id="" cols="10" rows="2"></textarea>    
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Branches Eligible to apply</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text"  name="branches">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Google Link to register</label>
                                                            <div class="col-sm-8 controls">
                                                                <textarea name="register" id="" cols="" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Last date to register</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="ldr">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Mode of selection</label>
                                                            <div class="col-sm-6 controls">
                                                                <textarea name="selection" id="" cols="10" rows="4"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Date of PPT/Test/Interview</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="dop">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Time to report for written test / campus placement</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text"  name="tor">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Venue to report</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="vtr">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Is the company visiting for the first time? Yes/No</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="visiting">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">If No, then details of past how many times visited in past for campus placement at KJSCE</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="count_visiting">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Is it a campus placement or Pool Campus placement?</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="cp">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Is it a campus placement for KJSIT also? Yes/No</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="p_for_kjsit">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Location of Placement / Venue of Training of Selected students</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="text" name="place_location">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Any specific Instructions</label>
                                                            <div class="col-sm-6 controls">
                                                            <textarea name="instruction" id="" cols="" rows="5"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label" for="attach">Attachements</label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="file" name="attach[]" multiple="multiple" id="attach">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer background-login">
                                                    <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn vd_btn vd_bg-green" id="btn_add">Create</button>
                                                </div>
                                                </div><!-- .modal-content --> 
                                                </div><!-- .modal-dialog --> 
                                                </div><!-- .modal --> 
                                                
                                                <!-- Modal for Announcement -->
                                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header vd_bg-blue vd_white">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                                    <h4 class="modal-title" id="myModalLabel">Announcement</h4>
                                                </div>
                                                
                                                <div class="modal-body"> 
                                                    <form class="form-horizontal"  enctype="multipart/form-data"  id="companyDetails">
                                                        <div class="form-group">
                                                            <textarea name="editor1"></textarea>
                                                            <script>
                                                                CKEDITOR.replace( 'editor1' );
                                                            </script>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label" for="attach">Attachements : </label>
                                                            <div class="col-sm-6 controls">
                                                                <input class="input-border-btm" type="file" name="a_files[]" multiple="multiple" id="a_files">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                                <div class="modal-footer background-login">
                                                    <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn vd_btn vd_bg-green" id="create_announcement">Create</button>
                                                </div>
                                                </div><!-- .modal-content --> 
                                                </div><!-- .modal-dialog --> 
                                                </div><!-- .modal -->
                                            <!--Comapny details Table-->
                                            <div class="col-md-12" id="displayCompanyDetails">
                                        
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div><!-- Card -->
                            <!-- Card 2.0-->
                            <div class="col-sm-14" id="announcement_card">
                            
                            
                            
                            
                                
                            </div><!-- Card -->      
                                   
                    </div><!--End of task tab -->
                    
                     <!--Datatable for shared files-->
                    <div id="table" class="tab-pane">
                        <div class="vd_title-section clearfix">
                            <div class="vd_panel-header">
                                    <h1>Files </h1>
                            </div>
                        </div><br> 
                        <!--- UI to upload csv file-->
                        <button class="btn btn-primary" style="float: right" data-toggle="modal" data-target="#uploadFile" id="uploadfile"> Upload File </button>
                        <br>
                        <div class="modal fade" id="uploadFile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header vd_bg-blue vd_white">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                                        <h4 class="modal-title" id="myModalLabel">Upload File</h4>
                                                    </div>
                                                    <div class="modal-body"> 
                                                        <form class="form-horizontal"  enctype="multipart/form-data" action="" id="fileUpload">
                                                            <div class="form-group">
                                                                <label class="col-sm-4 control-label" for="attachFile">File</label>
                                                                <div class="col-sm-6 controls">
                                                                    <input class="input-border-btm" type="file" name="attachFile" id="attachFile">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer background-login">
                                                        <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn vd_btn vd_bg-green" id="addFile">Upload</button>
                                                    </div>
                                                </div><!-- /.modal-content --> 
                                            </div><!-- /.modal-dialog --> 
                                        </div><!-- /.modal --> 
                            <!--End of UI to upload csv file-->

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

                 
                    
                    
                    
                     
                       
                </div><!-- .vd_container --> 
        </div><!-- .vd_content-wrapper --> 
       

        <!-- Middle Content End --> 
    </div><!-- .container --> 
</div><!-- .content -->

<div class="vd_chat-menu hidden-xs">
    <div class="vd_mega-menu-wrapper">
        <div class="vd_mega-menu">
            <ul class="mega-ul"> 
            <li class="one-big-icon mega-li mgl-10"> 
                <a href="index.php" class="mega-link" data-action="click-trigger">
                    <span class="mega-icon"><img alt="example image" src="img/avatar/avatar.jpg"></span> 
                    <span class="badge vd_bg-red">10</span>        
                </a>
                <div class="vd_mega-menu-content  open-top width-xs-5 width-md-5 width-lg-4 center-xs-4" data-action="click-target">
                <div class="child-menu">  
                    <div class="title"> 
           	            Jessyline <i>(online)</i>
                       <div class="vd_panel-menu">
                             <div  data-rel="tooltip"  data-original-title="Make a Call" class="menu entypo-icon smaller-font">
                                <i class="icon-phone"></i>
                            </div>               
                             <div  data-rel="tooltip"  data-original-title="Video Call" class="menu">
                                <i class="fa fa-video-camera"></i>
                            </div>               
                             <div  data-rel="tooltip"  data-original-title="Message Setting" class="menu smaller-font entypo-icon">
                                <i class="icon-cog"></i>
                            </div>   
                             <div data-rel="tooltip"  data-original-title="Close" class="menu entypo-icon">
                                <i class="icon-cross"></i>
                            </div>                                                   
                        </div>
                   </div>                 
		           <div class="content-list content-image content-menu">
                       <div data-rel="scroll">	
                           <ul class="list-wrapper pd-lr-10">
                               <li> 
                                   <a href="#"> 
                    		           <div class="menu-icon"><img alt="example image" src="img/avatar/avatar.jpg"></div> 
                                       <div class="menu-text"> Do you play or follow any sports?
                            	       <div class="menu-info">
                                           <span class="menu-date">12 Minutes Ago </span>
                                           </div>
                                        </div> 
                                    </a> 
                               </li>
                               
                                <li class="align-right"> 
                                    <a href="#"> 
                                        <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-2.jpg"></div>  
                                        <div class="menu-text">  Good job mate !
                                            <div class="menu-info">
                                                <span class="menu-date">1 Hour 20 Minutes Ago </span>
                                            </div>                            
                                        </div> 
                                    </a> 
                                </li>    

                                <li class="align-right"> 
                                    <a href="#"> 
                                        <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-2.jpg"></div> 
                                        <div class="menu-text">  Don't go anywhere, i will be coming soon
                                            <div class="menu-info">
                                                <span class="menu-date">1 Month 2 days Ago</span>                                       
                                            </div>                              
                                        </div> 
                                    </a> 
                                </li>                                                  
                            </ul>
                       </div>
                       <div class="closing chat-area">
                           <div class="chat-box">
                            <input type="text" placeholder="chat here.." />
                           </div>
                           <div class="vd_panel-menu">
                                 <div  data-rel="tooltip"  data-original-title="Insert Picture" class="menu">
                                    <i class="icon-camera"></i>
                                </div>               
                                 <div  data-rel="tooltip"  data-original-title="Emoticons" class="menu">
                                    <i class="fa fa-smile-o"></i>
                                </div>
                            </div>
                       </div>                                                 
                   </div>                              
                </div>                      
            </div>  
        </li>   
     
        <li class="profile mega-li pdlr-15 bordered"> 
            <a class="mega-link" href="#"  data-action="click-trigger"> 
                <span class="menu-name">
                    <i class="fa fa-comments append-icon"></i> Chat
                </span>
            </a>
            <div class="vd_mega-menu-content  width-xs-3  center-xs-3 open-top" data-action="click-target">
            <div class="child-menu"> 
        	    <div class="content-list  content-image">
                    <div data-rel="scroll">
                        <ul class="list-wrapper pd-lr-10">
                            <li>  
                                <a href="#"> 
                                    <div class="menu-icon"><img src="img/avatar/avatar.jpg" alt="example image"></div> 
                                    <div class="menu-text">Jessylin
	                                    <div class="menu-info">
                                    	    <span class="menu-date">Administrator </span></div>      
                                    </div>
                                    <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                                </a>
                            </li>
                            <li>  
                                <a href="#"> 
                                    <div class="menu-icon"><img src="img/avatar/avatar-2.jpg" alt="example image"></div> 
                                        <div class="menu-text">Rodney Mc.Cardo
                                            <div class="menu-info">
                                                <span class="menu-date">Designer </span>
                                            </div>
                                        </div>
                                    <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div> 
                                </a>
                            </li>
                            <li>  
                                <a href="#"> 
                                    <div class="menu-icon"><img src="img/avatar/avatar-3.jpg" alt="example image"></div> 
                                        <div class="menu-text">Theresia Minoque
                                            <div class="menu-info">
                                                <span class="menu-date">Engineering </span>
                                            </div>
                                        </div>
                                    <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> 
            </div> 
        </div>     
      </li>                       
    </ul>
</div>   
</div>      
</div>
</div>

<!-- .vd_body END  -->
<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>
<!--<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript  --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>plugins/sweetAlert2/dist/sweetalert2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>plugins/jquery-ui/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>plugins/jquery.fileDownload/src/Scripts/jquery.fileDownload.js"></script>

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
<script type="text/javascript" src="<?php echo base_url(); ?>plugins/isotope/isotope.pkgd.min.js"></script>


<script type="text/javascript" src="<?php echo base_url();?>myJS/companyDetail.js"></script>
    
</body>
</html>