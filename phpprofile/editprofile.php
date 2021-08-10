<?php

include("../global/conexion.php");
include("../global/sesiones.php");

if (strlen($_POST['age']) >= 1){
    
        $id = $_SESSION['usuarioid'];
        $age = trim($_POST['age']);
        $agelenght= strlen($age);
        if ($agelenght == 0){
            return print(1);
        } else if($agelenght > 2){
            return print(2); 
        }  else {
        
        $consulta = $conect->prepare("UPDATE walkartregister SET age='$age' WHERE id='$id'");
        $consulta->bindParam(':age',$age);
        $consulta->execute();

        }
                
}

if (strlen($_POST['select-country']) >= 1){
    
    $id = $_SESSION['usuarioid'];
    $selectcountry = trim($_POST['select-country']);
    $consulta = $conect->prepare("UPDATE walkartregister SET country='$selectcountry' WHERE id='$id'");
    $consulta->bindParam(':country',$selectcountry);
    $consulta->execute();
            
}
if (strlen($_POST['postalcode']) >= 1){
    
    $id = $_SESSION['usuarioid'];
    $postalcode = trim($_POST['postalcode']);
    if(!preg_match('/^[0-9]{4,7}$/i', $postalcode)) {
        return print(3);
    } 
        $consulta = $conect->prepare("UPDATE walkartregister SET postalcode='$postalcode' WHERE id='$id'");
        $consulta->bindParam(':postalcode',$postalcode);
        $consulta->execute();
    
    
            
}
if (strlen($_POST['addres']) >= 1){
    
    $id = $_SESSION['usuarioid'];
    $addres = trim($_POST['addres']);
    $agelenght3= strlen($addres);
    if($agelenght3 > 30){
        return print(4); 
    }
    $consulta = $conect->prepare("UPDATE walkartregister SET addres='$addres' WHERE id='$id'");
    $consulta->bindParam(':addres',$addres);
    $consulta->execute();
            
}




?>