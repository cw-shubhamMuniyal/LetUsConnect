var dataTable;
var rownum;
var data_table;
$(document).ready(function() {
/*Code for datatable file sharing*/
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})       



        var name = getUrlParameter('name');
        dataTable = $('#sharedFilesTable').DataTable({
          'processing': true,
          'serverSide': true,
          'serverMethod': 'post',
          'ajax': {
              url: 'tpo/tpoDetails/getFiles',
              data: function(data){
                  // Read values
                  data.request = 1,
                  data.name = name
              }
          },
          'columns': [
            { data: 'sr_no'},
            { data: 'file_name' },
            { data: 'doc' },
            { data: 'dou' },          
            { data: 'dl' },
            { data: 'share' },
            { data: 'delete'}
        ],
          'columnDefs': [ {
              'targets': [], // column index (start from 0)
              'orderable': false,  // set orderable false for selected columns
          }],
          "rowCallback": function( row, data, index ) {
            //alert(data.file_name);
            $('td:eq(4)', row).html( '<a class="text-primary" href="http://localhost/ci/uploaded/'+name+'/sharedFiles/'+data.file_name+'" target="_blank">Download</a>');
          }
          //'dom': 'Bfrtip',
        });

      //   $("#sharedFilesTable").dataTable().find("tbody").on('click', 'tr', function () {
      //     data_table = dataTable.row(this).data();
      //     rownum = this.rowIndex;
      // });


        

        $(document).on('click','#addFile',function(){
          var form = $('#fileUpload')[0]; // You need to use standard javascript object here
          var formdata = new FormData(form);
          var name = getUrlParameter('name');
          formdata.append('upload',1);
          formdata.append('name',name);
          $.ajax({
            url: 'tpo/tpoDetails/fileUpload',
            data: formdata,
            type: 'POST',
            processData: false,
            contentType: false,
            cache: false,
            success: function(response){
             // $data = JSON.parse(response);
              $('#uploadFile').modal('hide');
              dataTable.ajax.reload();
            }
          });
          
         });

          // Delete record
        $('#delete_record').click(function(){
            var deleteids_arr = [];
            // Read all checked checkboxes
            $("input:checkbox[class=delete_check]:checked").each(function () {
                deleteids_arr.push($(this).val());
            });

            // Check checkbox checked or not
            if(deleteids_arr.length > 0){

                // Confirm alert
                swalWithBootstrapButtons.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonText: 'Yes, delete it!',
                  cancelButtonText: 'No, cancel!',
                  reverseButtons: true
                }).then((result) => {
                  if (result.value) {
                    $.ajax({
                      url: 'tpo/tpoDetails/deleteFile',
                      type: 'post',
                      data: {request: 2,deldata: deleteids_arr,name: name},
                      success: function(response){
                        var msg = JSON.parse(response);
                        if(JSON.parse(response) == "success")
                        {
                              swalWithBootstrapButtons.fire({
                                title: 'Deleted!',
                                text: 'Your file has been deleted.',
                                icon: 'success',
                                showConfirmButton: false,
                                timer: 1000
                              }).then(() => {
                                $('#deletecheckall').prop('checked',false);
                                $('.delete_check').prop('checked',false);
                                
                                dataTable.ajax.reload()
                              });
                        }
                        
                      }
                  });
                  } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                  ) {
                    swalWithBootstrapButtons.fire(
                      'Cancelled',
                      'Your file is safe :)',
                      'error'
                    )
                  }
                });


            }
        });


      function deletecheckbox(){

          // Total checkboxes
          var length = $('.delete_check').length;
      
          // Total checked checkboxes
          var totalchecked = 0;
          $('.delete_check').each(function(){
              if($(this).is(':checked')){
                  totalchecked+=1;
              }
          }); 
          // Checked unchecked checkbox
          if(totalchecked == length){
              $("#deletecheckall").prop('checked', true);
          }else{
              $('#deletecheckall').prop('checked', false);
          }
      }

       // Check all 
        $('#deletecheckall').click(function(){
          if($(this).is(':checked')){
              $('.delete_check').prop('checked', true);
          }else{
              $('.delete_check').prop('checked', false);
          }
      });
      //end of delete record


      //share the files
      $("#sharedFilesTable").on("click", ".sharebutton", function(){
        var value = $(this).val();
        var id  = $(this).attr('id');
        // alert(id);
       // alert($(this).id);
         // Confirm alert
         swalWithBootstrapButtons.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, Share it!',
          cancelButtonText: 'No, cancel!',
          reverseButtons: true
        }).then((result) => {
          if (result.value) {
            $.ajax({
              url: 'tpo/tpoDetails/shareFile',
              type: 'post',
              data: {request: 3,share: value},
              success: function(response){
                var msg = JSON.parse(response);
                if(JSON.parse(response) == "success")
                {
                      swalWithBootstrapButtons.fire({
                        title: 'Shared!',
                        text: 'Your file has been shared.',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1000
                      }).then(() => {
                        //  alert(rownum);
                        //  var row = rownum - 1;
                        //  ///alert('#sharedFilesTable tbody tr:eq('+row+')');
                        //  //console.log(data_table['share']);
                        //  var tr = $('#sharedFilesTable tbody tr:eq('+row+')');
                        //  var row_data = dataTable.row(tr).data();
                        //  console.log(row_data);
                        //  row_data['share'] = "<label class='text-success'>Shared</label>";
                        //  dataTable.row(tr).data(row_data).draw().invalidate(); 
                        //  console.log(tr);
                        //  //dataTable.fnUpdate("<label class='text-success'>Shared</label>",row,5);
                        // //alert(row_data.share);
                        dataTable.ajax.reload();
                      });
                }
                
              }
          });
          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Cancelled',
              'Your file is safe :)',
              'error'
            )
          }
        });       
     });

        

        

/*End of Code for datatable file sharing*/ 




              /*Code to stay on active tab on refresh*/
              $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });

            // Here it saves the index to which the tab corresponds. You can see it in the chrome dev tool.
            var activeTab = localStorage.getItem('activeTab');

            // In the console it will show you the tab where you made the last click and what
            //save in "activeTab". I leave the console for you to see. And when you refresh
            // the browser, the last one where you clicked will be active.
            console.log(activeTab);

            if (activeTab) {
              $('a[href="' + activeTab + '"]').tab('show');
            }
            /*End of Code to stay on active tab on refresh*/

   


    //$('#announcement_card').hide();
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

  // if(!document.cookie)
  // {
  //   alert("i got the cookie");
  // }
  // else{
  //   alert("I did not got the cookie");
  // }
  show_company_details_table()
              
              function show_company_details_table()
              {
                      var name = getUrlParameter('name');
                        $.ajax({
                                  url: 'checking',
                                  type: 'POST',
                                  data: {
                                      'checkCompany': 1,
                                      'name': name
                                    },
                                  success : function(response){
                                      var c_new = JSON.parse(response);
                                      if(c_new.msg=='success'){
                                        var html = '';
                                        var found = 1; //listCookies(name);
                                        $("#addDetails").attr("disabled", true);
                                            var c = JSON.parse(c_new[0].detail);
                                            html += '<br>'+'<table class="table table-bordered">'+
                                            '<tbody>'+
                                              '<tr>'+ 
                                                  '<th>Ref No.</th>'+
                                                  '<td>'+c.ref_no+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Date of Announcement</th>'+
                                                  '<td>'+c.doa+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Date of Campus Placement</th>'+
                                                  '<td>'+c.doc+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Name of the Company</th>'+
                                                  '<td>'+c.noc+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Type of company as per KJSCE placement policy<br> (Core/IT/Other - Dream/Non Dream/Super Dream)</th>'+
                                                  '<td>'+c.policy+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Salary per annum</th>'+
                                                  '<td>'+c.salary+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Brief Job Description (JD) :<br>If attached in separate document <br>then mention refer separate document</th>'+
                                                  '<td>'+ c.description+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Address of corporate office of company</th>'+
                                                  '<td>'+c.address+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Placement for UG/PG/ both</th>'+
                                                  '<td>'+c.placement_for+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Eligibility Criteria:<br> CGPI / Live KT etc</th>'+
                                                  '<td>'+c.eligible+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Branches eligible to apply :<br>UG-COMP/ETRX/EXTC/IT/MECH<br>PG-COMP/ETRX/EXTC/IT/MECH'+ '(EE/CC)</th>'+
                                                  '<td>'+c.branches+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Google Link to register</th>'+
                                                  '<td><a href="'+c.register+'" style="color:blue">'+c.register+'</a></td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Last date to register</th>'+
                                                  '<td>'+c.ldr+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Mode of selection</th>'+
                                                  '<td>'+c.selection+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Date of PPT / Test / Interview</th>'+
                                                  '<td>'+c.dop+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Time to report</th>'+
                                                  '<td>'+c.tor+'</td>'+
                                              '</tr>'+
                                                '<tr>'+ 
                                                  '<th>Venue to report</th>'+
                                                  '<td>'+c.vtr+'</td>'+
                                              '</tr>'+
                                                '<tr>'+ 
                                                  '<th>Is the company visiting for the first time?<br> Yes/No</th>'+
                                                  '<td>'+c.visiting+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>If No, then details of past how many times<br> visited for campus placement at KJSCE</th>'+
                                                  '<td>'+c.count_visiting+'</td>'+
                                              '</tr>'+
                                                '<tr>'+ 
                                                  '<th>Is it a campus placement or Pool Campus placement?</th>'+
                                                  '<td>'+c.cp+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Is it a campus placement for KJSIT also?<br> Yes/No</th>'+
                                                  '<td>'+c.p_for_kjscit+'</td>'+
                                              '</tr>'+
                                              '<tr>'+ 
                                                  '<th>Location of Placement of <br> Selected students</th>'+
                                                  '<td>'+c.place_location+'</td>'+
                                              '</tr>'+
                                                '<tr>'+ 
                                                  '<th>Any specific Instructions</th>'+
                                                  '<td>'+c.instruction+'</td>'+
                                              '</tr>'+
                                            '</tbody>'+
                                          '</table>';
                                          if(found){        
                                            html +='<div id="criteria">'+
                                                  '<div class="form-group">'+
                                                  '<label class="col-sm-3 control-label">CGPI</label>'+
                                                  '<div class="col-sm-4 controls">'+
                                                  '<input type="text" placeholder="CGPI >= 6" class="width-50" id="cgpi">'+'</div>'+'</div>'+'<br>'+'<br>'+'<br>'+
                                                  '<div class="form-group">'+
                                                  '<label class="col-sm-3 control-label">UG</label>'+
                                                  '<div class="col-sm-7 controls">'+
                                                  '<div class="vd_checkbox checkbox-danger">'+
                                                  '<input type="checkbox" value="COMPS" id="checkbox-3" class="UG">'+
                                                  '<label for="checkbox-3"> COMPS </label>'+
                                                  '<input type="checkbox" value="IT" id="checkbox-4" class="UG">'+
                                                  '<label for="checkbox-4"> IT </label>'+
                                                  '<input type="checkbox" value="ETRX" id="checkbox-5" class="UG">'+
                                                  '<label for="checkbox-5"> ETRX </label>'+
                                                  '<input type="checkbox" value="EXTC" id="checkbox-6" class="UG">'+
                                                  '<label for="checkbox-6"> EXTC </label>'+
                                                  '<input type="checkbox" value="MECH" id="checkbox-7" class="UG">'+
                                                  '<label for="checkbox-7"> MECH </label>'+
                                                  '</div>'+'</div>'+'</div>'+'<br>'+'<br>'+'<br>'+
                                                  '<div class="form-group">'+
                                                  '<label class="col-sm-3 control-label">PG</label>'+
                                                  '<div class="col-sm-7 controls">'+
                                                  '<div class="vd_checkbox checkbox-danger">'+
                                                  '<input type="checkbox" value="COMPS" id="checkbox-8" class="PG">'+
                                                  '<label for="checkbox-8"> COMPS </label>'+
                                                  '<input type="checkbox" value="IS" id="checkbox-9" class="PG">'+
                                                  '<label for="checkbox-9"> IS </label>'+
                                                  '<input type="checkbox" value="ETRX" id="checkbox-10" class="PG">'+
                                                  '<label for="checkbox-10"> ETRX </label>'+
                                                  '<input type="checkbox" value="EXRC" id="checkbox-11" class="PG">'+
                                                  '<label for="checkbox-11"> EXTC </label>'+
                                                  '<input type="checkbox" value="EE" id="checkbox-12" class="PG">'+
                                                  '<label for="checkbox-12"> EE </label>'+
                                                  '</div>'+'</div>'+'</div>'+'<br>'+'<br>'+'<br>'+
                                                  '<div class="form-group">'+
                                                  '<label class="col-sm-3 control-label">Company Status</label>'+
                                                  '<div class="col-sm-7 controls">'+
                                                  '<select class="width-40" id="status">'+
                                                  '<option value="super-dream">Super Dream</option>'+
                                                  '<option value="dream">Dream</option>'+
                                                  '<option value="non-dream">Non Dream</option>'+
                                                  '<option value="dream and non-dream">Dream &amp; Non Dream</option>'+
                                                  '</select>'+'</div>'+'</div>'+'<br>'+'<br>'+
                                                  '<button class="btn btn-primary " data-toggle="modal" data-target="" id="send_mail"> Send Mail</button></div>';
                                          }    
                                          $('#displayCompanyDetails').append(html);
                                    }
                                    else{
                                      console.log(c_new.msg);
                                    }
                                    show_announcements(name);
                                  }
                          });
              }
              function show_announcements(name)
              {
                  $.ajax({
                     url: 'tpo/tpoDetails/getAnnounce',
                     type: 'POST',
                     data: {
                         'announce': 1,
                         'name': name
                     },
                      // contentTpe: 'application/json; charset=utf-8',
                      // dataTpe: 'json',
                      success : function (response){
                        //alert(response);
                          var data = JSON.parse(response);
                          //alert(data.length);
                              for(var i=0; i < data.length ; i++){
                              //alert(data[i].announce);
                              var html = '<div class="panel widget">'+
                                          '<div class="panel-heading vd_bg-red ">'+
                                              '<h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-th-large"></i> </span>Announcement '+data[i].a_no+'</h3>'+
                                              '<div class="vd_panel-menu">'+
                                                  '<div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon "> <i class="fa fa-minus"></i> </div>'+
                                                  '<div data-action="close" data-original-title="Close" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="fa fa-times" aria-hidden="true"></i> </div>'+
                                              '</div><!-- vd_panel-menu -->'+ 
                                          '</div>'+
                                          '<div class="panel-body">'+
                                              '<div class="col-sm-10">'+
                                                  '<p>'+data[i].announce+'</p>'+
                                                  '<!--Comapny details Table-->'+
                                                  '<div class="col-md-12" id="displayCompanyDetails">'+   
                                                '</div>'+
                                              '</div>'+
                                          '</div>'+
                                      '</div>';
                              $('#announcement_card').append(html);
                                  var a = JSON.parse(data[i].attach);
                                  for (var key in a) {
                                      //alert(a[key]);
                                  }
                              }    
                      }  
                  });
              }
               
              
              function get_files(){
                var dirname = getUrlParameter('name');
                $.ajax({
                  url: 'tpo/tpoDetails/getFiles',
                  data: { 
                    files: 1,
                    name: dirname
                  },
                  type: POST,
                  success: function(response)
                  {
                    
                  }
                });
              }
           
   
                   //building announcement with card
           $(document).on('click','#create_announcement',function(){
               //its the CKEDITOR method  to get the contents.
                var name = getUrlParameter('name');
               var announcement = CKEDITOR.instances['editor1'].getData();


               var form = $('form')[0]; // You need to use standard javascript object here
                var formdata = new FormData();
                formdata.append('create_announce',1);
                var filesLength = document.getElementById('a_files').files.length;
                
                  for(var i=0;i<filesLength;i++){
                    formdata.append("a_files[]", document.getElementById('a_files').files[i]);
                  }
                
                  

                 var other_data = $('form').serializeArray();
               $.each(other_data,function(key,input){
                   formdata.append(input.name,input.value);
               });
               formdata.append('name',name);
               formdata.append('msg',announcement);
               CKEDITOR.instances['editor1'].setData('');
               $.ajax({
                        url : 'tpo/tpoDetails/sendAnnounce',
                        data : formdata,
                        type : 'POST',
                        processData: false,
                        contentType: false,
                        cache: false,
                        success : function (response){
                          $('#myModal1').modal('hide');
                          var msg = JSON.parse(response)
                          if(msg.success=='true'){
                                          Swal.fire({
                                            position: 'center',
                                            icon: 'success',
                                            title: 'Announcement recorded and sent'
                                    }).then(() => {
                                      setInterval(location.reload(),1000);
                                      
                                });
                          }else{
                                    Swal.fire({
                                      position: 'center',
                                      icon: 'error',
                                      title: 'Please try again!'
                              });
                          }
                       }
                   });   
           });



           
});

function listCookies(name) {
  var theCookies = document.cookie.split(';');
  //alert(theCookies);
  var aString = []; 
  for (var i = 0 ; i < theCookies.length; i++) {
      aString[i] = String(theCookies[i].split('=')[1]);
  }
  //alert(aString);
  var found = aString.includes(name);
  return found;
} 


function getUrlParameter(sParam) {
  var sPageURL = window.location.search.substring(1),
   sURLVariables = sPageURL.split('&'),
   sParameterName,
   i;
  for (i = 0; i < sURLVariables.length; i++){
      sParameterName = sURLVariables[i].split('=');

      if (sParameterName[0] === sParam) {
          return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
      }
  }
}


$(document).on('click', '#btn_add', function(){    
  var form = $('#companyEntry')[0]; // You need to use standard javascript object here
   var formdata = new FormData(form);
   formdata.append('create',1);
  //  var filesLength=document.getElementById('attach').files.length;
  //  console.log(filesLength);
  //  for(var i=0;i<filesLength;i++){
  //  formdata.append("attach[]", document.getElementById('attach').files[i]);
  //  console.log(document.getElementById('attach').files[i]);
  //  }   
  
  //   var other_data = $('form').serializeArray();
  // $.each(other_data,function(key,input){
  //     formdata.append(input.name,input.value);
  // });
   //var str = $('#companyDetails').serialize()+'&create=1';
  
  var name = getUrlParameter('name');
  formdata.append('name',name);
  $.ajax({
      url : 'tpo/tpoDetails/sendCompanyDetail',
      data : formdata,
      type : 'POST',
      processData: false,
      contentType: false,
      cache: false,
      //dataType: 'json',
      success : function (response){
        // console.log();
        // alert(response);
          var msg = JSON.parse(response);
          //document.getElementById("companyDetails").reset();
          $('#myModal').modal('hide');
          if(msg.success == 'success')
          {
                      Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Details recorded'
                }).then(() => {
                  setInterval(location.reload(),1000);
                  
            }); 

          }
          else{
                      Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Please try again!'
                });
          }
          
      }
  });
});

  //sending the criteria deyails for mail purpose
  $(document).on('click','#send_mail',function(){
    var UG = $('.UG:checked').map(function(){
        return this.value;
    }).get();
   var PG = $('.PG:checked').map(function(){
        return this.value;
    }).get();
    var cgpi = $("#cgpi").val();
    var status = $( "#status" ).val();
   var name = getUrlParameter('name');    
   $.ajax({
       url : 'tpo/tpoDetails/mailList',
      //  cache: false,
      datatype: 'json',
       data : {
           'UG' : UG,
           'PG' : PG,
           'status' : status,
           'cgpi' : cgpi,
           'send_mail' : 1,
           'name' : name
       },
       type : 'POST',
       success : function(response){
        alert(response);
        var msg = JSON.parse(response);
           if(msg.success=="true")
           {
                              Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Mail Sent'
                        }).then(() => {
                          //location.reload();
                          //document.getElementById("criteria").style.display="none";
                          //document.cookie = name+"="+name+"; expires=Sun, 23 Feb 2020 12:00:00 UTC";
                          setInterval(location.reload(),1000);     
                    });
           }
           else{
             console.log(msg.success);
           }
        //console.log(response); 
       }
   }); 
   
});

