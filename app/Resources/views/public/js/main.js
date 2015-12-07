$(document).ready(function() {
    $("#loginFormError").addClass("hidden"); //Hide error field before send the AJAX request

    $("#loginForm").submit(function(e)
    {
        var postData = $(this).serializeArray();
        var formURL = $(this).attr("action");
        $.ajax(
            {
                url : formURL,
                type: "POST",
                data : postData,
                beforeSend: function()
                {
                  $("#login-submit-button").html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span>');
                },
                complete: function()
                {
                    $("#login-submit-button").html('<span class="glyphicon glyphicon-ok-circle"></span>');
                },
                success: function(data)
                {
                    if(data.success == false) {
                        $('#loginFormError').html(data.message).removeClass("hidden");
                    } else if(data.success == true){
                        $("#login-submit-button").removeClass("btn-primary").addClass("btn-success");
                        location.reload();
                    }
                },
                error: function(data) {
                    console.log("An error occurred when sent AJAX request.")
                }
            });
        e.preventDefault();
    });

    /*$("#login-submit-button").click(function() {
            $('#loginModal').modal('toggle')
        }
    )*/
});
