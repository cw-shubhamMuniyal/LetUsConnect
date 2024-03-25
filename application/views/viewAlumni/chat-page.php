<html>  
    <head>  
      <title>Chat Page</title>  
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />

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
    <body>  

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
                        <!-- <div class="menu-icon"><img src="<?php echo base_url(); ?>img/avatar/userUploads/<?php echo $stuProfile["profilePicture"]; ?>" alt="example image"></div>  -->
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
                    </div> <!-- child-menu -->                      
                    </div>   <!-- vd_mega-menu-content --> 
                    </li>    
                    <li id="top-menu-profile" class="profile mega-li"> 
                        <a href="#" class="mega-link"  data-action="click-trigger"> 
                            <!-- <span  class="mega-image"><img src="<?php echo base_url(); ?>img/avatar/userUploads/<?php echo $stuProfile["profilePicture"]; ?>"></span> -->
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

        <div class="container">
   <br />
   
   <h3 align="center">Chat Page</a></h3><br />
   <br />
   
   <div class="table-responsive">
    <h4 align="center">Your friends</h4>
    <p align="right">Hi - <?php echo $_SESSION['emailSession']; ?> - <a href="<?php echo site_url('studentLogout');?>">Logout</a></p>
    <div id="user_details"></div>
    <div id="user_model_details"></div>
   </div>
  </div>
   

<script type="text/javascript">  
  $(document).ready(function(){
  
  fetch_user();

  setInterval(function(){
    update_last_activity();
    fetch_user();
    update_chat_history_data();
  }, 5000);

  function fetch_user()
  {
    var pathArray = window.location.pathname.split('/');
    var hostName = pathArray[1];
    $.ajax({
    //  url:"getOthersChats",
    url : "/"+hostName+'/alumni/fetchUser/getOthersChats/',
    method:"POST",
    success:function(data){
      $('#user_details').html(data);
    }
    });
  }

  function update_last_activity()
  {
    var pathArray = window.location.pathname.split('/');
    var hostName = pathArray[1];  
    $.ajax({
    url:"/"+hostName+'/alumni/fetchUser/update_last_activity/',
    success:function()
    {

    }
    })
  }

  function make_chat_dialog_box(to_user_id, to_user_name)
  {
    var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="You have chat with '+to_user_name+'">';
    modal_content += '<div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
    modal_content += fetch_user_chat_history(to_user_id);
    modal_content += '</div>';
    modal_content += '<div class="form-group">';
    modal_content += '<textarea name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control"></textarea>';
    modal_content += '</div><div class="form-group" align="right">';
    modal_content+= '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">Send</button></div></div>';
    $('#user_model_details').html(modal_content);
  }

  $(document).on('click', '.start_chat', function(){
      var to_user_id = $(this).data('touserid');
      var to_user_name = $(this).data('tousername');
      make_chat_dialog_box(to_user_id, to_user_name);
      $("#user_dialog_"+to_user_id).dialog({
        autoOpen:false,
        width:400
      });
      $('#user_dialog_'+to_user_id).dialog('open');
    });
  })

  $(document).on('click', '.send_chat', function(){

  var pathArray = window.location.pathname.split('/');
  var hostName = pathArray[1]; 

  var to_user_id = $(this).attr('id');
  var chat_message = $('#chat_message_'+to_user_id).val();
  $.ajax({
   url:"/"+hostName+'/alumni/fetchUser/insertChat/',
   method:"POST",
   data:{to_user_id:to_user_id, chat_message:chat_message},
   success:function(data)
   {
    $('#chat_message_'+to_user_id).val('');
    $('#chat_history_'+to_user_id).html(data);
   }
  })
 });

  function fetch_user_chat_history(to_user_id)
 {
  var pathArray = window.location.pathname.split('/');
  var hostName = pathArray[1]; 
  $.ajax({
   url:"/"+hostName+'/alumni/fetchUser/fetchChatHistoryIntermediateFn/',
   method:"POST",
   data:{to_user_id:to_user_id},
   success:function(data){
    $('#chat_history_'+to_user_id).html(data);
    console.log(data+"pls");
   },
   error:function(err){
    console.log(err+"pls1");
   }
  });
 }

 function update_chat_history_data()
 {
  $('.chat_history').each(function(){
   var to_user_id = $(this).data('touserid');
   fetch_user_chat_history(to_user_id);
  });
 }

 </script>

<a id="back-top" href="<?php echo base_url(); ?>#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>


<!--<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

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

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
 
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