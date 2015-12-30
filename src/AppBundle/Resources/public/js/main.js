$(document).ready(function() {

    var REDIRECT_TO = "http://localhost/application/web/app_dev.php/dashboard";

    $("#loginFormError").addClass("hidden"); //Hide error field before send the AJAX request

    $("#loginForm").submit(function(e) {
        $.ajax(
            {
                url : $(this).attr('action'),
                type: $(this).attr('method'),
                data : $(this).serializeArray(),
                beforeSend: function()
                {
                  $("#login-submit-button").html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span>');
                },                complete: function()
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
                $("#registration_Register").html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span>');
            },
            success: function(data)
            {
                $(".help-block").remove();

                $("#registration_Register").html('Register');
                if(data.status == 400)
                {
                    $.each( data.errors.user, function( key, value ) {
                        if (key == "password") {
                            $("#registration_user_password_password").before('<span class="help-block"><span class="glyphicon glyphicon-exclamation-sign text-danger"></span> ' +data.errors.user.password.password+ '</span>');
                        } else {
                            $("#registration_user_"+key).before('<span class="help-block"><span class="glyphicon glyphicon-exclamation-sign text-danger"></span> ' +value+ '</span>');
                        }
                    });
                } else if(data.status == 200) {
                    $("#registrationForm").before('<span class="help-block"><span class="glyphicon glyphicon-ok-circle text-success"></span> ' + data.message + '</span>').remove();
                }
            }
        });
        e.preventDefault();
    });

    $("#postForm").submit(function(e) {
        $.ajax({
            url : $(this).attr('action'),
            type: $(this).attr('method'),
            data : $(this).serializeArray(),
            beforeSend: function()
            {
                console.log("Sending request.");
                $("#post_Create").html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span>');
            },
            success: function(data)
            {
                $(".help-block").remove();

                $("#post_Create").html('Create');
                if(data.status == 400)
                {
                    $.each( data.errors, function( key, value ) {
                            $("#post_"+key).before('<span class="help-block"><span class="glyphicon glyphicon-exclamation-sign text-danger"></span> ' +value+ '</span>');
                    });
                } else if(data.status == 200)
                {
                    $("#postForm").before('<span class="help-block"><span class="glyphicon glyphicon-ok-circle text-success"></span> ' + data.message + '</span>').remove();
                }
            }
        });
        e.preventDefault();
    });

    $("#searchForm").submit(function(e) {
        $.ajax({
            url : $(this).attr('action'),
            type: $(this).attr('method'),
            data : $(this).serializeArray(),
            beforeSend: function()
            {
                $("#players_Search").html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span>');
            },
            success: function(data)
            {
                $(".help-block").remove();
                $("#players_Search").html('Search');

                var count = 0;
                var item_per_row = 4;
                var HTML = "";

                if(data.status == 400)
                {
                    $.each( data.errors, function( key, value ) {
                        $("#post_"+key).before('<span class="help-block"><span class="glyphicon glyphicon-exclamation-sign text-danger"></span> ' +value+ '</span>');
                    });
                } else if(data.status == 200)
                {
                    $.each( data.players, function( key, player ) {
                        // Start new row
                        if (count === 0 || count % 3 === 0) {
                            HTML += '<div class = "row">';
                        }
                        HTML += '<div class="col-md-3">';
                            HTML += '<div class="panel panel-default">';
                                HTML += '<div class="panel-heading"><h3 class="panel-title"><a href="#">'+ player.username +'</a><span class="small pull-right">'+ player.createdAt +'</span></h3></div>';
                                HTML += '<div class="panel-body">';
                                    HTML += '<img src="'+ player.avatar +'" alt="'+ player.username +'" class="img-circle center-block">';
                                HTML += '</div>';
                                HTML += '<div class="panel-footer">';
                                HTML += '<div class="btn-group btn-group-justified"  role="group" aria-label="..."> ';
                                    HTML += '<a href="#" class="btn btn-primary btn-success" data-toggle="tooltip" data-placement="bottom" title="Wyślij wiadomość" ><span class="glyphicon glyphicon-envelope"></span>&nbsp;</a>';
                                    HTML += '<a href="#" class="btn btn-primary btn-info" data-toggle="tooltip" data-placement="bottom" title="Pokaż profil"><span class="glyphicon glyphicon-user"></span>&nbsp;</a>';
                                    HTML += '<a href="#" class="btn btn-primary btn-primary" data-toggle="tooltip" data-placement="bottom" title="Zobacz szczegółowe informacje o poście"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;</a>';
                                HTML += '</div>';
                                HTML += '</div>';
                            HTML += '</div>';
                        HTML += '</div>';

                        ++count;

                        // End row
                        if (count % item_per_row === 0) {
                            HTML += '</div>';
                        }
                    });

                    // Close the last row if it exist
                    if (count > 0) {
                        HTML += '</div>';
                    }

                    // Pass generated HTML to view
                    $('#players').html(HTML);
                } else if (data.status == 404) {
                    HTML = "";
                    HTML += '<div class="alert alert-danger" role="alert">Nie znaleziono graczy</div>';
                    $('#players').html(HTML);
                }
            }
        });
        e.preventDefault();
    });

});
