<?php

include("../global/conexion.php");
include("../global/sesiones.php");


    $id = $_SESSION['usuarioid'];
    $sentenciaSQL=$conect->prepare("SELECT SUM(cost) FROM cart WHERE userid='$id'");
    $sentenciaSQL->execute();
    $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);
    foreach($registro as $muestra) {
?>
    Total: $<?php echo $muestra ?>
<?php
    }
?>