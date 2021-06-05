<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <title>Admin login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('./public/back-end/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('./public/back-end/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('./public/back-end/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('./public/back-end/css/iofrm-theme4.css')}}">
</head>
<body>
    <div class="form-body">
        
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{asset('./public/back-end/images/graphic1.svg')}}" alt="img desc">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Get more things done with Loggin platform.</h3>
                        <p>Access to the most powerfull tool in the admin page.</p>
                        <p id="text" style="display:none; font-weight: 500; color:red;">WARNING! Caps lock is ON.</p>
                        <?php
                            $message = Session::get('message');
                            if($message){
                            echo "<div class='text-center'>";
                                echo "<strong style='color:red;'>" ;
                                    echo $message;
                                    Session::put('message', null);
                                echo "</strong>";
                            echo "</div>";
                            }
                        ?><br>
                        <div class="page-links">
                            <a href="{{URL::TO('/login')}}" class="active">Login</a><a href="{{URL::TO('/register')}}">Register</a>
                        </div>
                        <form action="{{URL::TO('/admin-login')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input class="form-control" id="myInput" type="text" name="adminEmail" placeholder="E-mail Address" required>
                            <input class="form-control" id="myInput1" type="password" name="adminPassword" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="#">Forget password?</a>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
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