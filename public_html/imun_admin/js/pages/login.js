'use strict';
$(document).ready(function() {
    $(window).on("load", function() {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut(1000);
    });
    new WOW().init();
    $('#login_validator').bootstrapValidator({
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Please provide a password'
                    }
                }
            }
        }
    });
    
});

function login(){
    let username = $('#username').val();
    let password = $('#password').val();
    $.post("./../../private/API/login.php", {
        "username": username,
        "password": password
    }, function(data, status){
        data = JSON.parse(data);
        if (data["status"] === 'PASS'){
            window.location.href = "dashbord.php";
        }else{
             $('#login_validator2').text("Email or Password not match");
        }
    })
    return false;
}
