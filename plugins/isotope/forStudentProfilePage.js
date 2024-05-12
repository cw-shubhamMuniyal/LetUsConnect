$( document ).ready(function(e) {


    // logging();
    // setInterval(function(){
    //     logging();
    // },5000);
    

    $( "#searchEmail" ).autocomplete({
        source: function(request, response){
            var pathArray = window.location.pathname.split('/');
            var hostName = pathArray[1]; // gives ci
            $.ajax({
                url : "/"+hostName+'/alumni/alumniController/getEmailID',
                type: "POST",
                dataType: "JSON",
                data:{
                    search: request.term
                },
                success: function(data){
                    // console.log(status);
                    response( data );
                },
                error: function(data){
                    console.log(data);
                }
            })
        },
        select : function(event, ui){
            event.preventDefault();
            $("#searchEmail").val(ui.item.label);
            console.log(ui.email);
            return false;
        },
    }); 

    

    console.log( "ready!" );

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

});

function addFriends(){
    var pathArray = window.location.pathname.split('/');
    var hostName = pathArray[1]; // gives ci

    $.ajax({
        type: "POST",
        url : "/"+hostName+'/alumni/alumniController/addFriendsFunction',
        data : {'emailID' : $('#searchEmail').val()},
        datatype : "JSON",
        success : function(dataS){
            location.reload();
        },
        error : function(data){

        }
    });
}

function addEducationDetailsDB(){
    var pathArray = window.location.pathname.split('/');
    var hostName = pathArray[1]; // gives ci

    $.ajax({
        type: "POST",
        // url: "<?php echo site_url('alumniregisterController/checkIfSameEmailExists'); ?>", 
        url : "/"+hostName+'/alumni/alumniController/addEducationDetails',
        data:  {'degree':$("#degree"). val(), 'specialize':$('#specialize').val(), 'university' : $('#university').val(), 'startMonth':$('#startMonth').val(), 'startYear':$('#startYear').val(), 'endMonth':$('#endMonth').val(), 'endYear':$('#endYear').val()},
        dataType:"json",//return type expected as json
        success: function(status){
            /*Hide the model here*/

            $('#addEducationModal').hide();
            location.reload();

            console.log(status);
            console.log(status[1].ID);

            var tt = "<div class='col-sm-6'><div class='content-list content-menu'><ul class='list-wrapper'><li class='mgbt-xs-10'> <span class='menu-icon vd_green'><i class='fa  fa-circle-o'></i></span> <span class='menu-text'>"+status[1].degree+"<br> at <a href='#'>"+status[1].university+"</a> <span class='menu-info'><span class='menu-date'> "+status[1].startMonth+" "+status[1].startYear+" "+status[1].startMonth+" "+status[1].startYear+"</span></span> </span> </li></ul></div>"+
                        "</div><div class='col-sm-3 col-sm-offset-3 text-right'><button type='button' class='btn btn-xs btn-primary d-slign' data-toggle='modal' data-target='#editEducationModal'><i class='fa fa-pencil append-icon'></i>Edit</button><button type='button' name='deleteEducation' id='"+status[1].ID+"'  class='btn btn-xs btn-danger d-align'><i class='fa fa-times append-icon'></i>Delete</button></div>";


            /*$('#educationPart').append(tt);*/
           
        },
        error: function (status) {
            console.log("false");
        }
    });
}

function deleteEducationDetailsDB(id){ 
    //alert(id); 
    var pathArray = window.location.pathname.split('/');
    var hostName = pathArray[1]; // gives ci 
           if(confirm("Are you sure you want to delete this?"))  
           {  
               $.ajax({  
                     url:"/"+hostName+'/alumni/alumniController/deleteEducationDetails/',  
                     method:"POST",   
                     data: {id: id},
                     success:function()  
                     {  
                        //$("#"+user_id).empty();
                        location.reload();
                     }  
                });    
           }  
           else  
           {  
                return false;       
           } 
}

function deleteExpDetailsDB(id){ 
    //alert(id); 
    var pathArray = window.location.pathname.split('/');
    var hostName = pathArray[1]; // gives ci 
           if(confirm("Are you sure you want to delete this?"))  
           {  
               $.ajax({  
                     url:"/"+hostName+'/alumni/alumniController/deleteExpDetails/',  
                     method:"POST",   
                     data: {id: id},
                     success:function()  
                     {  
                        //$("#"+user_id).empty();
                        location.reload();
                     }  
                });    
           }  
           else  
           {  
                return false;       
           } 
}


function deleteProjectDetailsDB(id){ 
    //alert(id); 
    var pathArray = window.location.pathname.split('/');
    var hostName = pathArray[1]; // gives ci 
           if(confirm("Are you sure you want to delete this?"))  
           {  
               $.ajax({  
                     url:"/"+hostName+'/alumni/alumniController/deleteProjectDetails/',  
                     method:"POST",   
                     data: {id: id},
                     success:function()  
                     {  
                        //$("#"+user_id).empty();
                        location.reload();
                     }  
                });    
           }  
           else  
           {  
                return false;       
           } 
}


$(document).on('click', '.delete', function(){  

            console.log($(this).attr("id"));
            var pathArray = window.location.pathname.split('/');
            var hostName = pathArray[1]; // gives ci
           var user_id = $(this).attr("id");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
               $.ajax({  
                     url:"/"+hostName+'/alumni/alumniController/deleteEducationDetails/',  
                     method:"POST",   
                     data: {id: user_id},
                     success:function()  
                     {  
                        $("#"+user_id).empty();
                        location.reload();
                     }  
                });    
           }  
           else  
           {  
                return false;       
           }  
      });  


function addProjectDetailsDB(){

    //alert("Inside project");
    var pathArray = window.location.pathname.split('/');
    var hostName = pathArray[1]; // gives ci

    $.ajax({
        type: "POST",
        url : "/"+hostName+'/alumni/alumniController/addProjectDetails',
        data:  {'projectName':$("#projectName"). val(), 'technology':$('#addTechnology').val(), 'type' : $('#addType').val(), 'cName':$('#cName').val(), 'startDate':$('#startDate').val(), 'endDate':$('#endDate').val(), 'status':$('#status').val()},
        dataType:"json",//return type expected as json
        success: function(status){
            /*Hide the model here*/

            $('#addProjectModal').hide();
        
            location.reload();

            console.log(status);
            console.log(status[1].ID);
           
        },
        error: function (status) {
            console.log("false");
            

        }
    });
}


function addExpDetailsDB(){

    //alert("Inside Exp");
    var pathArray = window.location.pathname.split('/');
    var hostName = pathArray[1]; // gives ci

    $.ajax({
        type: "POST",
        url : "/"+hostName+'/alumni/alumniController/addExpDetails',
        data:  {'designation':$("#designation"). val(), 'Cname':$('#companyName').val(), 'expStartDate' : $('#expStartDate').val(), 'expEndDate':$('#expEndDate').val()},
        dataType:"json",//return type expected as json
        success: function(status){
            /*Hide the model here*/

            /*alert(done);*/
            $('#addExpModal').hide();
        
            location.reload();

            console.log(status);
            console.log(status[1].ID);
           
        },
        error: function (status) {
            console.log("false");
            

        }
    });
}





function editEdu(){
    //alert("Correct");

    var pathArray = window.location.pathname.split('/');
    var hostName = pathArray[1]; // gives ci
    var id = document.getElementById("hide").value;

    //alert(id);

     $.ajax({
        type: "POST",
        url : "/"+hostName+'/alumni/alumniController/editEduDB',
        data:  {'id':id,'degree':$("#Degree"). val(), 'specialize':$('#Specialize').val(), 'university' : $('#University').val(), 'startMonth':$('#StartMonth').val(), 'startYear':$('#StartYear').val(), 'endMonth':$('#EndMonth').val(), 'endYear':$('#EndYear').val()},
        //dataType:"json",//return type expected as json
        success: function(status){
            /*Hide the model here*/

            //alert(status);
            $('#editEducationModal').hide();
            
            location.reload();
        
        }
    });  

}

function editExp(){
    //alert("Correct");

    var pathArray = window.location.pathname.split('/');
    var hostName = pathArray[1]; // gives ci
    var id = document.getElementById("hiden").value;

    //alert(id);

     $.ajax({
        type: "POST",
        url : "/"+hostName+'/alumni/alumniController/editExpDB',
        data:  {'id':id,'designation':$("#design"). val(), 'Cname':$('#cN').val(), 'expStartDate' : $('#expStart').val(), 'expEndDate':$('#expEnd').val()},
        //dataType:"json",//return type expected as json
        success: function(status){
            /*Hide the model here*/

            //alert(status);
            $('#addExpModal').hide();
            
            location.reload();
        
        }
    });  

}


function editPro(){
    //alert("Correct");

    var pathArray = window.location.pathname.split('/');
    var hostName = pathArray[1]; // gives ci
    var id = document.getElementById("hided").value;

    //alert(id);
    /*alert($("#pName").val());
    alert($('#tech').val());
    alert($("#types").val());
    alert($("#client").val());
    alert($("#editStartDate").val());
    alert($("#editEndDate").val());
    alert($("#pStatus").val());*/


     $.ajax({
        type: "POST",
        url : "/"+hostName+'/alumni/alumniController/editProDB',
        data:  {'id':id,'projectName':$("#pName"). val(), 'technology':$('#tech').val(), 'type' : $('#types').val(), 'client':$('#client').val(), 'editStartDate':$('#editStartDate').val(), 'editEndDate':$('#editEndDate').val(), 'status':$('#pStatus').val()},
        //dataType:"json",//return type expected as json
        success: function(response){
            /*Hide the model here*/
            //alert(response);
            //alert("done");
            //alert(status);
            //$('#editEducationModal').hide();
            
            //location.reload();
        
        }
    });  

}


function editEducationDetailsDB(id){

    //alert("Inside edit");
    var pathArray = window.location.pathname.split('/');
    var hostName = pathArray[1]; // gives ci

    $.ajax({
        type: "POST",
        url : "/"+hostName+'/alumni/alumniController/editEducationDetails',
        data:  {'id':id},
        //dataType:"json",//return type expected as json
        success: function(response){
            /*Hide the model here*/
            var data = JSON.parse(response);
            //alert(data.ID);
            /*alert(data.specialize);
            alert(data.university);
            alert(data.startMonth);
            alert(data.startYear);
            alert(data.endMonth);
            alert(data.endYear);*/

            //$('#editEducationModal').show();
            //console.log(data.degree+','+data.specialize+','+data.university+','data.startmonth,data.startyear,data.endmonth,dataa.endyear,data.ID*/
            //console.log(data.degree);  

            // console.log(data['degree']);

            document.getElementById("Degree").value = data.degree;
            document.getElementById('Specialize').value = data.specialize;
            document.getElementById('University').value = data.university;
            document.getElementById('StartMonth').value = data.startMonth;
            document.getElementById('StartYear').value = data.startYear;
            document.getElementById('EndMonth').value = data.endMonth;
            document.getElementById('EndYear').value = data.endYear;
            document.getElementById('hide').value = data.ID;


        }
    });
}

function editExpDetailsDB(id){

    //alert("Inside edit");
    var pathArray = window.location.pathname.split('/');
    var hostName = pathArray[1]; // gives ci

    $.ajax({
        type: "POST",
        url : "/"+hostName+'/alumni/alumniController/editExpDetails',
        data:  {'id':id},
        //dataType:"json",//return type expected as json
        success: function(response){
            /*Hide the model here*/
            var data = JSON.parse(response);
            /*alert(data.exp_id);
            alert(data.exp_designation);
            alert(data.exp_companyName);
            alert(data.exp_expStartDate);
            alert(data.exp_expEndDate);
*/

            //document.getElementById('exp_email').value = data.exp_email;
            document.getElementById('design').value = data.exp_designation;
            document.getElementById('cN').value = data.exp_companyName;
            document.getElementById('expStart').value = data.exp_expStartDate;
            document.getElementById('expEnd').value = data.exp_expEndDate;
            document.getElementById('hiden').value = data.exp_id;


        }
    });   
}


function editProjectDetailsDB(id){

    //alert("Inside edit");
    var pathArray = window.location.pathname.split('/');
    var hostName = pathArray[1]; // gives ci

    $.ajax({
        type: "POST",
        url : "/"+hostName+'/alumni/alumniController/editProjectDetails',
        data:  {'id':id},
        //dataType:"json",//return type expected as json
        success: function(response){
            /*Hide the model here*/
            var data = JSON.parse(response);
            //alert(data.id);
            /*alert(data.project_name);
            alert(data.project_technology);
            alert(data.project_type);
            alert(data.project_client);
            alert(data.project_start);
            alert(data.project_end);
            alert(data.project_status);*/

            //$('#editEducationModal').show();
            //console.log(data.degree+','+data.specialize+','+data.university+','data.startmonth,data.startyear,data.endmonth,dataa.endyear,data.ID*/
            //console.log(data.degree);  

            // console.log(data['degree']);

            document.getElementById("pName").value = data.project_name;
            document.getElementById('tech').value = data.technology;
            document.getElementById('types').value = data.type;
            document.getElementById('client').value = data.client;
            document.getElementById('editStartDate').value = data.start;
            document.getElementById('editEndDate').value = data.end;
            document.getElementById('pStatus').value = data.status;
            document.getElementById('hided').value = data.id;


        }
    });
}


