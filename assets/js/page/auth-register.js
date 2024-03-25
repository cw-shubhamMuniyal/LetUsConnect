// "use strict";

// $(".pwstrength").pwstrength();

function checkSamePassword(){
    var passwordInput = document.getElementsByName("password").value;
    console.log(passwordInput);
    var passwordConfirm = document.getElementsByName("password-confirm").value;
    if (passwordInput != passwordConfirm) {
        $("#passwordCheckerError").text("password does not match");
    }
    else{
        $("#passwordCheckerError").text("");
        window.location.href = "<?php echo site_url('fillDetailsFromDB');?>";
        console.log("match");
    }
}

function emailChecker(){
    var pathArray = window.location.pathname.split('/');
    var hostName = pathArray[1]; // gives ci
    $.ajax({
        type: "POST",
        url : "/"+hostName+"/alumni/alumniregisterController/checkIfSameEmailExists", 
        // url: "<?php echo site_url('alumniregisterController/checkIfSameEmailExists'); ?>", 
        // url : 'alumni/alumniregisterController/checkIfSameEmailExists/',
        data:  {'email':$("#email"). val()},
        dataType:"text",//return type expected as json
        success: function(status){
            console.log(status);
               if(status == "true"){
                $("#emailAlreadyPresent").text("email already taken");
                $("#submitButReg").attr("disabled", true);
               }
               else{
                $("#emailAlreadyPresent").text("");
                $("#submitButReg").attr("disabled", false);
               }
        }
        // error: function (status) {
        //     console.log("false");
        //     console.log(status);
        // }
    });
}
// $('#email').change(function(){
//     $.ajax({
//         type: "POST",
//         url: "<?php echo site_url('countries/get_cities'); ?>", 
//         data:$("#email"). val(),
//         dataType:"bool",//return type expected as json
//         success: function(status){
//                if(status == true){
//                 $("#emailAlreadyPresent").text("email already taken");
//                }
//                else{
//                 $("#emailAlreadyPresent").text("");
//                }
//         },
//     });
// });