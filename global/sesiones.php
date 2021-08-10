<?php

session_start();
if(!isset($_SESSION['usuario1'])){
    header('Location:loginform.php');
} 

?>