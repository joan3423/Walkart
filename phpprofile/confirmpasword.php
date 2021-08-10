<?php
    include("../global/conexion.php");
if (isset($_POST['paswordsend'])){
    
        $id = $_COOKIE['id'];
        $pasword = trim($_POST['paswordsend']);
        $pasword1 = hash('sha512', $pasword);

            $dec=$conect->prepare("SELECT * FROM walkartregister WHERE id=:id AND pasword=:pasword");
            $dec->bindParam("id",$id,PDO::PARAM_STR);
            $dec->bindParam("pasword",$pasword1,PDO::PARAM_STR);
            $dec->execute();

            $cantidadpas=$dec->rowCount();

            if($cantidadpas>=1){
                return print("$pasword");
            } else {
                return print(1);
                return(false);
            }

            
} 



?>