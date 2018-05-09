<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PUBLIC AREA</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- my CSS -->
    <link href="css/my_styles.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Public area</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <?php
            require_once "components/menu.php";
            ?>

        </div>
    </div>
</nav>

<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <strong>Your Favorite Source of Free Bootstrap Themes</strong>
                </h1>
                <hr>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">Start Bootstrap can help you build better websites using the Bootstrap CSS
                    framework! Just download your template and start going, no strings attached!</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
            </div>
        </div>
    </div>
</header>


<section id="login">
    <div class="container py-5">
        <h2 class="text-center pb-2"></h2>
        <div class="row">
            <div class="col-lg-6 col-12 pb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Login</h2>
                        <form id="login-form" class="py-2" role="form" action="components/user_login.php" method="post">
                            <div class="form-group">
                                <label for="inputEmailForm" class="sr-only form-control-label">Username</label>
                                <div class="mx-auto col-sm-10">
                                    <input type="text" class="form-control" id="inputEmailForm" name="username"
                                           placeholder="username"
                                           required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPasswordForm" class="sr-only form-control-label">Password</label>
                                <div class="mx-auto col-sm-10">
                                    <input type="password" class="form-control" id="inputPasswordForm" name="password"
                                           placeholder="password" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mx-auto col-sm-10">
                                    <div class="checkbox form-control form-control-sm text-center small">
                                        <label class="">
                                            <input type="checkbox" class=""> remember me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mx-auto col-sm-10 pb-3 pt-2">
                                    <button type="submit" class="btn btn-outline-secondary btn-lg btn-block">Sign-in
                                    </button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mx-auto col-sm-10">
                                    <div class="text-center">
                                        <a href="components/user_password_recover.php" tabindex="5"
                                           class="forgot-password">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 pb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Sign-up</h2>
                        <form method="post" role="form" id="register-form" action="components/user_register.php">
                            <div class="form-group">
                                <label for="input2EmailForm" class="sr-only form-control-label">username</label>
                                <div class="mx-auto col-sm-10">
                                    <input type="text" class="form-control" id="input2UserForm" name="username"
                                           placeholder="username"
                                           required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input2EmailForm" class="sr-only form-control-label">email</label>
                                <div class="mx-auto col-sm-10">
                                    <input type="email" class="form-control" id="input2EmailForm" name="email"
                                           placeholder="email"
                                           required="required" onchange="email_validate(this.value);">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input2PasswordForm" class="sr-only form-control-label">password</label>
                                <div class="mx-auto col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password"
                                           placeholder="password" required="required"
                                           onkeyup="checkPass(); return false;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input2Password2Form" class="sr-only form-control-label">verify</label>
                                <div class="mx-auto col-sm-10">
                                    <input type="password" class="form-control" id="password_confirm"
                                           placeholder="verify password" required="required"
                                           onkeyup="checkPass(); return false;">
                                    <span id="confirmMessage" class="confirmMessage"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mx-auto col-sm-10 pb-3 pt-2">
                                    <button type="submit" class="btn btn-outline-secondary btn-lg btn-block">Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="my-4">
                <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an
                    email and we will get back to you as soon as possible!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center">
                <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                <p>123-456-6789</p>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                <p>
                    <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php
if (isset($_GET["msg"])) {
    $msg_show = true;
    switch ($_GET["msg"]) {
        case 0:
            $message = "ocorreu um erro no registo";
            break;
        case 1:
            $message = "registo efectuado com sucesso";
            break;
        case 2:
            $message = "ocorreu um erro no login";
            break;
        case 3:
            $message = "login efectuado com sucesso";
            break;
        default:
            $msg_show = false;
    }

    echo "
<div class=\"modal fade\" id=\"messageModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Login\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h5 class=\"modal-title\"></h5>
            </div>

            <div class=\"modal-body\">
                " . $message . "
                <div id=\"errors\"></div>
            </div>

            <div class=\"modal-footer\">
                <button id='fechar' type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fechar</button>
            </div>
        </div>
    </div>
</div>
";
    if ($msg_show) {
        echo '<script>window.onload=function (){$("#messageModal").modal("show");}</script>';
    }
}
?>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<!-- Custom scripts for this template -->
<script src="js/creative.min.js"></script>

</body>

</html>


<script>

    function checkPass() {
        //Store the password field objects into variables ...
        var pass1 = $("#register-form #password");
        var pass2 = $("#register-form #password_confirm");

        console.log(pass1.value, pass2);
        //Store the Confimation Message Object ...
        var message = $('#confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        //Compare the values in the password field
        //and the confirmation field
        if (pass1.val() == pass2.val()) {
            //The passwords match.
            //Set the color to the good color and inform
            //the user that they have entered the correct password
            pass2.css("backgroundColor", goodColor);
            message.css("color", goodColor);
            message.html("Passwords Match");
        } else {
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            pass2.css("backgroundColor", badColor);
            message.css("color", badColor);
            message.html("Passwords Do Not Match!");
        }
    }

    function validatephone(phone) {
        var maintainplus = '';
        var numval = phone.value
        if (numval.charAt(0) == '+') {
            var maintainplus = '';
        }
        curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g, '');
        phone.value = maintainplus + curphonevar;
        var maintainplus = '';
        phone.focus;
    }

    // validates text only
    function Validate(txt) {
        txt.value = txt.value.replace(/[^a-zA-Z-'\n\r.]+/g, '');
    }

    // validate email
    function email_validate(email) {
        var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

        if (regMail.test(email) == false) {
            document.getElementById("status").innerHTML = "<span class='warning'>Email address is not valid yet.</span>";
        }
        else {
            document.getElementById("status").innerHTML = "<span class='valid'>Thanks, you have entered a valid Email address!</span>";
        }
    }

    // validate date of birth
    function dob_validate(dob) {
        var regDOB = /^(\d{1,2})[-\/](\d{1,2})[-\/](\d{4})$/;

        if (regDOB.test(dob) == false) {
            document.getElementById("statusDOB").innerHTML = "<span class='warning'>DOB is only used to verify your age.</span>";
        }
        else {
            document.getElementById("statusDOB").innerHTML = "<span class='valid'>Thanks, you have entered a valid DOB!</span>";
        }
    }

    // validate address
    function add_validate(address) {
        var regAdd = /^(?=.*\d)[a-zA-Z\s\d\/]+$/;

        if (regAdd.test(address) == false) {
            document.getElementById("statusAdd").innerHTML = "<span class='warning'>Address is not valid yet.</span>";
        }
        else {
            document.getElementById("statusAdd").innerHTML = "<span class='valid'>Thanks, Address looks valid!</span>";
        }
    }


</script>