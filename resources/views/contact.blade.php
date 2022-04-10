<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form using Larvel 8 and AJAX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-8 offset-md-2">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="card-title">Contact Form</h3>
                    </div>
                    <div class="card-body">
                        <form id="contact-form" action="{{ route('contact.store', app()->getLocale()) }}" method="POST" autocomplete="off">
                            @csrf
                            <div id="res" class="d-none">
                                <ul class="list-unstyled text-white"></ul>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name">
                                <small><span class="text-danger error-text name__err"></span></small>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email address</label>
                                <input type="text" class="form-control" id="email">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small><br>
                                <small><span class="text-danger error-text email__err"></span></small>
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1">Message</label>
                                <textarea name="msg" id="message" class="form-control" placeholder="How can we help you?"></textarea>
                                <small><span class="text-danger error-text message__err"></span></small>
                            </div>

                            <button type="submit" id="btn" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#contact-form").submit(function(e){
                e.preventDefault();
                let url = $(this).attr('action');
                $("#btn").attr('disabled', true);



                var _token = $("input[name='_token']").val();
                var email = $("#email").val();
                var name = $("#name").val();
                var message = $("#message").val();

                $.ajax({
                    type: "POST",
                    url: url,
                    data: {_token:_token, email:email, name:name, message:message},
                    beforeSend: function (){
                        $('.error-text').text('');
                    },
                    success: function (data) {
                        if(data.code == 200){
                            $("#btn").attr('disabled', false);
                            let success = '<p class="alert alert-success">'+data.response+'</p>';

                            $("#res").addClass('d-block').removeClass('d-none').html(success);
                            $("#contact-form")[0].reset();
                        }else if(data.code == 400){
                            printErrorMsg(data.response);
                        }
                    }

                });

                function printErrorMsg(msg){
                    $("#btn").attr('disabled', false);
                    // console.log($("#contact-form")[0][2])

                    $.each(msg, function( key, value ) {
                        $("."+key+"__err").text(value);
                    });

                }

                /* $.post(url,
                {
                    _token: $("input[name='_token']").val(),
                    email: $("#email").val(),
                    name: $("#name").val(),
                    message: $("#message").val()
                },
                function (data) {
                    console.log(data.response)
                    if(data.code == 400){
                        $("#btn").attr('disabled', false);
                        let error = '<p class="alert alert-danger">'+data.response+'</p>';
                        $("#res").addClass('d-block').removeClass('d-none');
                        $("#res ul").html('');
                        $.each(data.response, function( key, value ) {
                            $("#res ul").append('<li class="bg-danger mb-2 p-1 rounded">'+value+'</li>');
                        });
                    }else if(data.code == 200){
                        $("#btn").attr('disabled', false);
                        let success = '<p class="alert alert-success">'+data.response+'</p>';

                        $("#res").addClass('d-block').removeClass('d-none').html(success);
                        $("#contact-form").each(function(){
                            this.reset();
                        });

                    }
                }); */


            })
        })

    </script>
</body>
</html>
