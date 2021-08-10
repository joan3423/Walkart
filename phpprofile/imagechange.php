<?php 
include("../global/conexion.php");
include("../global/sesiones.php");

if (($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/png")
    || ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/gif")) {

    
        $id = $_SESSION['usuarioid'];
        $image = trim($_FILES['file']['name']);
        $exp_regular = array();
        $exp_regular[1] = "/(\(\d{1})\)/";
        $exp_regular[2] = "/(\(\d{2})\)/";
        $exp_regular[2] = "/(\(\d{3-9})\)/";
        $cadena_nueva = array();
        $cadena_nueva[1] = "(1)";
        $cadena_nueva[2] = "(11)";
        $cadena_nueva[2] = "(111)";
        $replace = preg_replace($exp_regular, $cadena_nueva, $image);
        if (move_uploaded_file($_FILES["file"]["tmp_name"], "../img/users-images/".$replace)) {
        $consulta = $conect->prepare("UPDATE walkartregister SET img='$replace' WHERE id='$id'");
        $consulta->bindParam(':img',$replace);
        $consulta->execute();
        return print($replace);
    } else {
        echo 0;
    }
} else {
    echo 0;
}

?>