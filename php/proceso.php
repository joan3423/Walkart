<?php
include("global/conexion.php");


    
if (isset($_POST['Register'])){
    if (strlen($_POST['username']) >=  1 && strlen($_POST['email']) >= 1 && strlen($_POST['pasword1']) >= 1) {
            
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $pasword1 = trim($_POST['pasword1']);
        $pasword1 = hash('sha512', $pasword1);

        function duplicacion($username,$email,$conect){

            $dec=$conect->prepare("SELECT * FROM walkartregister WHERE username=:username OR email=:email");
            $dec->bindParam("username",$username,PDO::PARAM_STR);
            $dec->bindParam("email",$email,PDO::PARAM_STR);
            $dec->execute();
            $registros=$dec->fetch(PDO::FETCH_ASSOC);
            $cantidad=$dec->rowCount();
        
            if($cantidad > 0){
                if(($username == $registros['username']) && ($email == $registros['email'])){
                    return 1;
                }
                if($username == $registros['username']){
                    return 2;
                }
                if($email == $registros['email']){
                    return 3;
                }

                 else {
                    return 3;
                }
            } 
        }   
            if(duplicacion($username,$email,$conect)==1){
                ?>
                <link rel="stylesheet" href="css/estiloindex.css">
                <label class="incorrect"> El nombre de usuario ya esta registrado. </label>
                <label class="incorrect"> El Email ya a sido registrado. </label>
                <?php
            } else if (duplicacion($username,$email,$conect)==2){
                ?>
                <link rel="stylesheet" href="css/estiloindex.css">
                <label class="incorrect"> El nombre de usuario ya esta registrado. </label>
                <?php

            }  else if (duplicacion($username,$email,$conect)==3){
                ?>
                <link rel="stylesheet" href="css/estiloindex.css">
                <label class="incorrect"> El Email ya a sido registrado. </label>
                <?php

            } 
            else {
                if (preg_match('/^[A-z0-9\\.]+@gmail*\\.com$/', "$email")) {
                $consulta = $conect->prepare("INSERT INTO walkartregister(username, email, pasword, rol) VALUES ('$username','$email','$pasword1','user')");
                
                $consulta->bindParam(':username',$username);
                $consulta->bindParam(':email',$email);
                $consulta->bindParam(':pasword',$pasword1);
                $consulta->execute();
        
                
        
                    if ($consulta) {
                    header('Location:loginform.php');
                    ?>
                    <link rel="stylesheet" href="css/estiloindex.css">
                    <label class="incorrect"> Te has inscrito correctamente. </label>
                    <?php
                    
                    } else {
                    ?>
                    <link rel="stylesheet" href="css/estiloindex.css">
                    <label class="incorrect"> No se a podido completar el registro. </label>
                    <?php
                    }
                } else {
                ?>
                    <link rel="stylesheet" href="css/estiloindex.css">
                    <label class="incorrect"> El correo solicitado no es valido. </label>
                <?php
                }

            }
        
		
        
    }

    
} 



?>