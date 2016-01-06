$(document).ready(function() {

    var REDIRECT_TO = "http://localhost/application/web/app_dev.php/dashboard";
    var messagesCount = 0;

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
                $("#registration-submit-button").html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span>');
            },
            success: function(data)
            {
                $(".help-block").remove();
                $("#registration-submit-button").html('Zarejestruj się');
                if(data.status == 400)
                {
                    $.each( data.errors.user, function( key, value ) {
                        if (key == "password") {
                            $("#input-group-"+key).before('<span class="help-block"><span class="glyphicon glyphicon-exclamation-sign text-danger"></span> ' +data.errors.user.password.password+ '</span>');
                        } else {
                            $("#input-group-"+key).before('<span class="help-block"><span class="glyphicon glyphicon-exclamation-sign text-danger"></span> ' +value+ '</span>');
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

                var count = 1;
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
                        if (count === 1) {
                            HTML += '<div class = "row">';
                        }
                        HTML += '<div class="col-md-4">';
                            HTML += '<div class="panel panel-default">';
                                HTML += '<div class="panel-heading"><h3 class="panel-title"><a href="#">'+ player.username +'</a><span class="small pull-right">'+ player.createdAt +'</span></h3></div>';
                                HTML += '<div class="panel-body">';
                                    HTML += '<img src="'+ player.avatar +'" alt="'+ player.username +'" class="img-circle center-block">';
                                HTML += '</div>';
                                HTML += '<div class="panel-footer">';
                                HTML += '<div class="btn-group btn-group-justified"  role="group" aria-label="..."> ';
                                    HTML += '<a href="#" class="btn btn-primary btn-success send-message" data-toggle="tooltip" data-placement="bottom" title="Wyślij wiadomość" id='+player.username+'><span class="glyphicon glyphicon-envelope"></span>&nbsp;</a>';
                                    HTML += '<a href="#" class="btn btn-primary btn-info" data-toggle="tooltip" data-placement="bottom" title="Pokaż profil"><span class="glyphicon glyphicon-user"></span>&nbsp;</a>';
                                    HTML += '<a href="#" class="btn btn-primary btn-primary" data-toggle="tooltip" data-placement="bottom" title="Zobacz szczegółowe informacje o poście"><span class="glyphicon glyphicon-option-horizontal"></span>&nbsp;</a>';
                                HTML += '</div>';
                                HTML += '</div>';
                            HTML += '</div>';
                        HTML += '</div>';

                        ++count;

                        // End row
                        if (count % item_per_row === 0) {
                            HTML += '</div>';
                            HTML += '<div class = "row">';
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

    $("#postEditForm :input").on("keyup blur change", function(e) {
        console.log("edited");
        $.ajax({
            url : $("#postEditForm").attr('action'),
            type: $("#postEditForm").attr('method'),
            data : $("#postEditForm").serializeArray(),
            beforeSend: function()
            {
            },
            success: function(data)
            {
                console.log("success");
                console.log(data.status);
                console.log(data.message);
            }
        });
        e.preventDefault();
    });

    $('#loginPanel').tab('show');

    $(document).on('click', '.panel-heading span.icon_minim', function (e) {
        var $this = $(this);
        if (!$this.hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapsed');
            $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');

        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');

        }
    });

    $(document).on('focus', '.panel-footer input.chat_input', function (e) {
        var $this = $(this);
        if ($('#minim_chat_window').hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideDown();
            $('#minim_chat_window').removeClass('panel-collapsed');
            $('#minim_chat_window').removeClass('glyphicon-plus').addClass('glyphicon-minus');
        }
    });

    $(document).on('click', '.icon_close', function (e) {
        $(this).parent().parent().parent().parent().remove();
    });

    $(document).on('click', '.send-message', function(e) {
        var username = this.id;
        var HTML = '<div class="row chat-window" id="chat_window" style="margin-left:10px;"> <div class="col-xs-12 col-md-12"> <div class="panel panel-default"> <div class="panel-heading top-bar"> <div class="col-md-8 col-xs-8"> <h3 class="panel-title">'+username+'</h3> </div> <div class="col-md-4 col-xs-4" style="text-align: right;"> <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a> <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a> </div> </div> <div class="panel-body msg_container_base"></div> <div class="panel-footer"> <div class="input-group"> <input id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Wpisz tutaj swoją wiadomość..." /> <span class="input-group-btn"> <button class="btn btn-primary btn-sm" id="btn-chat">Wyślij</button><input type="hidden" value="'+this.id+'"></span> </div> </div> </div> </div> </div>';
        $("#messages-box").append(HTML);
    });
});
