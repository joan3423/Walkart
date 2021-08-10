<?php

include('config.php');

$server="mysql:dbname=".BD. ";host=".SERVIDOR;

try{
    $conect= new PDO($server,USUARIO,PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));

}catch(PDOException $e){

    echo "<script> alert('Error...);</script>";
}

?>