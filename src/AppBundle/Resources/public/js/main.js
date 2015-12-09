$(document).ready(function() {

    // CONST
    var REDIRECT_TO = "http://localhost/application/web/app_dev.php/profile";


    $("#loginFormError").addClass("hidden"); //Hide error field before send the AJAX request

    $("#loginForm").submit(function(e)
    {
        $.ajax(
            {
                url : $(this).attr('action'),
                type: $(this).attr('method'),
                data : $(this).serializeArray(),
                beforeSend: function()
                {
                  $("#login-submit-button").html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span>');
                },
                complete: function()
                {
                },
                success: function(data)
                {
                    if(data.success == false) {
                        $('#loginFormError').html(data.message).removeClass("hidden");
                        $("#login-submit-button").html('Zaloguj się');
                    } else if(data.success == true){
                        $("#login-submit-button").removeClass("btn-primary").addClass("btn-success").html('<span class="glyphicon glyphicon-ok-circle"></span>');
                        window.location = REDIRECT_TO;
                    }
                },
                error: function()
                {
                    console.log("An error occurred while AJAX request.")
                }
            });
        e.preventDefault();
    });

    $("#registrationForm").submit(function(e) {
        $.ajax({
            url : $(this).attr('action'),
            type: $(this).attr('method'),
            data : $(this).serializeArray(),
            beforeSend: function()
            {
                console.log("Sending request.");
                /*$("#registration_Register").html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span>');*/
            },
            success: function(data)
            {
                console.log("Response received");
                console.log(data.status);

                $(".help-block").remove();

                if(data.status == 400)
                {
                    $.each( data.errors.user, function( key, value ) {
                        if (key == "password") {
                            $("#registration_user_password_password").before('<span class="help-block"><span class="glyphicon glyphicon-exclamation-sign text-danger"></span> ' +data.errors.user.password.password+ '</span>');
                            console.log( key +": "+ data.errors.user.password.password);
                        } else {
                            /*$("#registration_error_"+key).remove();*/
                            $("#registration_user_"+key).before('<span class="help-block"><span class="glyphicon glyphicon-exclamation-sign text-danger"></span> ' +value+ '</span>');
                            console.log(key + ": " + value);
                        }
                    });
                } else if(data.status == 200)
                {
                    $("#registrationForm").before('<span class="help-block"><span class="glyphicon glyphicon-ok-circle text-success"></span> ' + data.message + '</span>').remove();
                }
            }
        });
        e.preventDefault();
    });
});
