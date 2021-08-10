<?php

include("../global/conexion.php");

    
if (isset($_POST['editusername'])){
    
        $id = $_COOKIE['id'];
        $username = trim($_POST['editusername']);
        function duplicacion($username,$conect){

            $dec=$conect->prepare("SELECT * FROM walkartregister WHERE username=:username");
            $dec->bindParam("username",$username,PDO::PARAM_STR);
            $dec->execute();
            $registros=$dec->fetch(PDO::FETCH_ASSOC);
            $cantidad=$dec->rowCount();

            if($cantidad > 0){
                if(($username == $registros['username'])){
                    return 1;
                }
                 else {
                    return 3;
                }
            } 
        }   
            if(duplicacion($username,$conect)==1){
                return print(1);
            } 
            $usernamelength= strlen($username);
            if ($usernamelength < 6){
                return print(2);
            } else if($usernamelength > 13) {
                return print(3);
            } 

                $consulta = $conect->prepare("UPDATE walkartregister SET username='$username' WHERE id='$id'");
                
                $consulta->bindParam(':username',$username);
                $consulta->execute();
                return print("$username");
            
            
} 



?>