

    <?php
    include("../global/conexion.php");

    if (isset($_POST['username'])){
        
        
            $id = $_COOKIE['txtusermail'];
            $username=$_POST['username'];
            
            $consulta = $conect->prepare("UPDATE walkartregister SET username='$username' WHERE email='$id'");
            
            $consulta->bindParam(':username',$username);
            $consulta->execute();

            if($consulta){
                return print("1");
            } else {
                return print("no");
            }
        }
    ?>
