$(document).ready(function(){
        $( "#forgot" ).click(function(e){
                e.preventDefault();
                var email = $("#email").val();
                var url = 'reset';
                    $.ajax({
                    method: 'GET',
                    url: url,
                    data: {
                            'email': email
                    },
                    async: false,
                    success:function(response){
                        var  obj = JSON.parse(response);
                        var success = obj.success;
                        var mail_sent = obj.mail_sent;    
                        if(success.localeCompare("true")==0 && mail_sent.localeCompare("true")==0)
                        {
                                //alert('Email sent successfully');
                                        Swal.fire({
                                                position: 'top-right',
                                                icon: 'success',
                                                title: 'Thank  You',
                                                text: 'Password Reset link has been sent on your Email'
                                        }).then(() => {
                                                location.reload();
                                      });  
                        } 
                        else if(success.localeCompare("true")==0 && mail_sent.localeCompare("true")!=0){
                                //alert("Error in phpMailer");
                                        Swal.fire({
                                                position: 'top-right',
                                                icon: 'error',
                                                title: 'Something when wrong!',
                                                text: 'Please try again'
                                            }).then(() => {
                                                location.reload();
                                      });
        
                        }
                        else if(success.localeCompare("true")!=0 && mail_sent.localeCompare("true")==0){
                                //alert("Email id not found in database");
                                //$('#email').val('');
                                Swal.fire({
                                        position: 'top-right',
                                        icon: 'warning',
                                        title: 'Email ID not found',
                                        text: 'Please enter your email again',
                                        showConfirmButton: true
                                    }).then(() => {
                                        location.reload();
                              });      
                        }
                        else{
                                alert("Internal Error");
                        }
                        
                    }
                    }); 
                    
        });

});
//Pass and Confirm Password Checker
$( "#reset" ).click(function(e){
        e.preventDefault();
        var password = $("#password").val();
        var confirm_password = $("#confirm_password").val();
        // if(password.value != confirm_password.value) 
        // {
        //         confirm_password.setCustomValidity("Passwords Don't Match");
        // } 
        // else 
        // {
                var url_string = window.location.href;
                var url = new URL(url_string);
                var code = url.searchParams.get("code");
                $.ajax({
                       url: 'request?code='+code,
                        data: {
                                'password': password,
                        },
                        method: 'POST',
                        success:function(response)
                        {
                                alert(response);
                                if(response)
                                {
                                        //alert('updated');
                                    Swal.fire({
                                            position: 'center',
                                            icon: 'success',
                                            title: 'Done',
                                            text: 'Your password has been reset successfully'
                                    }).then(() => {
                                            location.reload();
                                  }); 
                                }
                                else{
                                        //alert('not updated');
                                    Swal.fire({
                                            position: 'center',
                                            icon: 'error',
                                            title: 'Oops',
                                            text: 'Please try again!'
                                    }).then(() => {
                                            location.reload();
                                  }); 
                                    
    
                                }
                        }
    
                 });              
        //}

});

