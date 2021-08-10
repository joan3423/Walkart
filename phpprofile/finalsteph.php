<?php
include("../global/sesiones.php");
include("../global/conexion.php");
include("../php/login.php");

$iduser = $_SESSION['usuarioid'];
$sentenciaSQL=$conect->query("SELECT * FROM walkartregister WHERE id='$iduser'");
$registros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>
<?php include("../header/header-logins.php"); ?>
<?php 

error_reporting(0);
$part = $_SESSION['usuario1'];

?>
<?php include("../php/panel.php"); ?>
<?php include("../php/cambioclases.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <!-- css -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <!-- mi estilo -->
    <link rel="stylesheet" href="../css/estiloindex.css">
    <link rel="stylesheet" href="../css/finalsteph.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/var.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />



</head>

<body>

<!--nav bar -->
<nav class="navbar navbar-edicion navbar-expand-lg navbar-light" id="navbarNav">
        <div class="logo-meraki-negro">
            <img src="../img/header/logosinfondo.png" class="img-logo" alt="">
        </div>
        <div class="container">

            <div class="primary">
                <div class="logo-meraki-negro-2">
                    <span class="font-logo">M E R A K I</span>
                </div>
                <button class="navbar-toggler align" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="grid-navbar">
                    <div class="first">
                        <a href="../index.php" class="navbar-items">Home</a>
                        <a href="../products.php" class="navbar-items">products</a>
                        <a href="../request.php" class="navbar-items">request</a>
                        <a href="../contact.php" class="navbar-items">contact us</a>
                        <a href="../aboutus.php" class="navbar-items">About us</a>
                    </div>

                    <!--<div class="navbar-items dropdown">
                    <a href="" class="item-indrop">More</a>
                    <div class="dropdown-content">
                        <a href="" class="letters-content">Agradecimiento pedido correcto</a>
                        <a href="" class="letters-content">Agradecimiento pedido rechazado</a>
                        <a href="" class="letters-content">Miembros</a>
                    </div>
                    </div> -->
                    <div class="second">

                    <a href="loginform.php" class="space-log" style="<?php echo $newClass;?>"><i class="fas fa-user-circle"></i>&nbsp;Log In</a>

                    <div class="navbar-items dropdown" style="<?php echo $newClass2;?>">
                        <a href="" class="item-indrop"><?php echo utf8_decode($_SESSION['usuario1']);?></a>
                            <div class="dropdown-content ">
                                <div class="part-grid letters-content nohover">
                                <div class="sing-out">
                                        <a href="../myprofile.php" class="black-but-contact"><i class="fas fa-user-circle"></i>&nbsp;My profile</a>
                                    </div>
                                    
                                    <div class="image-profile">
                                        <div class="img-profileback"></div>
                                    </div>
                                    <div class="text-profile">
                                        <a>email</a>
                                        <a href=""><?php echo utf8_decode($_SESSION['usuario2']);?></a>
                                    </div>
                                    <div class="sing-out">
                                        <a href="../cerrarsesion.php" class="black-but-contact">cerrar sesion</a>
                                    </div>
                                </div>
                                
                
                            </div>
                     </div>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="secondary">
                    <a href="../index.html" class="navbar-items-collapse">Home</a>
                    <a href="../products.html" class="navbar-items-collapse">products</a>
                    <a href="../request.html" class="navbar-items">request</a>
                    <a href="../request.html" class="navbar-items-collapse">contact us</a>
                    <a href="../aboutus.html" class="navbar-items-collapse">About us</a>
                </div>
            </div>
        </div>

    </nav>
<div class="background-step" style="padding-top: 5%">
<div class="height-head3 height-step"></div>
    <div class="img-whatwedo position-do" style="width: 100%">
    
        <div class="what-wedo-steph">
    
        <div class="information-step">
            <div class="tittle-information-step">
            <?php foreach ($registros as $muestra) { if ($muestra['activate'] == 1) { echo "your account has already been activated"; } else { echo "your email has been registered successfully!"; } }?>
            </div>
            <div class="sub-title-information-step padding-step">
            <?php foreach ($registros as $muestra) { if ($muestra['activate'] == 1) { echo ""; } else { echo "now you can have the possibility of obtaining discounts"; } }?>
            </div>
            <div class="padding-step">
            <a href="../myprofile.php" class="white-but-contact2">return to your profile</a>
            </div>
        </div>
    </div>
    </div>
</div>
</body>


<!-- ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- bootstrap js -->
<script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../js/lazysizes.min.js" async></script>
    <!-- myscripts-->
    <script src="../js/custom.js"></script>
    <script src="../js/responsives.js"></script>
    <script type="text/javascript">
    $(function() {
    $(window).scroll(function() {
        if ($(window).scrollTop() > 80) {
            $('#navbarNav').addClass('black-navbar');
        } else {
            $('#navbarNav').removeClass('black-navbar');
        }
        });
    });

    </script>
    <!-- font awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"
        integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw=="
        crossorigin="anonymous"></script>
    <!-- carrousel -->
    <script src="../js/flickity.js"></script>

<?php
if (isset($_GET['email'])  && isset($_GET['hash'])){
        $email = trim($_GET['email']);
        $hash = trim($_GET['hash']);
        $number = "1";
        $id =  $_SESSION['usuarioid'];
        $consulta = $conect->prepare("UPDATE walkartregister SET activate='$number' WHERE id='$id' AND hash_='$hash' AND email='$email' ");
        $consulta->bindParam(':activate',$number);
        $consulta->execute();       
} else {
    header('Location:../myprofile.php');
}
?>
