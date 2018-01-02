<meta charset="utf-8" />
<title>SWTech Solution</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="SWTech SOLUTIONs CONSULTANCY" name="description" />
<meta content="" name="author" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!--css begins-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/components.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/contact.min.css">
<link rel="stylesheet" href="css/about.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
<link rel="stylesheet" href="css/simple-line-icons.min.css">
<!--css ends-->
<!--top nav bar begins-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SWTech Solutions</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?= url('') ?>" id="home">Home</a></li>
        <li><a href="#about" id="about">About</a></li>
        <li><a href="#training" id="training">Training</a></li>
        <li><a href="#plans" id="plans">Plans</a></li>
        <li><a href="#contact" id="contact">Contact</a></li>
        <li><a href="" id="register" id="register">Register</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<!--top nav bar ends-->
<div class="modal fade" id="registrationModal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Registration</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="" id="registrationForm" class="col-md-offset-1 col-md-10">
                        
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                <button type="submit" class="btn red-mint btn-outline sbold uppercaserigesterSubmit">Submit</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@yield('content')

<!--scripts begins-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="<?php echo url(''); ?>/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo url(''); ?>/js/additional-methods.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
$(function(){

    // submit registration form
    $(document).on("submit","#registrationForm",function(event){
        event.preventDefault();
        var data = $(this).serialize();
        $("#registrationModal").modal('hide');
        $.ajax({
            url:'<?= url('') ?>/newRegistration',
            type:'post',
            dataType:'json',
            data:data,
            success:function(response) {
                var status = response.status;
                if(status == 1) {
                    swal({
                      title: "Registration Successful!",
                      text: "Thank you for your registration.",
                      icon: "success",
                      button: "Ok!",
                    });
                } else if(status == 2) {
                    swal({
                      title: "Duplicate Entry!",
                      text: "Email already exists in our system.",
                      button: "Ok!",
                    });
                } else {
                    swal({
                      title: "Registration fails!",
                      text: "Something went wrong. Please try again.",
                      icon: "error",
                      button: "Ok!",
                    });
                }
            }
        });
    });


    $(document).on("click","#register",function(event){
        event.preventDefault();
        var th = $(this);
        var modal = $("#registrationModal");
        modal.modal();
        modal.find("form").html('{{ csrf_field() }}<div class="form-group"><label>Full Name</label><input type="text" name="name" class="form-control" placeholder="Firstname lastname" required=""></div><div class="form-group"><label>Email</label><input type="email" name="email" class="form-control" placeholder="abc@xyz.com" required=""></div><div class="form-group"><label>Phone</label><input type="text" name="phone" class="form-control" placeholder="(+977) 9849604410" required=""></div>');

      validateForm("#registrationForm");


    })

    $(document).on("click",".rigesterSubmit",function(){
        $("#registrationForm").submit();
    });

    validateForm("#registrationForm");
    
    // form validation function
    function validateForm(form) {
        jQuery.validator.addMethod( "phoneNumber", function(value, element, regexp = "^[0-9 ()+-]+$") {
                // console.log(regexp);
                var re = new RegExp(regexp);
                return this.optional( element ) || re.test(value);
            },
            "Please enter a valid phone number."
        );

        $(form).validate({
            rules: {
                    "phone": {
                        phoneNumber: "^[0-9 ()+-]+$" 
                },
            },
            submitHandler: function(form) {
                return true;
            }
        });
    }

    $("#about").click(function() {
        $('html, body').animate({
            scrollTop: $("#about-section").offset().top - 80
        }, 1200);
    });

    $("#training").click(function() {
        $('html, body').animate({
            scrollTop: $("#training-section").offset().top - 80
        }, 1200);
    });

    $("#plans").click(function() {
        $('html, body').animate({
            scrollTop: $("#plans-section").offset().top - 80
        }, 1200);
    });

    $("#contact").click(function() {
        $('html, body').animate({
            scrollTop: $("#contact-section").offset().top - 80
        }, 1200);
    });

    $("#home").click(function() {
        $('html, body').animate({
            scrollTop: $("#first-slider").offset().top - 80
        }, 1200);
    });
});
</script>
@yield ('page-scripts')