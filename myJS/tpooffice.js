$(document).ready(function() {
    "use strict";
    
    //$('#data-tables').dataTable();

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
                    'request' : 'office'
                  },
                success : function(data){
                    //alert(data);
                    $('#officeCards').html(data);
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