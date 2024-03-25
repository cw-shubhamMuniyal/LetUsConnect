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
    
    
    show_for_entry();
        function show_for_entry(){
            $.ajax({
                url   : 'check',
                type  : 'POST',
                async : false,
                datatype : 'json',
                data : {
                    'checking' : true
                  },
                success : function(response){
                    var obj = JSON.parse(response);
                    if(obj.msg == 'success')
                    {
                        show_card();       
                    }   
                    else{
                        console.log("database  error");
                    } 
                }
            });
        };
    
    function show_card(all)
    {
          $.ajax({
                url: 'List',
                type: 'POST',
                //async: false,
                data: {
                    'card' : true,
                    'all' : all,
                    'request' : 'owner'
                  },
                success : function(data){
                    //alert(data);
                    $('#myCard').html(data);
                }
 
            });
    }

    $('#searchCompany').keyup(function(){
        var all = $(this).val();
        if(all!='')
        {
            show_card(all);
        }
        else{
            show_card();
        }
    });

    
//    $(document).on('click','#clickHere',function(){
//         alert("yes going");   
//     });

	
});
    
    //add company   into the database and call show_card(); 
    $(document).on('click', '#btn_add', function(){
    var company_name = $('#company_name').val();
    $.ajax({
      url: 'set',
      type: 'POST',
      datatype: 'json',
      data: {  
        'companyName': company_name,
      },
      success: function(response){  
        $('#company_name').val('');
        $('#myModal').modal('hide');
        var msg = JSON.parse(response);
        //alert(msg.success);
        if(msg.success=='allClear')
        {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Company created'
                }).then(() => {
                        location.reload();
            });  
        }
        else if(msg.success=='insertFail')
        {
                    Swal.fire({
                      position: 'center',
                      icon: 'error',
                      title: 'Company not created'
              }).then(() => {
                      location.reload();
          });
        }
        else if(msg.success=='duplicate')
        {
                    Swal.fire({
                      position: 'center',
                      icon: 'warning',
                      title: 'Company already created'
              });
        }
        else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Company name empty'
                });
        }
      
      }
    });
  });



   /* $("a").click(function(){
        alert("yes going");   
    });*/

 