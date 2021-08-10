<?php

include("../global/conexion.php");

    
if (isset($_POST['textconfirmation'])){
    
        $id = $_COOKIE['id'];
        $phone = trim($_POST['editphone']);
                $consulta = $conect->prepare("UPDATE walkartregister SET phone='$phone' WHERE id='$id'");
                
                $consulta->bindParam(':phone',$phone);
                $consulta->execute();
                return print(1);
            
} 



?>