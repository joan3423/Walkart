<link rel="stylesheet" href="../css/navbar.css">
<?php

include("../global/conexion.php");
include("../global/sesiones.php");

$id = $_SESSION['usuarioid'];
$sentenciaSQL=$conect->query("SELECT * FROM cart WHERE userid='$id'");
$sentenciaSQL->execute();
$data=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $muestra) {
?>
	<div class="lign-delimiter">
		<div style="color: white">
            <img src="../img/cart/<?php echo $muestra['imagep'] ?>" class="img-incart" alt="">
        </div>
	</div>
	<div class="lign-delimiter">
        <div class="information-onecart">
            <?php echo $muestra['namep'] ?>
        </div>
        <div class="information-onecart">
            $<?php echo " " . $muestra['cost'] ?>
        </div>
        <div class="information-onecart">
            <input value="<?php echo $muestra['amount'] ?>" type="number">
        </div>
    </div>
<?php
}
?>