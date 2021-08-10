<?php

include("../global/conexion.php");
    
if (isset($_POST['editemail'])){
    
            
        $id = $_COOKIE['id'];
        $email = trim($_POST['editemail']);

        function duplicacion($email,$conect){

            $dec=$conect->prepare("SELECT * FROM walkartregister WHERE email=:email");
            $dec->bindParam("email",$email,PDO::PARAM_STR);
            $dec->execute();
            $registros=$dec->fetch(PDO::FETCH_ASSOC);
            $cantidad=$dec->rowCount();
        
            if($cantidad > 0){
                if(($email == $registros['email'])){
                    return 1;
                }
                 else {
                    return 3;
                }
            } 
        }   
            if(duplicacion($email,$conect)==1){
                return print(1);
                return(false);
            } 

                if (preg_match('/^[A-z0-9\\.]+@gmail*\\.com$/', "$email")) {
                    $consulta = $conect->prepare("UPDATE walkartregister SET email='$email' WHERE id='$id'");
                    
                    $consulta->bindParam(':email',$email);
                    $consulta->execute();
                    session_start();
                    session_destroy();
                    setcookie('txtusermail',"",time()-100);
                    setcookie('txtpasword',"",time()-100);
                    
                }
                else {
                    return print(2);
                    return(false);
                }

               
                
            
        
		
}



?>