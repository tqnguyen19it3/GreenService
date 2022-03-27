<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <title>Admin register</title>
    <link rel="stylesheet" type="text/css" href="{{asset('./public/back-end/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('./public/back-end/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('./public/back-end/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('./public/back-end/css/iofrm-theme4.css')}}">
    <link rel="shortcut icon" href="{{asset('./public/front-end/Images/favicon.jpeg')}}">
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{asset('./public/back-end/images/graphic1.svg')}}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Get more things done with Loggin platform.</h3>
                        <p>Access to the most powerfull tool in the admin page.</p>
                        <p id="text" style="display:none; font-weight: 500; color:red;">WARNING! Caps lock is ON.</p>
                        <div class="page-links">
                            <a href="{{URL::TO('/login')}}">Login</a><a href="{{URL::TO('/register')}}" class="active">Register</a>
                        </div>
                        <form enctype="multipart/form-data" action="{{URL::TO('/admin-register')}}" method="post">
                            {{ csrf_field() }}
                            <input class="form-control" type="text" name="admin_name" placeholder="Full Name" required>
                            <input class="form-control" type="text" name="admin_phonenumber" placeholder="Phone Number" required>
                            <input class="form-control" id="myInput" type="email" name="admin_email" placeholder="E-mail Address" required>
                            <input class="form-control" id="myInput1" type="password" name="admin_password" placeholder="Password" required>
                            <input class="form-control" id="myInput" type="text" name="admin_position" placeholder="Position" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Or register with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    var input = document.getElementById("myInput");
    var input1 = document.getElementById("myInput1");
    var text = document.getElementById("text");
    input.addEventListener("keyup", function(event) {

    if (event.getModifierState("CapsLock")) {
        text.style.display = "block";
      } else {
        text.style.display = "none"
      }
    });
    input1.addEventListener("keyup", function(event) {

    if (event.getModifierState("CapsLock")) {
        text.style.display = "block";
      } else {
        text.style.display = "none"
      }
    });
</script>
<script src="{{asset('./public/back-end/js/jquery.min.js')}}"></script>
<script src="{{asset('./public/back-end/js/popper.min.js')}}"></script>
<script src="{{asset('./public/back-end/js/bootstrap.min.js')}}"></script>
<script src="{{asset('./public/back-end/js/main.js')}}"></script>
</body>
</html>