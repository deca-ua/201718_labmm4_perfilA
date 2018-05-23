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
        <a class="navbar-brand js-scroll-trigger" href="index.php#page-top">Public area</a>
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
    <!-- https://www.codeply.com/view/y9B0DkS3hP -->
    <div class="container my-auto">
        <form class="form-horizontal" id="edit-form" action="components/user_profile.php" method="post"
              role="form" enctype="multipart/form-data">
            <h1>Edit Profile</h1>
            <hr>
            <div class="row">
                <!-- left column -->
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="//placehold.it/100" class="avatar img-circle" alt="avatar" height="100">
                        <h6>Upload a different photo...</h6>

                        <input class="form-control" type="file" id="fileToUpload" name="fileToUpload">
                    </div>
                </div>

                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    <?php
                    if (isset($_GET["error_msg"])) {
                        $class = "alert-danger";
                        switch (intval($_GET["error_msg"])) {
                            case 1:
                                $message = "File is not an image";
                                break;
                            case 2:
                                $message = "file already exists";
                                break;
                            case 3:
                                $message = "file is too large";
                                break;
                            case 4:
                                $message = "only JPG, JPEG, PNG & GIF files are allowed";
                                break;
                            case 5:
                                $message = "error on new image upload";
                                break;
                            case 6:
                                $message = "error on delete old image";
                                break;
                            case 7:
                                $message = "error on new image info upload";
                                break;
                            case 8:
                            case 9:
                                $message = "error upload profile";
                                break;
                            default:
                                $message = "profile updated";
                                $class = "alert-info";
                        }
                        echo "<div class=\"alert $class alert-dismissable\">
                            <a class=\"panel-close close\" data-dismiss=\"alert\">×</a>
                            <i class=\"fa fa-coffee\"></i>$message</div>";
                    }
                    ?>

                    <h3 class="text-center mb-4">Personal info</h3>
                    <div class="form-group">
                        <label for="input2EmailForm" class="sr-only form-control-label">username</label>
                        <div class="mx-auto col-sm-10">
                            <input type="text" class="form-control" id="input2UserForm" name="username"
                                   placeholder="username"
                                   required="required" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input2EmailForm" class="sr-only form-control-label">email</label>
                        <div class="mx-auto col-sm-10">
                            <input type="email" class="form-control" id="input2EmailForm" name="email"
                                   placeholder="email"
                                   required="required" onchange="email_validate(this.value);" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input2PasswordForm" class="sr-only form-control-label">password</label>
                        <div class="mx-auto col-sm-10">
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="password" onkeyup="checkPass(); return false;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input2Password2Form" class="sr-only form-control-label">verify</label>
                        <div class="mx-auto col-sm-10">
                            <input type="password" class="form-control" id="password_confirm"
                                   placeholder="verify password" onkeyup="checkPass(); return false;">
                            <span id="confirmMessage" class="confirmMessage"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mx-auto col-sm-10 pb-3 pt-2">
                            <button type="submit" class="btn btn-outline-secondary btn-lg btn-block">Atualizar perfil
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</header>


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
        var pass1 = $("#edit-form #password");
        var pass2 = $("#edit-form #password_confirm");

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