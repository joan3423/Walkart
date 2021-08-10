<?php

if(isset($_POST["btnlogin"])){

    include("global/conexion.php");
    
    $Emailconfirm=($_POST['txtusermail']);
    $Paswordconfirm=($_POST['txtpasword']);
    $Paswordconfirm2 = hash('sha512', $Paswordconfirm);

    $sentenciaSQL=$conect->prepare("SELECT * FROM walkartregister WHERE email=:email AND
    pasword=:pasword");

    $sentenciaSQL->bindParam("email",$Emailconfirm,PDO::PARAM_STR);
    $sentenciaSQL->bindParam("pasword",$Paswordconfirm2,PDO::PARAM_STR);
    $sentenciaSQL->execute();

    $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);

    

    $numeroRegistros=$sentenciaSQL->rowCount();

    if($numeroRegistros>=1){
        if(!empty($_POST["rememberme"])){
            setcookie("txtusermail", $Emailconfirm, time()+(10 * 365 * 24 * 60 * 60));
            setcookie("txtpasword", $Paswordconfirm, time()+(10 * 365 * 24 * 60 * 60));
        } else {
            if(isset($_COOKIE['txtusermail'])){
                setcookie("txtusermail","");

            }
            if(isset($_COOKIE['txtpasword'])){
                setcookie("txtpasword","");
            }
        }
        
        session_start();
        $_SESSION['usuario']=$registro;
        $_SESSION['usuarioid']=$registro["id"];
        setcookie("id",$registro["id"], time()+(10 * 365 * 24 * 60 * 60));
        $_SESSION['usuario1']=$registro["username"];
        $_SESSION['usuario2']=$registro["email"];
        $_SESSION['usuario3']=$registro["phone"];
        $_SESSION['usuario4']=$registro["age"];
        $_SESSION['usuario5']=$registro["country"];
        $_SESSION['usuario6']=$registro["img"];
        
        
        header('Location:index.php');
        

    } else {
        ?>
        <link rel="stylesheet" href="css/estiloindex.css">
            <label class="incorrect"> La cuenta o la contraseña es incorrecta. </label>
        <?php
        
    }
}

?>