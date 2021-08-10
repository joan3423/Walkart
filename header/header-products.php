<?php 

error_reporting(0);
$part = $_SESSION['usuario1'];

?>
<?php include("../php/panel.php"); ?>
<?php include("../php/cambioclases.php"); ?>
<?php include("../global/conexion.php"); ?>
<?php include("../global/sesiones.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walkart</title>
    <link rel="shortcut icon" href="../img/header/logosinfondopag.png">
    <!-- bootstrap -->
    <!-- css -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <!-- mi estilo -->
    <link rel="stylesheet" href="../css/request.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/aboutus.css">
    <link rel="stylesheet" href="../css/products.css">
    <link rel="stylesheet" href="../css/product-list.css">
    <link rel="stylesheet" href="../css/estiloindex.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/modal.css">
    <link rel="stylesheet" href="../css/modal2.css">
    <link rel="stylesheet" href="../css/var.css">
    <link rel="stylesheet" href="../css/carrousel3d.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <!-- carrousels -->
    <link rel="stylesheet" href="../css/flickity.css" media="screen">
    <link rel="stylesheet" href="../css/mycarousel.css">
    <link rel="stylesheet" href="../css/mycarrousel2.css">
    <!-- w3schools -->
    <!-- materialize -->


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

                        <a href="../loginform.php" class="space-log" style="<?php echo $newClass;?>"><i
                                class="fas fa-user-circle"></i>&nbsp;Log In</a>

                        <div class="navbar-items dropdown" style="<?php echo $newClass2;?>">
                            <a href="" class="item-indrop">
                                <?php echo utf8_decode($_SESSION['usuario1']);?>
                            </a>
                            <div class="dropdown-content ">
                                <div class="part-grid letters-content nohover">
                                    <div class="sing-out">
                                        <a href="../myprofile.php" class="black-but-contact"><i
                                                class="fas fa-user-circle"></i>&nbsp;My profile</a>
                                    </div>

                                    <div class="image-profile">
                                        <div class="img-profileback"></div>
                                    </div>
                                    <div class="text-profile">
                                        <a>email</a>
                                        <a href="">
                                            <?php echo utf8_decode($_SESSION['usuario2']);?>
                                        </a>
                                    </div>
                                    <div class="sing-out">
                                        <a href="../cerrarsesion.php" class="black-but-contact">cerrar sesion</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <a id="shopicon" class="space-log">0<i class="fas fa-shopping-bag"></i></a>

                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="grid-close-content">
                    <div class="button-close2" id="close-navbar">
                        x
                    </div>
                    <div class="secondary">
                        <a href="../index.html" class="navbar-items-collapse">Home</a>
                        <a href="../products.html" class="navbar-items-collapse">products</a>
                        <a href="../request.html" class="navbar-items">request</a>
                        <a href="../request.html" class="navbar-items-collapse">contact us</a>
                        <a href="../aboutus.html" class="navbar-items-collapse">About us</a>
                    </div>
                </div>
            </div>
        </div>

    </nav>
    <div class="shop-collapse" id="shop-collapse">
            <div class="grid-close-content">
                <div class="title-andclose">
                    <div class="button-close" id="close-trolley">
                    x
                    </div>
                    <div class="title-cart">
                        Cart
                    </div>
            </div>
            <div class="content-cart" id="central">
                <link rel="stylesheet" href="../css/product-list.css">
                <div class="grid-shop-cart" id="intotr">
                <?php
                    $id = $_SESSION['usuarioid'];
                    $sentenciaSQL=$conect->query("SELECT * FROM cart WHERE userid='$id'");
                    $sentenciaSQL->execute();
                    $data=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
                    $numeroRegistros=$sentenciaSQL->rowCount();
                    if($numeroRegistros>=1){
                    foreach ($data as $muestra) {
                ?>
                    <div class="lign-delimiter">
                        <div class="adjust-imgcart" style="color: white">
                            <img src="../img/cart/<?php echo $muestra['imagep'] ?>" class="img-incart" alt="">
                        </div>
                    </div>
                    <div class="lign-delimiter">
                        <div class="information-onecart">
                            <?php echo $muestra['namep'] ?>
                        </div>
                        <div class="information-onecart">
                            $<?php echo " " . $muestra['cost'] ?>
                        </div>
                        <div class="information-onecart">
                            <input value="<?php echo $muestra['amount'] ?>" type="number">
                        </div>
                    </div>
                    <?php
                    }
                } else { ?>
                <div class="nothing">Cart is empty</div>
                <?php }
                ?>
                </div>
                
            </div>
            <?php 
                $id = $_SESSION['usuarioid'];
                $sentenciaSQL=$conect->prepare("SELECT SUM(cost) FROM cart WHERE userid='$id'");
                $sentenciaSQL->execute();
                $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);
                foreach($registro as $muestra) {
            ?>
            <div class="button-view">
                <span class="button-add" id="costtotal">Total: $<?php if($muestra > 0){ echo $muestra; } else {  echo " " . "0";} ?></span>
            </div>
            <?php
                    }
                ?>
            <div class="button-view">
                <button class="button-add">View Cart</button>
            </div>
        </div>

    </div>