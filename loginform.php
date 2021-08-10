


  
    <?php include("header/header-logins.php");?>
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
                    <form  method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="txtusermail" class="form-control" value="<?php if(isset($_COOKIE['txtusermail'])){ echo $_COOKIE['txtusermail']; } ?>" placeholder="username or email">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="txtpasword" class="form-control" value="<?php if(isset($_COOKIE['txtusermail'])){ echo $_COOKIE['txtpasword']; } ?>" placeholder="password">
                        </div>
                        <div class="row align-items-center remember">
                            <input <?php if(isset($_COOKIE['txtusermail'])){ echo "checked"; } ?> name="rememberme" type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnlogin" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="register.php">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>
                <?php
                    include("php/login.php")
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



</body>

</html>