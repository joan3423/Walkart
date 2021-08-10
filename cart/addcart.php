<?php

include("../global/conexion.php");
include("../global/sesiones.php");



if (strlen($_POST['amount']) >= 1){
    
        $id = $_SESSION['usuarioid'];
        $idproduct = trim($_POST['id-product']);
        $age = trim($_POST['size']);
        $color = trim($_POST['color']);
        $amount = trim($_POST['amount']);

        $sentenciaSQL=$conect->query("SELECT * FROM products WHERE id='$idproduct'");
        $registros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
        foreach ($registros as $muestra) {
        $cost = $muestra['cost'];
        $namep = $muestra['namep'];
        $imagep = $muestra['imagep'];
        }

        $finallyname = $color . " " . $namep;
        $price = trim($_POST['amount']) * $cost;
        
        $consulta = $conect->prepare("INSERT INTO cart(namep, cost, imagep, amount, userid) VALUES ('$finallyname','$price','$imagep','$amount','$id')");
        $consulta->bindParam(':namep',$finallyname);
        $consulta->bindParam(':cost',$price);
        $consulta->bindParam(':imagep',$price);
        $consulta->bindParam(':amount',$amount);
        $consulta->bindParam(':userid',$id);
        $consulta->execute();

                
}

?>