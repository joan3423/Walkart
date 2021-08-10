<?php
if(!isset($_SESSION['usuario1'])){
    $newClass = 'display: inline-flex';
    $newClass2 = 'display: none !important';
} else if(isset($_SESSION['usuario1'])){
    $newClass = 'display: none !important';
    $newClass2 = 'display: inline-flex';
}
?>