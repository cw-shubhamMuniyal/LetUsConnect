var dataTable1;
var dataTable2;
var name;
var dataTable;
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' '+time;
$(document).ready(function(){

    "use strict";

    name = getUrlParameter('name');
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



    $('#sharedFilesTable').DataTable();

    // $('#empTable').DataTable();

    // Initialize datatable
    dataTable = $('#empTable').DataTable({
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        'ajax': {
            'url':'tpoOffice/tpoOfficeCompany/datatableLoad',
            'data': function(data){
                // Read values
                data.request = 1;
                data.name = name;
            }
        },
        'columns': [
            { data: 'roll_no' },
            { data: 'stud_name' },
            { data: 'dept' },          
            { data: 'course' },
			 { data: 'reason'},
            { data: 'action' },
            { data: 'edit'}
        ],
        'columnDefs': [ {
            'targets': [5], // column index (start from 0)
            'orderable': false,  // set orderable false for selected columns
        }],
		 'lengthMenu':[[50,150,250,500,600,-1],[50,150,250,500,600,700]],
        'dom': 'lBfrtip',
		  'buttons': [
		  {
			  extend: 'print',
			  title: 'Registered Student for Microsoft - '+dateTime,
			   exportOptions: {
                columns: [0,1,2,3,4]
			   }
		  },
		 {
           extend: 'pdfHtml5',
		   title: 'Registered Student for Microsoft - '+dateTime,
           footer: true,
           exportOptions: {
                columns: [0,1,2,3,4]
            },
			customize : function(doc) {
					  var age = dataTable.column(4).data().toArray();
					  for (var i = 0; i < age.length; i++) {
						if (age[i]!="none") {
						  doc.content[1].table.body[i+1][0].fillColor = 'red';
						  doc.content[1].table.body[i+1][1].fillColor = 'red';
						  doc.content[1].table.body[i+1][2].fillColor = 'red';
						  doc.content[1].table.body[i+1][3].fillColor = 'red';
						  doc.content[1].table.body[i+1][4].fillColor = 'red';
						}
					  };
				 doc.styles['td:nth-child(4)'] = { 
				   width: '100px',
				   'max-width': '100px'
				}
			}
       },
       {
           extend: 'csv',
		   header: false,
           footer: false,
		   title: 'Registered Student for Microsoft - '+dateTime,
			 exportOptions: {
                columns: [0,1,2,3,4]
            },
       },
       {
           extend: 'excel',
           footer: false,
		    title: 'Registered Student for Microsoft - '+dateTime,
			 exportOptions: {
                columns: [0,1,2,3,4]
            },
			customize : function(xlsx) {
				var sheet = xlsx.xl.worksheets['sheet1.xml'];
				var skippedHeader = false;
				$('row:first c',sheet).attr('s','51')
				 $('row', sheet).each( function(x){
					 if(skippedHeader){
						if($('c[r=E'+x+'] t', sheet).text() != 'none'){
							//console.log(this);
							 $('row:nth-child('+x+') c', sheet).attr('s', '40');
						}
					  }
					  else{
						  skippedHeader=true;
					  }
					});
				
			}
       }         
    ]
  
       
    });

    // Check all 
    $('#checkall').click(function(){
        if($(this).is(':checked')){
            $('.delete_check').prop('checked', true);
        }else{
            $('.delete_check').prop('checked', false);
        }
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
            var confirmdelete = confirm("Do you really want to Delete records?");
            if (confirmdelete == true) {
                $.ajax({
                    url: 'tpoOffice/tpoOfficeCompany/deleteRecord',
                    type: 'post',
                    data: {request: 2,deleteids_arr: deleteids_arr,name: name},
                    success: function(response){
                        var data = JSON.parse(response);
                        alert(data);
                        if(data=="success")
                        {
                            setInterval('location.reload()',1000);
                        }
                       
                    }
                });
            } 
        }
    });


    $('#Criteria_Submit').click(function(){
        $('#criteriModal').modal('hide');
      
        var file;

        var formdata = new FormData();

        var b_tech = $('.B_tech:checked').map(function(){
            return this.value;
        }).get(); 
        formdata.append("B_tech[]",b_tech);
        formdata.append("blength",b_tech.length);
        
       var m_tech = $('.M_tech:checked').map(function(){
            return this.value;
        }).get();
        //alert(m_tech.length);
        formdata.append("M_tech[]",m_tech);
        formdata.append("mlength",m_tech.length);

        var cgpi = $( "#Cpointer" ).val();
        formdata.append("cgpi",cgpi);

        var status = $( "#status" ).val();
        formdata.append("status",status);

        var sem = $( "#sem" ).val();
        formdata.append("sem",sem);
  
        var pass = $( "#pass" ).val();
        formdata.append("pass",pass);
      
        file = document.getElementById('regCsvFile').files[0];
        formdata.append("file",file);
        formdata.append("check","criteria_file");
        formdata.append("name",name);
        //alert(sem+" "+pass);

        // for(var i=0;i<filesLength;i++){
        //     formdata.append("regFile[]", document.getElementById('regCsvFile').files[i]);
        // } 
        //formdata.append("check","criteria_file");
        ///alert(file);
        $('#loader').css("visibility", "visible");
        $('#simple').css("opacity",0.5);

        $.ajax({
            url : 'tpoOffice/tpoOfficeCompany/Criteria',
            data: formdata,
            type : 'POST',
            processData: false,
            contentType: false,
            cache: false,
            success: function (response){
                setInterval('location.reload()',1000); 
            },
            complete: function(){
                $('#loader').css("visibility"," hidden");
                $('#simple').css("opacity",1);
            }
        });   
    });



    $('#edit_reg_Student').click(function(){
        $('#editStudentModal').modal('hide');
        var str = $('#editStudDetail').serializeArray();
        //console.log($('#editStudDetail').serializeArray());
        var postData = new FormData();
        $.each(str, function(i, val) {
                   postData.append(val.name, val.value);
        });
        postData.append("check","editRegData");
        postData.append("name",name);
        $('#editStudentModal form :input').val("");
        $.ajax({
            url:  'tpoOffice/tpoOfficeCompany/studentEdit',
            type: 'POST',
            processData: false,
            contentType: false,
            data : postData,
            success: function(response){
               var data = JSON.parse(response);
               alert(data);
               if(data=="success")
               {
                    Swal.fire({    
                        title: 'Done',
                        text: "Record Edited Successfully",
                        icon: 'success',
                        showCancelButton: true,
                    }).then(() => {
                        setInterval('location.reload()',1000);  
                    });
               }
               else{
                Swal.fire({
                    title: 'Oops',
                    text: "Something went Please try again!",
                    icon: 'info',
                    showCancelButton: true,
                  })
               }
        }
        });

    });

});


// Checkbox checked
function checkcheckbox(){

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
        $("#checkall").prop('checked', true);
    }else{
        $('#checkall').prop('checked', false);
    }
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

  function editRegStudent(id)
{
    //alert(id);
    $.ajax({
        url:  'tpoOffice/tpoOfficeCompany/getRegData',
        type: 'POST',
        data : {check: "getRegData" ,id: id,name: name},
        success: function(response){

            var data  = JSON.parse(response);
            console.log(data);
            // //alert(data.roll_no+" "+data.stud_name+" "+data.dept+" "+data.course+" "+data.cgpi+" "+data.email);
             $(".modal-body #roll_no").val( data.roll_no );
             $(".modal-body #stud_name").val( data.stud_name );
             $(".modal-body #dept").val( data.dept );
             $(".modal-body #course").val( data.course );
             $(".modal-body #cgpi").val( data.cgpi );
             $(".modal-body #email").val( data.email );
             $(".modal-body #id").val( data.id );
             $('#editStudentModal').modal('show');
        }
    });
}