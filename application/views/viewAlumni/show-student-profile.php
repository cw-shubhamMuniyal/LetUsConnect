<!DOCTYPE html>
<html>

    <head>

        <style>
            .searchFriendDiv {
                box-sizing: border-box;
            }
            form.searchFriend input[type=text] {
                padding: 10px;
                font-size: 17px;
                border: 1px solid grey;
                float: left;
                width: 80%;
                background: #f1f1f1;
            }

            form.searchFriend button {
                float: left;
                width: 20%;
                padding: 10px;
                background: #2196F3;
                color: white;
                font-size: 17px;
                border: 1px solid grey;
                border-left: none;
                cursor: pointer;
            }

            form.searchFriend button:hover {
             background: #0b7dda;
            }

            form.searchFriend::after {
                content: "";
                clear: both;
                display: table;
            }
        </style>
        <meta charset="utf-8" />
        <title>User Profile</title>

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


        <!-- jQuery UI -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    </head>    

<body id="pages" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix" data-active="pages "  >     
<div class="vd_body">
<!-- Header Start -->
    <header class="header-1" id="header">
        <div class="vd_top-menu-wrapper">
            <div class="container ">
                <div class="vd_top-nav vd_nav-width  ">
                    <div class="vd_panel-header">
          	            <div class="logo">
            	            <a href=""><img alt="logo" src="<?php echo base_url(); ?>img/logo.png"></a>
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
                       
                    <li id="top-menu-profile" class="profile mega-li"> 
                        <a href="#" class="mega-link"  data-action="click-trigger"> 
                            <span  class="mega-image"><img src="<?php echo base_url(); ?>img/avatar/userUploads/<?php echo $personalProfile; ?>"></span>
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
        </header><!-- Header Ends --> 
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
                                <h1>Student Profile</h1>
                            </div>
                        </div>
                        
                        <div class="vd_content-section clearfix">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="panel widget light-widget panel-bd-top">
                                <div class="panel-heading no-title"> </div>
                                <div class="panel-body">
                                    <div class="text-center vd_info-parent"> <img alt="example image" src="<?php echo base_url(); ?>img/avatar/userUploads/<?php echo $stuProfile["profilePicture"]; ?>"></div>
                                    <hr class="pd-10"  />
                                    <h2 class="font-semibold mgbt-xs-5"><?php echo $stuProfile["firstName"]." ".$stuProfile["lastName"]?></h2><br>
                                    <h4></h4>
                                    <p><?php echo $stuProfile["bio"]; ?></p>
                                </div>
                                </div><!-- panel widget -->
                            </div>
                            
                            <div class="col-sm-9">
                                <div class="tabs widget">
                                    <ul class="nav nav-tabs widget">
                                        <li class="active"> <a data-toggle="tab" href="#profile-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                                        <li> <a data-toggle="tab" href="#projects-tab"> Projects <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>  

                                        <?php
                                        if($stuProfile["role"] == 3){

                                            ?>

                                             <li> <a data-toggle="tab" href="#experience-tab"> Experience <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                                             <?php
                                        }
                                            ?>  
                                        
                                        <li> <a data-toggle="tab" href="#friends-tab"> Friends <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                                    </ul>
                                    
                                    <div class="tab-content">
                                    <div id="profile-tab" class="tab-pane active">
                                    <div class="pd-20">
                                    <!-- <div class="vd_info tr"> <button class="btn vd_btn btn-xs vd_bg-yellow" onclick="onEditJS()"> <i class="fa fa-pencil append-icon"></i> Edit </button> </div>       -->
                                    <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-user"></i> ABOUT</h3>
                                    <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                              <label class="col-xs-5 control-label">First Name:</label>
                                              <div class="col-xs-7 controls"><?php echo $stuProfile["firstName"];?></div> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">Last Name:</label>
                                            <div class="col-xs-7 controls"><?php echo $stuProfile["lastName"];?></div> 
                                        </div>
                                    </div>
                                      <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                          <label class="col-xs-5 control-label">Middle Name:</label>
                                          <div class="col-xs-7 controls"><?php echo $stuProfile["middleName"];?></div>
                                        </div>
                                      </div>
                                      <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                          <label class="col-xs-5 control-label">Email:</label>
                                          <div class="col-xs-7 controls"><?php echo $stuProfile["email"];?></div>
                                        </div>
                                      </div>
                                      <!-- <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                          <label class="col-xs-5 control-label">Birthday:</label>
                                          <div class="col-xs-7 controls"></div> 
                                        </div>
                                      </div> -->
                                      <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                          <label class="col-xs-5 control-label">Interests:</label>
                                          <div class="col-xs-7 controls"><?php echo $stuProfile["interest"]; ?></div>
                                        </div>
                                      </div>
                                      </div>
                                    </div><!-- pd-20 -->  
                                    
                                    <!--Education tab-->  
                                    <div class="pd-5">
                                    <div class="row">
                                        <div class="col-sm-6">   
                                              <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-trophy mgr-10 profile-icon"></i>Education</h3>   
                                        </div>
                                        <div class="col-sm-3 col-sm-offset-3 text-right">
                                             <!-- <button type="button" class="btn btn-xs btn-warning d-align" data-toggle="modal" data-target="#addEducationModal"> <i class="fa fa-pencil append-icon"></i>Add new</button>  -->
                                        </div>
                                    </div>

                                     <?php

                                     if(isset($dt)){
                                        $data = json_decode($dt,true);
                                        if(!empty($data)){
                                            foreach($data as $value){
                                                ?>

                                    <div class="row" id = "educationPart">

                                       
                                        <div id="<?php echo $value['ID']; ?>">





                                        <div class="col-sm-6">
                                                <div class="content-list content-menu">
                                                    <ul class="list-wrapper">
                                                    <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> <?php echo $value['degree']." ". $value["specialize"];?><br> at <a href="#"><?php echo $value["university"] ?></a> <span class="menu-info"><span class="menu-date"> <?php echo $value["startMonth"]." ". $value["startYear"] ?> ~ <?php echo $value["endMonth"]." ". $value["endYear"] ?></span></span> </span> </li>         
                                                    </ul>
                                                    </div>  
                                        </div>

                                        
                                        <div class="col-sm-3 col-sm-offset-3 text-right">
                                                <!-- <button type="button" onClick = "editEducationDetailsDB(<?php echo $value['ID']?>)" class="btn btn-xs btn-primary d-slign" data-toggle="modal" data-target="#editEducationModal"><i class="fa fa-pencil append-icon"></i>Edit</button> 
                                                <button type="button" name="deleteEducation" id="<?php echo $value['ID']?>" onClick = "deleteEducationDetailsDB(<?php echo $value['ID']?>)"  class="btn btn-xs btn-danger d-align"><i class="fa fa-times append-icon"></i>Delete</button>  -->
                                        </div>


                                    </div>

                                        

                                    </div>

                                     <?php 
                                    }
                                }
                            }
                                    ?>
                                    </div><!-- pd-20 -->   
                                    <!-- row --><hr class="pd-10"/>
                                    
                                       
                                       
                                    
                                 <!--Modal for adding Eduction-->
                                     <!-- Modal -->
                                <div class="modal fade" id="addEducationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header vd_white" style="background:#d93b36">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <h4 class="modal-title" id="myModalLabel">Enter Details</h4>
                                </div>
                                <div class="modal-body"> 
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Degree</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" name="degree" id="degree" placeholder="B.tech" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Specialization</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" name="specialize" id="specialize" placeholder="Computer Science" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">University</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" id="university" name="university" placeholder="KJSCE" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Start Month and year</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" required type="text" name="startMonth" id="startMonth" placeholder="July">
                                                <input class="input-border-btm" type="text" name="startYear" id="startYear" placeholder="2014" required>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-4 control-label">End Month and year</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" name="endMonth" id="endMonth" placeholder="June">
                                                <input class="input-border-btm" type="text" name="endYear" id="endYear" placeholder="2020" required>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer background-login">
                                    <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                                    <button type="button" name="addEducation" id="addEducation" onClick = "addEducationDetailsDB()"  class="btn vd_btn vd_bg-green">Add</button>
                                </div>
                                </div><!-- /.modal-content --> 
                                </div><!-- /.modal-dialog --> 
                                </div><!-- /.modal -->       
                                       
                                       
                                <!--Modal for editing Education -->
                                     <!-- Modal -->
                                <div class="modal fade" id="editEducationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header vd_white" style="background:#d93b36">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <h4 class="modal-title" id="myModalLabel">Edit Details</h4>
                                </div>
                                <input type="hidden" id="hide" name="hide">
                                <div class="modal-body"> 
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Degree</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" name="degree" id="Degree" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Specialization</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" name="specialize" id="Specialize" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">University</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" id="University" name="University" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Start Month and year</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" name="startMonth" id="StartMonth" required>
                                                <input class="input-border-btm" type="text" name="startYear" id="StartYear" required>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-4 control-label">End Month and year</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" name="endMonth" id="EndMonth" required>
                                                <input class="input-border-btm" type="text" name="endYear" id="EndYear" required>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer background-login">
                                    <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                                    <button type="button" onClick = "editEdu()" name="editEducation" id="" class="btn vd_btn vd_bg-green">Edit</button>
                                </div>
                                </div><!-- /.modal-content --> 
                                </div><!-- /.modal-dialog --> 
                                </div><!-- /.modal -->       
                                        
                                        
                                    
                                    </div><!-- home-tab -->
    
                                   <!--Project tab -->
                                    <div id="projects-tab" class="tab-pane">
    	                            <div class="pd-20">
    	                            <!-- <div class="vd_info tr"> <button type="button" class="btn vd_btn btn-xs vd_bg-yellow" data-toggle="modal" data-target="#addProjectModal"> <i class="fa fa-pencil append-icon"></i>Add Project</button> </div>           -->
				                    <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-bolt mgr-10 profile-icon"></i> PROJECTS</h3>        
				                    <table class="table table-striped table-hover">
				                    <thead>
                                    <tr>
                                  	  <th>Sr.No</th>
									  <th>Project</th>                                
									  <th>Type</th>
									  <th>Client</th>
									  <th>Duration</th>
									  <th>Status</th>
                                    </tr>
							        </thead>
							        <tbody>

							        	 <?php
                                         if(isset($dte)){
                                        $datap = json_decode($dte,true);
                                        $count = 1;
                                        if(!empty($datap)){
                                            foreach($datap as $valuep){
                                                $add = $count++;
                                                ?>
								    <tr>
								    		
                                        <td><?php echo $add;?></td>
                                        <td><?php echo $valuep["project_name"]?></td>                    
                                        <td><?php echo $valuep["project_type"]?></td>
                                        <td><?php echo $valuep["project_client"]?></td>
                                        <td class="center"><?php echo $valuep["project_start"]?> - <?php echo $valuep["project_end"]?> </td>
                                        <td class="center">
                                            <span class="label label-default"><?php echo $valuep["project_status"]?></span>
                                        </td>
                                       
                                    </tr>

                                    <?php
                                	
                                	}
                                }
                            }

                                ?>
                                    
								    </tbody>
						            </table>
                                    <div class=""></div>        
                                    </div>
                                    
                                    <!--Add Project Modal-->
                                     <div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header vd_white" style="background:#d93b36">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <h4 class="modal-title" id="myModalLabel">Enter Project Details</h4>
                                </div>
                                <div class="modal-body"> 
                                <form method="POST" action="onSubmit" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Project Name</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" name="projectName" id="projectName" placeholder="Token Scrutinize" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Technology</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" name="technology" id="addTechnology" placeholder="BlockChain/AI" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Internal/External</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" id="addType" name="type" placeholder="External" required="">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-4 control-label" data-toggle="tooltip" data-placement="top" title="If internal then specify the faculty name">Client Name / Company Name</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" id="cName" name="cName" placeholder="xyz" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Start Date</label>
                                            <div class="col-sm-6 controls input-group">
                                                <input class="input-border-btm datepicker form-control" type="text" name="startMonth" id="startDate" required="">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-4 control-label">End Date</label>
                                            <div class="col-sm-6 controls input-group">
                                                <input class="input-border-btm datepicker form-control" type="text" name="endMonth" id="endDate" required="">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-4 control-label">Status</label>
                                            <div class="col-sm-6 controls">
                                                 <select class="form-control" id="status" name="ststus">
                                                  <option value="Finish">Finish</option>
                                                  <option value="Ongoing">Ongoing</option>
                                                  <option value="Pending">Pending</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                       </form> 
                                </div>
                                <div class="modal-footer background-login">
                                    <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                                    <button type="button" name="addProject" id="addProject" class="btn vd_btn vd_bg-green" onclick="addProjectDetailsDB()">Add</button>
                                </div>
                                </div><!-- /.modal-content --> 
                                </div><!-- /.modal-dialog --> 
                                </div><!-- /.modal -->    
                                    
                                
                                <!--Editing PRoject details-->
                                <div class="modal fade" id="editProjectModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header vd_white" style="background:#d93b36">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <h4 class="modal-title" id="myModalLabel">Edit Project Details</h4>
                                </div>
                                <div class="modal-body"> 
                                    <form class="form-horizontal">
                                        <input type="hidden" id="hided" name="hide">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Project Name</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" name="projectName" id="pName" value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Technology</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" name="technology" id="tech" value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Internal/External</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" id="types" name="type" value="" required>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-4 control-label" data-toggle="tooltip" data-placement="top" title="If internal then specify the faculty name">Client Name / Company Name</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" id="client" name="cName" value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Start Date</label>
                                            <div class="col-sm-6 controls input-group">
                                                <input class="input-border-btm datepicker form-control" type="text" name="editStartDate" id="editStartDate" value="" required>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-4 control-label">End Date</label>
                                            <div class="col-sm-6 controls input-group">
                                                <input class="input-border-btm datepicker form-control" type="text" name="editEndMonth" id="editEndDate" value="" required>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-4 control-label">Status</label>
                                            <div class="col-sm-6 controls">
                                                 <select class="form-control" id="pStatus" name="status">
                                                  <option value="Finish">Finish</option>
                                                  <option value="Ongoing">Ongoing</option>
                                                  <option value="Pending">Pending</option>
                                                </select>
                                            </div>
                                        </div>
                                         <div class="modal-footer background-login">
                                    <button type="submit" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                                    <button type="submit" name="editProject" onclick="editPro()" id="editProject" class="btn vd_btn vd_bg-green">Edit</button>
                                </div>
                                    </form>
                                </div>
                               
                                </div><!-- /.modal-content --> 
                                </div><!-- /.modal-dialog --> 
                                </div><!-- /.modal -->    
                                    
                                            
                                </div>
    
                                <!--Work Experinece tab for ALUMNI -->  

                                    <div id="experience-tab" class="tab-pane">

                                    <div class="pd-20">
                                    <!-- <div class="vd_info tr"> <button type="button" class="btn vd_btn btn-xs vd_bg-yellow" data-toggle="modal" data-target="#addExpModal"> <i class="fa fa-pencil append-icon"></i>Add</button> </div>        -->
                                    <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-bolt mgr-10 profile-icon"></i> EXPERIENCE</h3>        
                                     
<?php
                                         if(isset($edt)){

                                        $edata = json_decode($edt,true);
                                        if(!empty($edata)){
                                            foreach($edata as $evalue){
                                                ?>
                                     <div class="row">

                                    <div class="col-sm-6">
                                               <div class="content-list content-menu">
                                                <ul class="list-wrapper">


                                                 <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"><b><?php echo $evalue["exp_designation"]?></b><br><a href="#"><?php echo $evalue["exp_companyName"]?></a><span class="menu-info"><span class="menu-date"> <?php echo $evalue["exp_expStartDate"]?> ~ <?php echo $evalue["exp_expEndDate"]?></span></span></span> </li>         
                                                </ul>
                                                </div>  
                                    </div>
                                    <div class="col-sm-3 col-sm-offset-3 text-right">
                                            <!-- <button type="button" onclick="editExpDetailsDB(<?php echo $evalue["exp_id"];?>)" class="btn btn-xs btn-primary d-slign" data-toggle="modal" data-target="#editExpModal"><i class="fa fa-pencil append-icon"></i>Edit</button> 
                                            <button type="button" name="deleteEducation" id="deleteExp" onclick="deleteExpDetailsDB(<?php echo $evalue["exp_id"]; ?>);"  class="btn btn-xs btn-danger d-align"><i class="fa fa-times append-icon"></i>Delete</button>  -->
                                    </div>
                           
                                    </div>

                                     <?php

                                }
                            }  
                        }
                            ?>
                                    </div><!-- pd-20 -->   
                                    <!-- row --><hr class="pd-10"/> 
                                   
                                   
                                   
                                   
                                   <!-- Add Experience Modal-->
                                    <div class="modal fade" id="addExpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header vd_white" style="background:#d93b36">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <h4 class="modal-title" id="myModalLabel">Experience Details</h4>
                                </div>
                                <div class="modal-body"> 

                                    <input type="hidden" id="hiden" name="hide">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Designation</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" name="designation" id="designation" placeholder="Software Developer Enginner" required>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-4 control-label">Company Name</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" id="companyName" name="companyName" placeholder="Amazon India" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Start Date</label>
                                            <div class="col-sm-6 controls input-group">
                                                <input class="input-border-btm datepicker form-control" type="text" name="expStartDate" id="expStartDate" required>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-4 control-label">End Date</label>
                                            <div class="col-sm-6 controls input-group">
                                                <input class="input-border-btm datepicker form-control" type="text" name="expEndDate" id="expEndDate" required>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer background-login">
                                    <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                                    <button type="button" name="addProject" id="addProject" class="btn vd_btn vd_bg-green" onClick = "addExpDetailsDB()">Add</button>
                                </div>
                                </div><!-- /.modal-content --> 
                                </div><!-- /.modal-dialog --> 
                                </div><!-- /.modal --> 
                                   
                                   
                                <!--Experience Edit Details-->
                                 <div class="modal fade" id="editExpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header vd_white" style="background:#d93b36">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <h4 class="modal-title" id="myModalLabel">Edit Experience Details</h4>
                                </div>
                                <div class="modal-body"> 
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Designation</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" name="designation" id="design" value="" required>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-4 control-label">Company Name</label>
                                            <div class="col-sm-6 controls">
                                                <input class="input-border-btm" type="text" id="cN" name="cN" value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Start Date</label>
                                            <div class="col-sm-6 controls input-group">
                                                <input class="input-border-btm datepicker form-control" type="text" name="editExpStartDate" id="expStart" value="" required>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-4 control-label">End Date</label>
                                            <div class="col-sm-6 controls input-group">
                                                <input class="input-border-btm datepicker form-control" type="text" name="editExpEndDate" id="expEnd" value="" required>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer background-login">
                                    <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                                    <button type="button" name="editExp" id="editExp" class="btn vd_btn vd_bg-green" onclick="editExp();">Add</button>
                                </div>
                                </div><!-- /.modal-content --> 
                                </div><!-- /.modal-dialog --> 
                                </div><!-- /.modal -->    

    	                            
                                    
                                   </div>   
                                   
                                    <div id="friends-tab" class="tab-pane">
    	                            <div class="pd-20">
        	                        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-users mgr-10 profile-icon"></i> FRIENDS</h3>

                                    <!-- <div class = "searchFriendDiv">
                                        <br>
                                        <form class="searchFriend" style="margin:auto;max-width:500px">
                                            <td><input type="text"  placeholder = "Enter an email ID" id="searchEmail"></td>
                                            <button type="button" onClick = "addFriends()">Add</button>
                                        </form>
                                    </div> -->

        	                        <div class="content-grid column-xs-3 column-sm-4 column-md-4 column-lg-6 height-xs-4 mgbt-xs-20">	
                                    <div>
                                    <ul class="list-wrapper" id = "friendsSectionID">
                                    <?php
                                    if(!empty($friendsDetailsArray)){
                                    foreach($friendsDetailsArray as $value){ 
                                        $arr = explode("@", $value["email"]);
                                        $emailName = $arr[0];   
                                        ?>

                                    
                                        <li> 
                                            <a href="<?php echo site_url("showFriendsPage").'/'.$emailName;?>" > 
                                                <span class="menu-icon"><img src="<?php echo base_url(); ?>img/avatar/userUploads/<?php echo $value["profilePicture"]; ?>" alt="example image"></span> 
                                            </a>
                                            <span class="menu-text"><?php echo $value["firstName"]." ".$value["lastName"]?>
                                                <!-- <span class="menu-info">
                                                    <span class="menu-date">San Diego</span>
                                                </span> -->
                                            </span> 
                                        </li>
                                    <?php
                                    }
                                }
                                ?>
                                                       
                                    </ul>
                                    </div>                                                   </div>
                                    </div><!-- pd-20 -->   
                                    </div><!-- photos tab -->     
                                    </div><!-- tab-content --> 
                                </div><!-- tabs-widget -->              
                            </div>
                        </div><!-- row --> 
                    </div><!-- .vd_content-section --> 
                </div><!-- .vd_content --> 
            </div><!-- .vd_container --> 
        </div><!-- .vd_content-wrapper --> 
        <!-- Middle Content End --> 
    </div><!-- .container --> 
</div><!-- .content -->


</div>

<!-- .vd_body END  -->
<a id="back-top" href="<?php echo base_url(); ?>#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>


<!--<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript  --> 
<!-- Placed at the end of the document so the pages load faster --> 
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
<script type="text/javascript" src="<?php echo base_url(); ?>plugins/isotope/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>plugins/isotope/forStudentProfilePage.js"></script>


<script type="text/javascript">

function onEditJS(){
    window.location.href = "<?php echo site_url("fillDetailsFromDB");?>";
}
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
    
     $(".datepicker").datepicker({ 
				autoclose: true, 
				todayHighlight: true,
				dateFormat: "yy/mm/dd"
		  });//.datepicker('update', new Date());
	
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