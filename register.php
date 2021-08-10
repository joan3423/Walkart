
<?php include("php/panel.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <!-- css -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- mi estilo -->
    <link rel="stylesheet" href="css/register.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />






</head>
<div class="no-blur"></div>

<body>


    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign In</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" id="signupForm">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control" placeholder="username">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control" placeholder="email">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" id="pasword1" name="pasword1" class="form-control"
                                placeholder="password">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" id="pasword2" name="pasword2" class="form-control"
                                placeholder="Confirm your password">
                        </div>
                        <div class="row align-items-center remember">
                            <input name="agree"  type="checkbox">I accept the terms and conditions
                        </div>
                        <div class="form-group">
                            <input type="submit" name="Register" value="Register" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        you have an account?<a href="loginform.php">Sign Up</a>
                    </div>
                </div>
                <?php
                  include("php/proceso.php");
                ?>
            </div>
        </div>
    </div>


<!-- IMPORTANTE -->
<script>
if (window.history.replaceState) { 
    window.history.replaceState(null, null, window.location.href);
    }
</script>
<!-- IMPORTANTE -->
    <!-- bootstrap js -->
    <script src="bootstrap/js/bootstrap.js"></script>
    <!-- font awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"
        integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw=="
        crossorigin="anonymous"></script>
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/lazysizes.min.js" async></script>
    <!-- myscripts-->
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#signupForm').validate({

                rules: {
                    username: {
                        required: true,
                        minlength: 5
                    },
                    pasword1: {
                        required: true,
                        minlength: 5
                    },
                    pasword2: {
                        required: true,
                        minlength: 5,
                        equalTo: "#pasword1"
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    agree: "required"
                },
                messages: {
                    username: {
                        required: "Por favor ingresa tu nombre de usuario completo",
                        minlength: "Tu nombre debe ser de no menos de 5 caracteres"
                    },
                    pasword1: {
                        required: "Por favor ingresa una contraseña",
                        minlength: "Tu contraseña debe ser de no menos de 5 caracteres de longitud"
                    },
                    pasword2: {
                        required: "Ingresa un password",
                        minlength: "Tu contraseña debe ser de no menos de 5 caracteres de longitud",
                        equalTo: "Por favor ingresa la misma contraseña de arriba"
                    },
                    email: "Por favor ingresa un correo válido",
                    agree: "Por favor acepta nuestra política",
                },
                errorElement: "div",
                errorPlacement: function (error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block");

                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.parent("label"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).parents(".col-sm-12").addClass("has-error").removeClass("has-success");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents(".col-sm-12").addClass("has-success").removeClass("has-error");
                }
            });
        });
    </script>
    <script>

    </script>

</body>

</html>